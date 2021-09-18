
<?php
include 'admin.class.php';
$delete = new admin();

				if(isset($_GET['user']))
					{	
						$delete->user = $_GET['user'];
						$delete->delete_admin();
						header('location: admin.php');
					
					}
							
				

?>
