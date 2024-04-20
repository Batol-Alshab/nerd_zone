<?php
namespace App\Http\Controllers\Api;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

trait FileUploader
{  
    public function uploadAll($request, $data, $name, $inputName = 'image')
    {
        $requestFile = $request->file($inputName);
        
        try {
            $dir = $data. $name;
            $fixName=$requestFile->getClientOriginalName();
            if ($requestFile) {
                $requestFile->move($dir, $fixName);
                $fullPath= asset($data. $name.$fixName);
                $request->image = $fullPath;
                $data->update([
                    $inputName => $request->image,
                ]);
            }

            return true;
        } catch (\Throwable $th) {
            report($th);

            return $th->getMessage();
        }
    }

    public function uploadFile($request, $data, $name, $inputName = 'url')
    {
        $requestFile = $request->file($inputName);
        
        try {
            $dir = $data. $name;
            $fixName=$requestFile->getClientOriginalName();
            if ($requestFile) {
                $requestFile->move($dir, $fixName);
                $fullPath= asset($data. $name.$fixName);
                $request->url = $fullPath;
                $data->update([
                    $inputName => $request->url,
                ]);
            }

            return true;
        } catch (\Throwable $th) {
            report($th);

            return $th->getMessage();
        }
    }

    // delete file
    public function deleteFile($fileName = 'files')
    {
        try {
            if ($fileName) {
                Storage::delete('public/files/' . $fileName);
            }

            return true;
        } catch (\Throwable $th) {
            report($th);

            return $th->getMessage();
        }
    }

    /**
     * For Upload Images.
     * @param mixed $request
     * @param mixed $data
     * @param mixed $name
     * @param mixed|null $inputName
     * @return bool|string
     */
    // public function uploadImage($request, $data, $name, $inputName = 'image')
    // {
    //     $requestFile = $request->file($inputName);
        
    //     try {
    //         $dir = $data.'/'. $name;
    //         $fixName=$requestFile->getClientOriginalName();
    //         if ($requestFile) {
    //             $requestFile->move($dir, $fixName);
    //             $fullPath= asset($data.'/'. $name.'/'.$fixName);
    //             $request->image = $fullPath;
    //             $data->update([
    //                 $inputName => $request->image,
    //             ]);
    //         }

    //         return true;
    //     } catch (\Throwable $th) {
    //         report($th);

    //         return $th->getMessage();
    //     }
    // }

    // public function uploadPhoto($request, $data, $name)
    // {
    //     try {
    //         $dir = 'public/photos/' . $name;
    //         $fixName = $data->id . '-' . $name . '.' . $request->file('photo')->extension();

    //         if ($request->file('photo')) {
    //             Storage::putFileAs($dir, $request->file('photo'), $fixName);
    //             $request->photo = $fixName;

    //             $data->update([
    //                 'photo' => $request->photo,
    //             ]);
    //         }
    //     } catch (\Throwable $th) {
    //         report($th);

    //         return $th->getMessage();
    //     }
    // }
    // public function uploadFile($request, $input = "file", $folder_name)
    // {
    //     try {
    //         if ($request->hasFile($input)) {
    //             $file = $request->file($input);
    //             $file_name =  time() . '_' . $file->getClientOriginalName();
    //             $path = "files/" . $folder_name;
    //             $file_full_name = $path . $file_name;
    //             $file->move($path, $file_name);

    //             return $file_full_name;
    //         }
    //     } catch (\Throwable $th) {
    //         return $th->getMessage();
    //     }
    // }

    // public function deleteImage($file_name)
    // {
    //     if (File::exists($file_name)) {
    //         File::delete($file_name);
    //         return true;
    //     }

    //     return false;
    // }
}
