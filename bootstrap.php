<?php

$_ENV = require_once __DIR__ . '/.env.php';
// require models
require_once __DIR__ . '/models/User.php';
require_once __DIR__ . '/models/Product.php';


// require helper classes
require_once __DIR__ . '/utils/Auth.php';
require_once __DIR__ . '/utils/Input.php';

// require helper functions
require_once __DIR__ . '/utils/helper_functions.php';

// require front controller
require_once __DIR__ . '/controllers/PageController.php';