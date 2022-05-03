<?php

$page = isset($_GET['page']) ? $_GET['page'] : 'dashboard';
$path = "./pages/{$page}.php";

require './inc/header.php';

if (file_exists($path)) {
    require "{$path}";
}else{
    require "./inc/404.php"; 
}
// require './pages/home.php';
require './inc/footer.php';
?>