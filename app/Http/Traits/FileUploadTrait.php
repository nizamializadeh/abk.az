<?php
namespace App\Http\Controllers\Traits;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Intervention\Image\Facades\Image;

trait FileUploadTrait
{
    /**
     * File upload trait used in controllers to upload files
     */
    public function saveFiles(Request $request,$folderName)
    {
        if (! file_exists(public_path('uploads'))) {
            mkdir(public_path('uploads'), 0777);
            if (! file_exists(public_path('uploads/'.$folderName))) {
                mkdir(public_path('uploads/'.$folderName), 0777);
            }
        }
        $finalRequest = $request;
        foreach ($request->all() as $key => $value) {
            if ($request->hasFile($key)) {
                    $image_name = Carbon::now()->format('YmdHs') . rand(1, 99999) . '.' . $request->file($key)->getClientOriginalExtension();
                    $request->file($key)->move(public_path('uploads/' . $folderName), $image_name);
                    $finalRequest = new Request(array_merge($finalRequest->all(), [$key => $image_name]));
            }
        }
        return $finalRequest;
    }
}
