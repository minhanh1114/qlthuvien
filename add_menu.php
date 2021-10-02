<?php 
include 'header.php';
?>
<?php include 'search_top.php'?>
<?php
include 'nav.php';
?>

<!-- menu #1: -->

 <!-- thanh # navication -->
<div class="row">
  <div class="col-sm-3">
<div id="horizontalmenu">
<?php
$results = $menu->getall_menu_tbl();
foreach($results as $row)
{
  $menu_id = $row['id'];
?>
       
        <ul class="list_menu"><li > <button class="submit_<?php echo $menu_id ?>"><?php echo $row['menu_name']; ?> <i class="fa fa-angle-down" aria-hidden="true"></i></button>
        

    <ul class="sub_menu<?php echo $menu_id ?>">
  <?php
    $results_submenu = $menu->get_subname_with_menu($menu_id);
	  foreach($results_submenu as $sm)
	  {
      ?>
	  <li><a href="sub_menu.php?id=<?php echo $sm['id'] ?>" class="text-dark text-capitalize"><?php echo $sm['sub_menuname'];?> </a> </li>
	  <?php  } ?>
	  </ul>
	 
	  </li>

    <?php } ?>
      
  </ul>
  </div>
  </div>
  
  <div class="col-sm-9">
  <?php 
  $result_books = $book->getall();
  foreach($result_books as $book)
  {
  ?>
    <div class="row text-dark">
      <div class="col-sm-3">
        <a href=""><img src="./assets/images/<?php echo $book['anh'] ?>" alt=""></a>
      </div>
      <div class="col-sm-9 " >
        <h3><?php echo $book['ten_sach'] ?> </h3>
        <p><?php echo $book['tac_gia'] ?></p>
        <p><?php echo $book['mo_ta'] ?></p>
      </div>
    </div>
    <?php } ?>
    
    
      
    </div>

  </div>
 
</body>
<?php
include 'footer_menu.php'
?>
