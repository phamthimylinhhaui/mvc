<?php
class File{
    // nv: lấy dl gửi lên lưu vào server -> trả về đường dẫn-> lưu vào csdl
    public static function uploadBase64($base64,$filename){

        return '';
    }
    public static function uploadFile($file,$filename){
        $extension=pathinfo($file['name'],PATHINFO_EXTENSION);
        $filename .='.'.$extension;
        move_uploaded_file($file['tmp_name'],$filename);
        return $filename;
    }

}
