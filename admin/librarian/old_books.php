<?php include('header.php');
$table = new book();
$results=$table->getall_old();

?>
<?php include('navbar_books.php'); ?>

    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">	
			   <div class="alert alert-info">
                                    <button type="button" class="close" data-dismiss="alert"></button>
                                    <strong><i class="icon-user icon-large"></i>Bảng sách</strong>
                                </div>
						<!--  -->
								    <ul class="nav nav-pills">
										<li ><a href="books.php">All</a></li>
										<li><a href="new_books.php">Sách Mới</a></li>
										<li class="active"><a href="old_books.php">sách cũ</a></li>	
										<li><a href="damage.php">sách hot</a></li>	
									</ul>
						<!--  -->
						
                            <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">
								<div class="pull-right">
								<a href="" onclick="window.print()" class="btn btn-info"><i class="icon-print icon-large"></i> In ra</a>
								</div>
								<p><a href="add_books.php" class="btn btn-success"><i class="icon-plus"></i>Thêm sách</a></p>
							
                                <thead>
                                    <tr>
									    <th>Mã Sách</th>                                 
                                        <th>Tên Sách</th>                                 
                                        <th>Nhà xuất bản</th>
										<th>Năm xuất bản</th>	
										<th>Số trang</th>
										<th>Thể loại</th>
										<th>tình trạng</th>
										<th>Mô tả</th>
										<th>ảnh</th>
										<th>Tài liệu</th>
										<th>Chỉnh sửa</th>
			
                                    </tr>
                                </thead>
								<?php
								foreach ($results as $row)
								{
								?>
								<tr>
									<td><?php echo $row['ma_sach']; ?></td>
									<td><?php echo $row['ten_sach']; ?></td>
									<td><?php echo $row['nha_xuat_ban']; ?></td>
									<td><?php echo $row['nam_xuat_ban']; ?></td>
									<td><?php echo $row['so_trang']; ?></td>
									<td><?php echo $row['the_loai']; ?></td>
									<td><?php echo $row['tinh_trang']; ?></td>
									<td><?php echo $row['mo_ta']; ?></td>
									<td > <img src="../librarian/upload/<?php echo $row['anh']; ?>" alt="anh" style=" width:50px "></td>
									<td><?php echo $row['tai_lieu']; ?></td>

									<!--  -->

									<td class="action">
                                        <a rel="tooltip" href="delete_books.php?ma_sach=<?php echo $row['ma_sach']; ?>" class="btn btn-danger"><i class="icon-trash icon-large"></i></a>
									

										<a  rel="tooltip" href="edit_book.php?ma_sach=<?php echo $row['ma_sach'] ?>" class="btn btn-success" ><i class="icon-pencil icon-large"></i></a>
										
                                    </td>


								</tr>


								<?php
								} 
								?>
                                <tbody>
								 
                                

							
							
									

								  
                           
                                </tbody>
                            </table>
							
			
			</div>		
			</div>
		</div>
    </div>
<?php include('footer.php') ?>