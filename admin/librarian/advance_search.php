<?php include('header.php'); 
$tim_kiem = new book();
?>

<?php include('navbar_books.php'); ?>
<?php
$ten_sach = $_POST['tensach'];

$tac_gia = $_POST['tacgia'];
?>

    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">	
			   <div class="alert alert-info">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong><i class="icon-user icon-large"></i>&nbsp;Books Table</strong>
                                </div>
						<!--  -->
								    <ul class="nav nav-pills">
										<li   class="active"><a href="books.php">Tất cả</a></li>
										<li><a href="new_books.php">Sách mới</a></li>
										<li><a href="old_books.php">Sách cũ</a></li>
										<li><a href="damage.php">sách hot</a></li>
									</ul>
						<!--  -->
						<center class="title">
						<h1>Danh Sách</h1>
						</center>
                            <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">
								<div class="pull-right">
								<a href="" onclick="window.print()" class="btn btn-info"><i class="icon-print icon-large"></i> IN </a>
								</div>
								<p><a href="add_books.php" class="btn btn-success"><i class="icon-plus"></i>&nbsp;Thêm sách</a></p>
							
                                <thead>
                                    <tr>
									    <th>Mã sách</th>                                 
                                        <th>Tên sách</th>                                 
                                        <th>Tác giả</th>
										<th>Nhà xuất bản</th>
										<th >Năm xuất bản</th>
										<th>Số trang</th>
										<th>Tình trạng</th>
										<th>Mô tả</th>
										<th>ảnh</th>
										<th>Tài liệu</th>
										<th>Chỉnh sửa</th>
											
                                    </tr>
                                </thead>
                                <tbody>
								 
                                  <?php 
                                  $truy_van = "";
                                  if(!empty($ten_sach) && !empty($tac_gia)){
                                  	$truy_van = " ten_sach LIKE  '%$ten_sach%' or tac_gia LIKE '%$tac_gia%' ";
                                  }elseif(!empty($ten_sach)){
                                  	$truy_van = " ten_sach LIKE  '%$ten_sach%' ";
                                  }elseif(!empty($tac_gia)){
                                  	$truy_van = " tac_gia LIKE  '%$tac_gia%' ";
                                  }
								$results=$tim_kiem->find_advance($truy_van);
								foreach ($results as $row)
								{
									?>
									<tr >
                                    <td><?php echo $row['ma_sach']; ?></td>
									<td><?php echo $row['ten_sach']; ?></td>
									<td><?php echo $row['tac_gia']; ?></td>
									<td><?php echo $row['nha_xuat_ban']; ?></td>
									<td><?php echo $row['nam_xuat_ban']; ?></td>
									<td><?php echo $row['so_trang']; ?></td>
									<td><?php echo $row['tinh_trang']; ?></td>
									<td><?php echo $row['mo_ta']; ?></td>
									<td > <img src="../librarian/upload/<?php echo $row['anh']; ?>" alt="anh" style=" width:50px "></td>
									<td><?php echo $row['tai_lieu']; ?></td>

                                    <td class="action">
                                        <a rel="tooltip"  title="Delete"  href="" data-toggle="modal"    class="btn btn-danger"><i class="icon-trash icon-large"></i></a>
                                        
										<a  rel="tooltip"  title="Edit" href="" class="btn btn-success"><i class="icon-pencil icon-large"></i></a>
										
                                    </td>
									
                                    </tr>
									<?php  }  ?>
                           
                                </tbody>
                            </table>
							
			
			</div>		
			</div>
		</div>
    </div>
<?php include('footer.php') ?>