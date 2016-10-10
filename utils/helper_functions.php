<?php
// List of helper functions used throughout the application.
// Primarily used within the PageController function.


// takes image from form submission and moves it into the uploads directory
function saveUploadedImage($input_name)
{
    $valid = true;

    // checks if $input_name is in the files super global
    if(isset($_FILES[$input_name]) && $_FILES[$input_name]['name'])
    {

        // checks if there are any errors on the upload from the submission
        if(!$_FILES[$input_name]['error'])
        {
            $tempFile = $_FILES[$input_name]['tmp_name'];
            $positionOfLastSlash = strrpos($tempFile, '/');
            $newName = substr($tempFile, $positionOfLastSlash);
            $extension = pathinfo($_FILES[$input_name]['name'], PATHINFO_EXTENSION);

            
            // Validate Size and Extension
            if( $_FILES[$input_name]['size'] > (1024000000))
            {
                $valid = false;

            }
            
            // only allows certain file extensions
            if( $extension != 'jpg' && $extension != 'jpeg' && $extension != 'png' && $extension != 'gif')
            {
                $valid  = false;

            }
            
            // If Image file makes it to this point, send file to this directory
            if($valid)
            {
                $image_url = '/img/uploads' . $newName . '.' . $extension;
                move_uploaded_file($tempFile, __DIR__ .'/../public' . $image_url);
                return $image_url;

            } else {
                
                return null;

            }
        }

    } else {
        
        return null;
    }
}

function saveTheProduct()
{
    // if user is logged in
    if (Auth::check()) {

        // assign the user id
        $user_id = Auth::id();        
            
        //validate uploaded file & save file name in variable
        $input_name = Input::getImage('image_url');
        $image_url = saveUploadedImage($input_name['name']);

        // set the info from post requests to variables
        $product_name = Input::get('product_name');
        $price = Input::get('price');
        $description = Input::get('description');

        // create new instance of product
        $newProduct = new Product();
        $newProduct->user_id = $user_id;
        $newProduct->product_name = $product_name;
        $newProduct->price = $price;
        $newProduct->description = $description;
        $newProduct->image_url = saveUploadedImage('image_url');

        $newProduct->save();


    } 

}
