<?php
session_start();
if(!isset($_SESSION["user"]))
{
	header('location: index.php');
}
?>
<?php include('header_2.php'); ?>

<?php include('navbar_dashboard.php'); ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">		
                       
				<?php include('slider.php'); ?>
				
			</div>		
			</div>
		</div>
    </div>
	<?php
	include 'footer_2.php';	
	?>
