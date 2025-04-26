<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreateCaseInfoRequest;
use App\Http\Requests\Admin\UpdateCaseInfoRequest;
use App\Repositories\Admin\CaseInfoRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\Admin\CaseInfo;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Response;

class CaseInfoController extends AppBaseController
{
    /** @var CaseInfoRepository $caseInfoRepository*/
    private $caseInfoRepository;

    public function __construct(CaseInfoRepository $caseInfoRepo)
    {
        $this->caseInfoRepository = $caseInfoRepo;
    }

    /**
     * Display a listing of the CaseInfo.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        // $caseInfos = $this->caseInfoRepository->paginate(10);
        $caseInfos = CaseInfo::orderBy('id', 'desc')->get();

        return view('admin.case_infos.index')
            ->with('caseInfos', $caseInfos);
    }

    /**
     * Show the form for creating a new CaseInfo.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.case_infos.create');
    }

    /**
     * Store a newly created CaseInfo in storage.
     *
     * @param CreateCaseInfoRequest $request
     *
     * @return Response
     */
    public function store(CreateCaseInfoRequest $request)
    {
        $input = $request->all();
        $content = $input['case_content'];
        $tempFiles = $this->extractFilePathsFromContent($content);

        foreach ($tempFiles as $tempPath) {
            // dd($tempPath);
            if (!str_starts_with($tempPath, 'uploads/temp/editor/')) {
                $tempPathFormat = preg_replace('/(\.\.\/)+/', '', $tempPath);
            }

            $filename = basename($tempPathFormat);
            $destinationPath = public_path('uploads/editor');

            // 確保目錄存在
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }

            $newPath = $destinationPath . '/' . $filename;

            // 移動檔案
            if (File::exists($tempPathFormat)) {
                File::move($tempPathFormat, $newPath);

                // 更新內容中的檔案路徑
                $content = str_replace($tempPath, asset('uploads/editor/' . $filename), $content);
            }
        }

        $input['case_content'] = $content;

        $caseInfo = $this->caseInfoRepository->create($input);

        Flash::success('成功案例新增。');

        return redirect(route('admin.caseInfos.index'));
    }

    /**
     * Display the specified CaseInfo.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $caseInfo = $this->caseInfoRepository->find($id);

        if (empty($caseInfo)) {
            Flash::error('Case Info not found');

            return redirect(route('admin.caseInfos.index'));
        }

        return view('admin.case_infos.show')->with('caseInfo', $caseInfo);
    }

    /**
     * Show the form for editing the specified CaseInfo.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $caseInfo = $this->caseInfoRepository->find($id);

        if (empty($caseInfo)) {
            Flash::error('Case Info not found');

            return redirect(route('admin.caseInfos.index'));
        }

        return view('admin.case_infos.edit')->with('caseInfo', $caseInfo);
    }

    /**
     * Update the specified CaseInfo in storage.
     *
     * @param int $id
     * @param UpdateCaseInfoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCaseInfoRequest $request)
    {
        $caseInfo = $this->caseInfoRepository->find($id);

        if (empty($caseInfo)) {
            Flash::error('Case Info not found');

            return redirect(route('admin.caseInfos.index'));
        }

        $input = $request->all();

        $content = $input['case_content'];
        $tempFiles = $this->extractFilePathsFromContent($content);

        foreach ($tempFiles as $tempPath) {
            // dd($tempPath);
            if (!str_starts_with($tempPath, 'uploads/temp/editor/')) {
                $tempPathFormat = preg_replace('/(\.\.\/)+/', '', $tempPath);
            }

            $filename = basename($tempPathFormat);
            $destinationPath = public_path('uploads/editor');

            // 確保目錄存在
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }

            $newPath = $destinationPath . '/' . $filename;

            // 移動檔案
            if (File::exists($tempPathFormat)) {
                File::move($tempPathFormat, $newPath);

                // 更新內容中的檔案路徑
                $content = str_replace($tempPath, asset('uploads/editor/' . $filename), $content);
            }
        }

        $input['case_content'] = $content;

        $caseInfo = $this->caseInfoRepository->update($input, $id);

        Flash::success('成功案例更新。');

        return redirect(route('admin.caseInfos.index'));
    }

    /**
     * Remove the specified CaseInfo from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $caseInfo = $this->caseInfoRepository->find($id);

        if (empty($caseInfo)) {
            Flash::error('Case Info not found');

            return redirect(route('admin.caseInfos.index'));
        }

        // 提取內容中的檔案路徑
        $files = $this->extractFilePathsFromContent($caseInfo->case_content);

        foreach ($files as $filePath) {
            if (File::exists($filePath)) {
                File::delete($filePath);
            }
        }

        $this->caseInfoRepository->delete($id);

        Flash::success('成功案例刪除。');

        return redirect(route('admin.caseInfos.index'));
    }

    protected function extractFilePathsFromContent($content)
    {
        $pattern = '/src="([^"]+)"/';
        preg_match_all($pattern, $content, $matches);

        return array_map(function ($url) {
            return str_replace(asset('/'), '', $url); // 去掉完整 URL，保留相對路徑
        }, $matches[1]);
    }
}
