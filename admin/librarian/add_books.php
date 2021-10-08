<?php
session_start();
if(!isset($_SESSION["user"]))
{
	header('location: index.php');
}
?>
<?php include('header.php'); ?>
<?php include('navbar_books.php'); ?>


    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">	
		
             <div class="alert alert-info">Thêm sách </div>
			<p><a href="books.php" class="btn btn-info"><i class="icon-arrow-left icon-large"></i> Quay lại</a></p>
	<div class="addstudent">
	<div class="details">NHẬP ĐẦY ĐỦ THÔNG TIN</div>		
	<form class="form-horizontal" method="POST" action="" enctype="multipart/form-data">
			
	
			
		<div class="control-group">
			<label class="control-label" >mã sách</label>
			<div class="controls">
			<input type="text" class="span4" id="inputEmail" name="ma_sach" placeholder="nhập mã sách" required>
			</div>
		</div>
		
		
		<div class="control-group">
			<label class="control-label">tên sách</label>
			<div class="controls">
			<input type="text"  class="span4"  name="ten_sach" placeholder="nhập tên sách" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" >Tác giả</label>
			<div class="controls">
			<input type="text"  class="span4"  name="tac_gia" placeholder="nhập tên tác giả" required>
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" > nhà xuất bản</label>
			<div class="controls">
			<input type="text" class="span4" name="nha_xuat_ban" placeholder="nhập nhà xuất bản"   required>
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for="inputPassword">năm xuất bản</label>
			<div class="controls">
			<input type="text"  class="span4"  name="nam_xuat_ban" placeholder="nhập năm xuất bản" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" >số trang</label>
			<div class="controls">
			<input type="text"  class="span4"  name="so_trang" placeholder="nhập số trang"  required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" >Thể loại</label>
			<div class="controls">
			<input type="text"  class="span4"  name="the_loai" placeholder="nhập thể loại"  required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" >tình trạng</label>
			<div class="controls">
			<input type="text"  class="span4"  name="tinh_trang" placeholder="nhập tình trạng"  required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" >mô tả</label>
			<div class="controls">
			<input type="text" class="span4"  name="mo_ta" placeholder="nhập mô tả sách" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" >ảnh</label>
			<div class="controls">
			<input type="file"  name="anh" class="span4"  required>
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" >tài liệu</label>
			<div class="controls">
			<input type="file"  name="tai_lieu" class="span4" required>
			</div>
		</div>
		
		
		
		<div class="control-group">
			<div class="controls">
			<button name="submit" type="submit" class="btn btn-success"><i class="icon-save icon-large"></i>Save</button>
			</div>
		</div>
    </form>					
			</div>		
			</div>		
			</div>
		</div>
    </div>
