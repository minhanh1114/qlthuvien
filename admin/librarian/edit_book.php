<?php 
include 'header.php';

$cap_nhat = new book();
  $ma_sach="";
  $ten_sach="";
  $tac_gia ="";
  $nha_xuat_ban="";
  $nam_xuat_ban="";
  $so_trang="";
  $the_loai="";
  $mo_ta="";
  $tinh_trang="";
  $anh="";
  $tai_lieu="";
  if(isset($_GET['ma_sach']))
  {
	$ma_sach= $_GET['ma_sach'];
	
	// $sql = "SELECT * FROM `sach` WHERE ma_sach = '$ma_sach' ";
	$results=$cap_nhat->get_ma_sach($ma_sach);

	$ten_sach = $results['ten_sach'];
	$tac_gia = $results['tac_gia'];
	$nha_xuat_ban=$results['nha_xuat_ban'];
	$nam_xuat_ban=$results['nam_xuat_ban'];
	$so_trang=$results['so_trang'];
	$the_loai =$results['the_loai'];
	$mo_ta=$results['mo_ta'];
	$tinh_trang=$results['tinh_trang'];
	$anh=$results['anh'];
	$tai_lieu=$results['tai_lieu'];
	
	// click submit update (save)
	if(isset($_POST['submit_update']))
{

	
	$cap_nhat->ma_sach     = $_GET['ma_sach'];
	$cap_nhat->ten_sach 	  = $_POST['ten_sach'];
	$cap_nhat->tac_gia 	  =     $_POST['tac_gia'];
	$cap_nhat->nha_xuat_ban = $_POST['nha_xuat_ban'];
	$cap_nhat->nam_xuat_ban = $_POST['nam_xuat_ban'];
	$cap_nhat->so_trang 	  =   $_POST['so_trang'];	
	$cap_nhat->the_loai 	  =   $_POST['the_loai'];	
	$cap_nhat->tinh_trang   = $_POST['tinh_trang'];	
	$cap_nhat->mo_ta = $_POST['mo_ta'];
	// tên file ban đầu
	$cap_nhat->anh = $anh;
	$cap_nhat->tai_lieu=$tai_lieu;
	// kiểm tra có file hay không
	if(isset($_FILES['anh']) and isset($_FILES['du_lieu']) )
	{
	
		$file_anh =$_FILES['anh'];
		$cap_nhat->anh =$file_anh['name'];
		move_uploaded_file($file_anh['tmp_name'],'upload/'. $cap_nhat->anh);
		// tài liệu 
		$file_tai_lieu = $_FILES['tai_lieu'];
		$cap_nhat->tai_lieu =$file_tai_lieu['name'];
		move_uploaded_file($file_tai_lieu['tmp_name'],'upload/'. $cap_nhat->tai_lieu);

	}
	
	//Thực thi ham update()	
	 $cap_nhat->update();	
	
	//Quay về trang quản lý tài khoản (view)
	header("location: books.php");
}
	
  }


?>

<?php include('navbar_books.php'); ?>

    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">	
		

             <div class="alert alert-info"><i class="icon-pencil"></i>&nbsp;Edit Books</div>
			<p><a class="btn btn-info" href="books.php"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a></p>
	<div class="addstudent">
	<div class="details">Please Enter Details Below</div>	
	<form class="form-horizontal" method="POST" action="" enctype="multipart/form-data">
			
		<div class="control-group">
			<label class="control-label" for="inputEmail">Mã sách</label>
			<div class="controls">
			<input type="text" class="span4"  name="ma_sach" value="<?php echo $ma_sach; ?>" placeholder="" disabled required>
			
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" >Tên sách</label>
			<div class="controls">
			<input type="text" class="span4"  name="ten_sach" value="<?php echo $ten_sach; ?>" placeholder="nhập tên sách" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" >Tác giả</label>
			<div class="controls">
			<input type="text" class="span4"  name="tac_gia" value="<?php echo $tac_gia; ?>" placeholder="nhập tên sách" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" >Nhà xuất bản</label>
			<div class="controls">
			<input class="span4" type="text"  name="nha_xuat_ban" value="<?php echo $nha_xuat_ban; ?>" placeholder="nhập nhà xuất bản" required>
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" >Năm xuất bản</label>
			<div class="controls">
			<input type="text" class="span4"   name="nam_xuat_ban" value="<?php echo $nam_xuat_ban; ?>" placeholder="nhập năm xuất bản" required>
			</div>
		</div>	
		<div class="control-group">
			<label class="control-label" >Số Trang </label>
			<div class="controls">
			<input type="text" class="span4"  name="so_trang" value="<?php echo $so_trang; ?>" placeholder="nhập số trang" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" >Thể loại </label>
			<div class="controls">
			<input type="text" class="span4"  name="the_loai" value="<?php echo $the_loai; ?>" placeholder="nhập thể loại" required>
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" >Tình Trạng</label>
			<div class="controls">
			<input type="text"  class="span4" name="tinh_trang" value="<?php echo $tinh_trang; ?>" placeholder="nhập tình trạng" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" >Mô Tả</label>
			<div class="controls">
			<input type="text" class="span4"  name="mo_ta" value="<?php echo $mo_ta; ?>" placeholder="nhập mô tả" required>
			</div>
		</div>
		
		
		
		<div class="control-group">
			<label class="control-label" >ảnh</label>
			<div class="controls">
			<input type="file"  name="anh" class="span1" style="padding-right: 20px;" >
			<input  type="text"  name="anh" class="span3" value="<?php echo $anh; ?>" disabled>
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" >tài liệu</label>
			<div class="controls">
			<div class="row">
			<input type="file" style="padding-right: 20px; margin-left:20px" name="tai_lieu" class="span1" >
			<input type="text" class="span3" value="<?php echo $tai_lieu; ?>" disabled>
			</div>
			</div>
		</div>
		
		
		<div class="control-group">
			<div class="controls">
			<button name="submit_update" type="submit" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Update</button>
			</div>
		</div>
    </form>				
			</div>		
			</div>		
			</div>
		</div>
    </div>