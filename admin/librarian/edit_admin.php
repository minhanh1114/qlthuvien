	<?php include 'header.php';
	 $update_admin = new admin();
		$user="";
		$pass="";
		$name="";
		$email="";
			if(isset($_GET['user']))
			{
				$user=$_GET['user'];
				$update_admin->user = $user;
				$results = $update_admin->getall_admin_user();
				
				$pass = $results['pass'];
				$name = $results['name'];
				$email = $results['email'];
				echo($pass . $name . $user);
			}
	
	  if(isset($_POST['submit_update_admin']))
	  {

		$update_admin->pass = $_POST['pass'];
		$update_admin->name = $_POST['name'];
		$update_admin->email = $_POST['email'];

		$update_admin->update_admin();

		header('location: admin.php');
	  }

	
	
	
	?>
	<?php include 'navbar_user_edit.php';?> 
	
	<div id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-body">
			<div class="alert alert-info"><strong>Edit User</strong></div>
	<form class="form-horizontal" method="post">
			<div class="control-group">
				<label class="control-label" >Username</label>
				<div class="controls">
				
				<input type="text"  name="user" value="<?php echo $user; ?>" required>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" >Password</label>
				<div class="controls">
				<input type="text" name="pass"  value="<?php echo $pass; ?>" required>
				</div>
			</div>
				<div class="control-group">
				<label class="control-label">Name</label>
				<div class="controls">
	
				<input type="text"  name="name" value="<?php echo $name; ?>" required>
				</div>
			</div>
				<div class="control-group">
				<label class="control-label" >Email</label>
				<div class="controls">

				<input type="text"  name="email" value="<?php echo $email; ?>" required>
				</div>
			</div>
			<div class="control-group">
				<div class="controls">
				<button name="submit_update_admin"  class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Update</button>
				</div>
			</div>
    </form>
		</div>
		<div class="modal-footer">
			<button class="btn" data-dismiss="modal" aria-hidden="true"><a href="index.php"><i class="icon-remove icon-large"></i>Close</a></button>
		</div>
    </div>
	
	