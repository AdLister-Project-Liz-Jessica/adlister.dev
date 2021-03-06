<?php

require_once __DIR__ . '/../utils/helper_functions.php';

function pageController()
{

    // defines array to be returned and extracted for view
    $data = [];

    // define var product id to access correct product on the show page
    $productId = Input::get('id');

    // finds position for ? in url so we can look at the url minus the get variables
    $get_pos = strpos($_SERVER['REQUEST_URI'], '?');

    // if a ? was found, cuts off get variables if not just gives full url
    if ($get_pos !== false)
    {

        $request = substr($_SERVER['REQUEST_URI'], 0, $get_pos);
    }
    else
    {

        $request = $_SERVER['REQUEST_URI'];
    }

    // switch that will run functions and setup variables dependent on what route was accessed

    switch ($request) {
        case '/':
            $main_view = '../views/home.php';
            $data['features'] = Product::features();
            break;
        case '/users/profile':
            $main_view = '../views/users/account.php';
            $data['users_ads'] = Product::findAllAdsFromThisUser(Auth::id());
            break;
        case '/users/signup': 
            $main_view = '../views/users/signup.php';
            break;
        case '/users/login':
            $main_view = '../views/users/login.php';
            break;
        case '/users/logout':
            $main_view = '../views/users/logout.php';
            break;
        case '/ads/create':
            $main_view = '../views/ads/create.php';
            if (!empty($_POST)) {
                saveTheProduct();
            }
            break;
        // case '/ads/edit':
        //     $main_view = '../views/ads/edit.php';
        //     if (!empty($_POST)) {
        //         saveTheProduct();
        //     }
        //     break;
        case '/ads/index':
            $main_view = '../views/ads/index.php';
            $data['products'] = Product::all();
            break;
        case '/ads/show':
            $main_view = '../views/ads/show.php';
            $data['products'] = Product::find($productId);
            break;
        //the following edit page is not doing much yet, we will find out in the future what it's for..I hope
        case '/users/edit':
            $main_view = '../views/users/edit.php';
            break;

        default:    // displays 404 if route not specified above
            $main_view = '../views/404.php';
            break;
    }

    $data['main_view'] = $main_view;


    return $data;
}

extract(pageController());