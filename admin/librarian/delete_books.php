<?php
include "book.class.php";
if(isset($_GET['ma_sach']))
{
    $delete = new book();
    $delete->ma_sach = $_GET['ma_sach'];
    $delete->del();


}

header('location:books.php');
?>