<?php
if ( isset($_FILES['file']) ) {
    if ( file_exists($_FILES['file']['tmp_name']) ) {
        $filename = $_FILES['file']['name'];
        $folder = $_POST['folder'];
        $path = $folder . '/' . $filename;
        if (! is_dir($folder) ) {
            mkdir($folder);
            echo "<h1 style='color: blue;'>Directory makes successfully!</h1>";
        }
        else {
            echo "<h1 style='color: red;'>Directory exists!</h1>";
        }

        move_uploaded_file($_FILES['file']['tmp_name'] , $path);
    }
    else {
        echo "There isn't any file!";
    }
}