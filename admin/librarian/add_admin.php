<?php
session_start();
if(!isset($_SESSION["user"]))
{
	header('location: index.php');
}
?>
<?php include('header.php'); 
 include('navbar_user_add.php');
?>



    
	
	<div id="add_user"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-body">
			<div class="alert alert-info"><strong>Add User</strong></div>
	<form action="" class="form-horizontal" method="POST">
			<div class="control-group">
				<label class="control-label" for="inputEmail">User</label>
				<div class="controls">
				<input type="text"  name="user" placeholder="Username" required>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputPassword">Password</label>
				<div class="controls">
				<input type="password" name="pass"  placeholder="Password" required>
				</div>
			</div>
				<div class="control-group">
				<label class="control-label" for="inputEmail">Họ tên</label>
				<div class="controls">
				<input type="text"  name="name" placeholder="Username" required>
				</div>
			</div>
				<div class="control-group">
				<label class="control-label" for="inputEmail">Email</label>
				<div class="controls">
				<input type="text"  name="email" placeholder="Username" required>
				</div>
			</div>
			<div class="control-group">
				<div class="controls">
				<button name="submit_add_admin"  type="submit" class="btn btn-success "><i class="icon-save icon-large"></i>&nbsp;Save</button>
				</div>
			</div>
    </form>
		</div>
		<div class="modal-footer">
			<button class="btn"  data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
		</div>
    </div>


