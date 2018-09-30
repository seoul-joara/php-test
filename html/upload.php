<?php
 
$path = "./uploads/";
 
$valid_formats = array("jpg", "png", "gif", "bmp","jpeg");
$data   = array();
$data['success'] = false;
 
if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST")
{
    $name = $_FILES['image']['name'];
    $size = $_FILES['image']['size'];

    if(strlen($name))
    {      
        list($txt, $ext) = explode(".", $name);
        if(in_array($ext,$valid_formats))
        {
            if($size < ( 1024*1024 )) // Image size max 1 MB
            {
                $actual_image_name = time()."-image.".$ext;
                $tmp = $_FILES['image']['tmp_name'];
                if(move_uploaded_file($tmp, $path.$actual_image_name))
                {      
                    $data['success'] = true;
                    $data['url']  = "http://arjoe.devleaguer.com/uploads/".$actual_image_name;  
                }
                else
                {
                    $data['success'] = false;
                    $data['error'] = "error";
                }                     
            }
            else
                $data['error'] = "Image file size max 1 MB";
        }
        else
            $data['error'] = "Invalid file format..";
    }
    else
        $data['error'] = "Please select image..!";
}
 
echo json_encode($data);
 
?>