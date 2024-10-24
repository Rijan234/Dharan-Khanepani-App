<?php

function uploadImage($request, $object, $fileName)
{
    if($request->hasFile($fileName)){
        $file = $request->$fileName;
        $newName = uniqid().".".$fileName;
        $file->move("images", $newName);
        $object->$fileName= "images/$newName";
    }
}

?>