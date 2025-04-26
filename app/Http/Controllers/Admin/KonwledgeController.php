<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreateKonwledgeRequest;
use App\Http\Requests\Admin\UpdateKonwledgeRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\Admin\Classification;
use App\Repositories\Admin\KonwledgeRepository;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;
use Flash;

class KonwledgeController extends AppBaseController
{
    /** @var KonwledgeRepository $konwledgeRepository*/
    private $konwledgeRepository;

    public function __construct(KonwledgeRepository $konwledgeRepo)
    {
        $this->konwledgeRepository = $konwledgeRepo;
    }

    /**
     * Display a listing of the Konwledge.
     */
    public function index(Request $request)
    {
        $konwledges = $this->konwledgeRepository->paginate(10);

        return view('admin.konwledges.index')
            ->with('konwledges', $konwledges);
    }

    /**
     * Show the form for creating a new Konwledge.
     */
    public function create()
    {
        $classifications = Classification::all()->pluck('name', 'id');
        return view('admin.konwledges.create')->with('classifications', $classifications);
    }

    /**
     * Store a newly created Konwledge in storage.
     */
    public function store(CreateKonwledgeRequest $request)
    {
        $input = $request->all();

        $input['image'] = $this->processImage($request->file('image'), 'cover_front_image');

        $konwledge = $this->konwledgeRepository->create($input);

        Flash::success('當鋪知識儲存成功。');

        return redirect(route('admin.konwledges.index'));
    }

    /**
     * Display the specified Konwledge.
     */
    public function show($id)
    {
        $konwledge = $this->konwledgeRepository->find($id);

        if (empty($konwledge)) {
            Flash::error('Konwledge not found');

            return redirect(route('admin.konwledges.index'));
        }

        return view('admin.konwledges.show')->with('konwledge', $konwledge);
    }

    /**
     * Show the form for editing the specified Konwledge.
     */
    public function edit($id)
    {
        $konwledge = $this->konwledgeRepository->find($id);

        if (empty($konwledge)) {
            Flash::error('Konwledge not found');

            return redirect(route('admin.konwledges.index'));
        }

        $classifications = Classification::all()->pluck('name', 'id');

        return view('admin.konwledges.edit')->with('konwledge', $konwledge)->with('classifications', $classifications);
    }

    /**
     * Update the specified Konwledge in storage.
     */
    public function update($id, UpdateKonwledgeRequest $request)
    {
        $konwledge = $this->konwledgeRepository->find($id);

        if (empty($konwledge)) {
            Flash::error('Konwledge not found');

            return redirect(route('admin.konwledges.index'));
        }

        $input = $request->all();

        $input['image'] = $this->handleImageUpload($request->file('image'), $konwledge['image'], 'cover_front_image');

        $konwledge = $this->konwledgeRepository->update($input, $id);

        Flash::success('當鋪知識更新成功。');

        return redirect(route('admin.konwledges.index'));
    }

    /**
     * Remove the specified Konwledge from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $konwledge = $this->konwledgeRepository->find($id);

        if (empty($konwledge)) {
            Flash::error('Konwledge not found');

            return redirect(route('admin.konwledges.index'));
        }

        $this->konwledgeRepository->delete($id);

        Flash::success('當鋪知識刪除成功。');

        return redirect(route('admin.konwledges.index'));
    }

    // 共用的圖片處理函式
    function processImage($image, $uploadDir, $resizeWidth = 800, $quality = 75)
    {
        if ($image) {
            $path = public_path('uploads/images/' . $uploadDir) . '/';
            $filename = time() . '_' . $image->getClientOriginalName();

            if (!file_exists($path)) {
                mkdir($path, 0755, true);
            }

            // 壓縮圖片
            $image = Image::make($image)
                ->orientate()
                ->resize($resizeWidth, null, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })
                ->encode('jpg', $quality); // 設定 JPG 格式和品質
            $image->save($path . $filename);

            return 'images/' . $uploadDir . '/' . $filename;
        }

        return '';
    }

    // 共用圖片處理函式
    function handleImageUpload($newImage, $existingImagePath, $uploadDir, $resizeWidth = 800, $quality = 75)
    {
        if ($newImage) {
            $path = public_path('uploads/images/' . $uploadDir . '/');
            $filename = time() . '_' . $newImage->getClientOriginalName();

            // 確保目錄存在
            if (!file_exists($path)) {
                mkdir($path, 0755, true);
            }

            // 若已有圖片，刪除舊圖片
            if (!empty($existingImagePath) && File::exists(public_path('uploads/' . $existingImagePath))) {
                File::delete(public_path('uploads/' . $existingImagePath));
            }

            // 壓縮並保存新圖片
            $image = Image::make($newImage)
                ->orientate()
                ->resize($resizeWidth, null, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })
                ->encode('jpg', $quality); // 設定 JPG 格式和品質
            $image->save($path . $filename);

            return 'images/' . $uploadDir . '/' . $filename;
        }

        // 若無新圖片，返回舊圖片路徑
        return $existingImagePath;
    }
}
