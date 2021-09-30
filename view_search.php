<?php
include 'header.php';
?>
<?php 
include 'search_top.php';
?>
<?php
include 'nav.php';
?>
<?php
if(isset($_POST['submit_search']))
{
    $index = $_POST['search_select'];
    $content = $_POST['search_content'];
    echo ('<h1>'. $index  .': '.$content .'</h1>');
}

?>
<?php include 'footer.php' ?>