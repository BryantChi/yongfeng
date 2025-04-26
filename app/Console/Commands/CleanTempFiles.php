<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class CleanTempFiles extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'clean:temp-files';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clean up old temporary files';

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
        // $files = Storage::files('uploads/temp/editor');
        // $now = now();

        // foreach ($files as $file) {
        //     if ($now->diffInMinutes(Storage::lastModified($file)) > 60) { // 超過60分鐘
        //         Storage::delete($file);
        //     }
        // }

        // $this->info('Temporary files cleaned up.');
        $tempPath = public_path('uploads/temp/editor');
        $files = File::files($tempPath);

        foreach ($files as $file) {
            $fileCreationTime = Carbon::createFromTimestamp($file->getCTime());

            if (now()->diffInMinutes($fileCreationTime) > 60) { // 超過60分鐘
                // unlink($file->getRealPath());
                File::delete($file->getRealPath());
            }
        }

        $this->info('暫存檔案清理完成');
    }
}
