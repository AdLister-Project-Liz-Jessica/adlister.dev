<?php
session_start();
 require_once __DIR__ .'/../bootstrap.php';

?>
<!DOCTYPE html>
<html>
<head>
    <title>Kitchen Kingdom</title>
    <?php require __DIR__ .'/../views/partials/head.php'; ?>
</head>
<body>
    <?php require __DIR__ .'/../views/partials/navbar.php'; ?>
   
    <?php require $main_view; ?> 
	<?php require __DIR__ . '/../views/partials/footer.php'; ?>

    <?php require __DIR__ . '/../views/partials/common_js.php'; ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <script src="/js/bootstrap.min.js"></script>
</body>
</html>