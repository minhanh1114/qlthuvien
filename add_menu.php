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
  $page = 1;
  if(isset($_GET['page']))
  {
    $page = $_GET['page'];
    if($page == 2 )
    $result_books = $book->getall_view_2();
    else if($page == 3 )
    $result_books = $book->getall_view_3();
    
  }
  else
    $result_books = $book->getall_view();
  foreach($result_books as $book)
  {
  ?>
    <div class="row text-dark border-bottom">
      <div class="col-sm-3">
        <a href=""><img src="./admin/librarian/upload/<?php echo $book['anh'] ?>" alt=""></a>
     
      </div>
      <div class="col-sm-9 " >
        <h3 class="text-capitalize"><?php echo $book['ten_sach'] ?> </h3>
        <p> <i class="fa fa-user" aria-hidden="true"></i>Tác giả: <?php echo $book['tac_gia'] ?></p>
        <p><i class="fa fa-clone" aria-hidden="true"></i> <?php echo $book['mo_ta'] ?></p>
        <p>  <i class="fa fa-calendar" aria-hidden="true"></i> <span> <?php echo $book['nam_xuat_ban'] ?></span> | <span> <i class="fa fa-users" aria-hidden="true"></i> <?php echo $book['nha_xuat_ban'] ?></span> | <span> <i class="fa fa-bars" aria-hidden="true"></i>  <?php echo $book['the_loai'] ?></span> | <i class="fa fa-eye" aria-hidden="true"> </i> <?php echo $book['luot_xem'] ?>  </p>
      </div>
    </div>
    <?php } ?>
    <div class="row">
    <div class="col-sm-10"></div>
    <div class="col-sm-2 h5"> <a href="add_menu.php?page=<?php if($page == 2)
     echo "3"; 
     else 
     echo "2"; ?>">Xem tiếp</a></div></div>
    
    
      
    </div>

  </div>
 
</body>
<?php
include 'footer_menu.php'
?>
