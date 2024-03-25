<?php

namespace App\Traits;

use Illuminate\Support\Facades\Log;

trait UploadTrait
{
    public function uploadImage($upload_path, $image) : ?string
    {
        $fileName = NULL;
        if (isset($image) && !empty($image)) {
            Log::debug(print_r("uploading image: ", true));
            $fileName = time() . $image->getClientOriginalName();
            Log::debug(print_r($fileName, true));

            $this->storage->put($upload_path . $fileName, file_get_contents($image->getRealPath()));
        }
        return $fileName;
    }

    public function uploadPdf($upload_path, $pdf) : ?string
    {
        $fileName = NULL;
        if (isset($pdf) && !empty($pdf)) {
            Log::debug(print_r("uploading pdf: ", true));
            $fileName = time() . $pdf->getClientOriginalName();
            Log::debug(print_r($fileName, true));

            $this->storage->put($upload_path . $fileName, file_get_contents($pdf->getRealPath()));
        }
        return $fileName;
    }
}
