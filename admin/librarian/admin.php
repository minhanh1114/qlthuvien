
<?php
include ('header.php');
$table= new admin();
$results =$table->getall_admin();
?>

<?php include('navbar_user.php'); ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span2">			     
										<ul class="nav nav-tabs nav-stacked">
											<li>
											<a href="add_admin.php"  ><i class="icon-plus icon-large"></i>Thêm quản trị</a>
											</li>
										</ul>
										
										 

										
			</div>
			<div class="span10">
			
			
					
                            <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">
                                <div class="alert alert-info">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong><i class="icon-user icon-large"></i>&nbsp;Users Table</strong>
                                </div>
                                <thead>
                                    <tr>
                                        <th>User</th>
                                        <th>Password</th>                                 
                                        <th>Name</th>                                 
                                        <th>Email</th>                                                   
                                    </tr>
                                </thead>
                                
                                <?php
 
                                foreach ($results as $row)
								{
								?>
								<tr>
									<td><?php echo $row['user']; ?></td>
									<td><?php echo $row['pass']; ?></td>
									<td><?php echo $row['name']; ?></td>
									<td><?php echo $row['email']; ?></td>
									
									<!--  -->

									<td class="action">
                                        <a rel="tooltip" href="delete_admin.php?user=<?php echo  $row['user'] ?>" class="btn btn-danger" ><i class="icon-trash icon-large" ></i></a>
									

										<a  rel="tooltip" href="edit_admin.php?user=<?php echo  $row['user'] ?>" class="btn btn-success" ><i class="icon-pencil icon-large"></i></a>
										
                                    </td>
                                    
								<?php
								} 
								?>
                            </table>
							


			
			</div>		
			</div>
		</div>
    </div>
<?php include('footer.php') ?>