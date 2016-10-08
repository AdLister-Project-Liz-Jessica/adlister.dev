<?php
// List of helper functions used throughout the application.
// Primarily used within the PageController function.


// takes image from form submission and moves it into the uploads directory
function saveUploadedImage($input_name)
{
    $valid = true;
    var_dump($valid);
    // checks if $input_name is in the files super global
    echo (isset($_FILES[$input_name]));
    echo ($_FILES[$input_name]['name']);
    if(isset($_FILES[$input_name]) && $_FILES[$input_name]['name'])
    {
        var_dump($_FILES);
        // checks if there are any errors on the upload from the submission
        if(!$_FILES[$input_name]['error'])
        {
            $tempFile = $_FILES[$input_name]['tmp_name'];
            $positionOfLastSlash = strrpos($tempFile, '/');
            $newName = substr($tempFile, $positionOfLastSlash);
            $extension = pathinfo($_FILES[$input_name]['name'], PATHINFO_EXTENSION);
            var_dump($_FILES);
            
            // Validate Size and Extension
            if( $_FILES[$input_name]['size'] > (1024000000))
            {
                $valid = false;
                var_dump($valid);
            }
            
            // only allows certain file extensions
            if( $extension != 'jpg' && $extension != 'jpeg' && $extension != 'png' && $extension != 'gif')
            {
                $valid  = false;
                var_dump($valid);
            }
            
            // If Image file makes it to this point, send file to this directory
            if($valid)
            {
                $image_url = '/img/uploads' . $newName . '.' . $extension;
                move_uploaded_file($tempFile, __DIR__ .'/../public' . $image_url);
                var_dump($image_url);
                return $image_url;

            } else {
                
                return null;

            }
        }

    } else {
        
        return null;
    }
}
