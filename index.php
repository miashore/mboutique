<!DOCTYPE html>
<html>
<head>
    <title>MBoutique</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/styles.css" type="text/css">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<!-- Navigation -->
<?php
include('templates/menu.php');
?>
<!-- Main content -->
<?php
$page_i_want = $_GET['page'];
if(isset($menu[$page_i_want])){
    include($menu[$page_i_want]['url']);
} else {
    include('pages/404.php');
}
?>
<!-- Footer content -->
<?php
include('templates/footer.php');
?>
</body>
</html>