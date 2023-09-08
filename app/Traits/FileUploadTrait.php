<?php


namespace App\Traits;

use Illuminate\Http\Request;
use File;

trait FileUploadTrait
{
    public function handleFileUpload(Request $request, string $fieldname, ?string $oldPath = null, string $dir = 'uploads'): ?string
    {

        /**check request has file */
        if (!$request->hasFile($fieldname)) {
            return null;
        }

        /** delete the existing image if have */
        if ($oldPath && File::exists(public_path($oldPath))) {
            File::delete(public_path($oldPath));
        }


        /**image path */
        $file = $request->file($fieldname);
        $extension = $file->getClientOriginalExtension();
        $updateFileName = \Str::random(30) . '.' . $extension;

        $file->move(public_path($dir), $updateFileName);

        $filepath = $dir . '/' . $updateFileName;
        return $filepath;


    }
}
