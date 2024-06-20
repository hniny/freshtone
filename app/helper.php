<?php
namespace App;
use File;
class Helper{
    public static function deleteOldImage($old_galleries){
       
        if(json_decode($old_galleries)!=null){                     
            foreach(json_decode($old_galleries) as $old_gallery){
                $image_path="image/".$old_gallery;
                if(File::exists($image_path)){
                    File::delete($image_path);
                }
            } 
        }
        else{                
            $image_path="image/".$old_galleries;            
            if(File::exists($image_path)){
                File::delete($image_path);
            }  
        }
    }
}

?>