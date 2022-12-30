<?php
if (isset($_FILES['file_name']))
{
    if (file_exists($_FILES['file_name']['tmp_name'])) {
        $path = 'uploads\\';
        $path .= $_FILES['file_name']['full_path'];
        if (!is_dir('uploads'))
        {
            mkdir('uploads');
        }

        if (move_uploaded_file($_FILES['file_name']['tmp_name'],$path)){
            echo "File Uploaded Succesfully!";
        }else{
            echo "Upload failed!!!";
        }

    }
}