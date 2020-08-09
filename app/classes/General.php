<?php
namespace App\classes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class General{
   
    
   public static function uploadImage($folder,$file)
{
    // $filenameWithExt = $file->getClientOriginalName();
    //     $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
    //     $extension = $file->getClientOriginalExtension();
    //     $fileNameToStore= $filename.'_'.time().'.'.$extension;
    //     $path = $file->move('/storage/images', $fileNameToStore);
    $filenameWithExt = $file->getClientOriginalName();
    $extension = $file->getClientOriginalExtension();
    $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
    $fileNameToStore= $filename.'_'.time().'.'.$extension;
    $path = $file->move('images', $fileNameToStore);
        return $fileNameToStore;
}


}



?>