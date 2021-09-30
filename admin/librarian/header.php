<!DOCTYPE html>
<html>
<head>
		<title> School</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap -->
			<link href="../css/bootstrap.css" rel="stylesheet" media="screen">
			<link href="../css/bootstrap-responsive.css" rel="stylesheet" media="screen">
			<link href="../css/docs.css" rel="stylesheet" media="screen">
			<link href="../css/diapo.css" rel="stylesheet" media="screen">
			<link href="../css/font-awesome.css" rel="stylesheet" media="screen">
			<link rel="stylesheet" type="text/css" href="../css/style.css" />
			<link rel="stylesheet" type="text/css" href="../css/DT_bootstrap.css" />
			<link rel="stylesheet" type="text/css" media="print" href="../css/print.css" />

	<!-- js -->			
    <script src="../js/jquery-1.7.2.min.js"></script>
    <script src="../js/bootstrap.js"></script>
	 <script src="../js/jquery.hoverdir.js"></script>
			
<script>
jQuery(document).ready(function() {
$(function(){
	$('.pix_diapo').diapo();
});
});
</script>	
	<noscript>
			<style>
				.da-thumbs li a div {
					top: 0px;
					left: -100%;
					-webkit-transition: all 0.3s ease;
					-moz-transition: all 0.3s ease-in-out;
					-o-transition: all 0.3s ease-in-out;
					-ms-transition: all 0.3s ease-in-out;
					transition: all 0.3s ease-in-out;
				}
				.da-thumbs li a:hover div{
					left: 0px;
				}
			</style>
		</noscript>		
		
	 <script type="text/javascript" charset="utf-8" language="javascript" src="../js/jquery.dataTables.js"></script>
    <script type="text/javascript" charset="utf-8" language="javascript" src="../js/DT_bootstrap.js"></script>
	<script type='text/javascript' src='../scripts/jquery.easing.1.3.js'></script> 
<script type='text/javascript' src='../scripts/jquery.hoverIntent.minified.js'></script> 
<script type='text/javascript' src='../scripts/diapo.js'></script> 


<!--sa calendar-->	
		<script type="text/javascript" src="../js/datepicker.js"></script>
        <link href="../css/datepicker.css" rel="stylesheet" type="text/css" />


<?php
include 'book.class.php';
include 'admin.class.php';
include 'menu.class.php';
if(isset($_POST['submit']))
{
	 
	$them = new book();



	$them->ma_sach=$_POST['ma_sach'];
	$them->ten_sach =$_POST['ten_sach'];
	$them->tac_gia =$_POST['tac_gia'];
	$them->nha_xuat_ban =$_POST['nha_xuat_ban'];
	$them->nam_xuat_ban =$_POST['nam_xuat_ban'];
	$them->so_trang =$_POST['so_trang'];
	$them->the_loai =$_POST['the_loai'];
	$them->mo_ta =$_POST['mo_ta'];
	$them->tinh_trang =$_POST['tinh_trang'];

	if(isset($_FILES['anh']))
	{
		// ảnh
		$file_anh =$_FILES['anh'];
		$them->anh =$file_anh['name'];

		$them->anh = $them->stripUnicode($them->anh);
		move_uploaded_file($file_anh['tmp_name'],'upload/'. $them->anh);
		
		
		// tài liệu 
		$file_tai_lieu = $_FILES['tai_lieu'];
		$them->tai_lieu =$file_tai_lieu['name'];
	

		$them->tai_lieu = $them->stripUnicode($them->tai_lieu);
		move_uploaded_file($file_tai_lieu['tmp_name'],'upload/'. $them->tai_lieu);

		$them->insert();
	
		header('location:books.php');
	}
	
	

}

if(isset($_POST['submit_add_admin']))
{	$insert = new admin();
	$insert->user = $_POST['user'];
	$insert->pass = $_POST['pass'];
	$insert->name = $_POST['name'];
	$insert->email = $_POST['email'];
	$insert->inser_admin();
	header('location: admin.php');
}
else
 echo "lỗi rồi";
?>



</head>

<body>