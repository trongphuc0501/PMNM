<?php

// include 'class/Db.php';
// include 'class/Book.php';
function myLoad($tenClass)
{
    include "../db_php/$tenClass.php";
}
spl_autoload_register('myLoad');
$obj = new Products(); //load Products.php , Db.php

$id = $_GET['id'] ?? '';
$n = $obj->delete($id);
header('location:/user.php');
// echo "Da xoa $n book";
// echo "<a href=index.php>Trang chu</a>";