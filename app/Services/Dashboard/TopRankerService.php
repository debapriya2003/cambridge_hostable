<?php

namespace App\Services\Dashboard;

use App\Traits\UploadTrait;
use Exception;
use Illuminate\Support\Facades\Storage;

class TopRankerService
{
    use UploadTrait;

    protected $upload_image_path;
    protected $storage;

    public function __construct()
    {
        $this->upload_image_path = 'images' . DIRECTORY_SEPARATOR . 'top_rankers' . DIRECTORY_SEPARATOR;
        $this->storage = Storage::disk('public');
    }

    public function uploadPhoto($image)
    {
        try {
            $fileName =  $this->uploadImage($upload_path = $this->upload_image_path, $image = $image);
            return $fileName;
        } catch (\Throwable $th) {
            throw $th;
        }
        throw new Exception("Unable to upload photo");
    }
}
