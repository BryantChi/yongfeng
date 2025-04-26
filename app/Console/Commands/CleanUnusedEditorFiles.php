<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class CleanUnusedEditorFiles extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'clean:unused-editor-files';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clean up unused files in public/uploads/editor that are not referenced in any articles';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // 定義檔案目錄
        $editorPath = public_path('uploads/editor');
        if (!File::exists($editorPath)) {
            $this->info('Editor directory does not exist.');
            return;
        }

        // 獲取所有文章內容
        $articles = DB::table('case_infos')->pluck('case_content'); // 假設文章內容存儲在 `articles` 表的 `content` 欄位中

        // 收集所有內容中的 src 路徑
        $usedFiles = [];
        foreach ($articles as $content) {
            preg_match_all('/src="([^"]+)"/', $content, $matches);
            foreach ($matches[1] as $url) {
                $relativePath = str_replace(asset('/'), '', $url); // 將 URL 轉為相對路徑
                if (str_starts_with($relativePath, 'uploads/editor/')) {
                    $usedFiles[] = public_path($relativePath); // 轉為完整路徑
                }
            }
        }

        // 獲取目錄下的所有檔案
        $allFiles = File::files($editorPath);

        $deletedCount = 0;

        foreach ($allFiles as $file) {
            $filePath = $file->getRealPath();

            // 若檔案未被使用則刪除
            if (!in_array($filePath, $usedFiles)) {
                File::delete($filePath);
                $deletedCount++;
                $this->info("Deleted: {$file->getFilename()}");
            }
        }

        $this->info("Cleanup completed. {$deletedCount} unused files deleted.");
    }
}
