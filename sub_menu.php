<?php
include 'header.php';
?>
<?php 
include 'search_top.php';
?>
<?php
include 'nav.php';
?>
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
 

  <!--  phải   -->
    <div class="col-sm-9 text-dark">
        <?php
        if(isset($_GET['id']))
        {
            
           $result_id = $menu->getList_sub_menu_id($_GET['id']);
            
          echo '<h1 class ="text-left text-dark text-capitalize">' . 'Chủ đề: ' .$result_id['sub_menuname']. '</h1>';
            if($result_id['menu_id'] == 1)
            {
              // k đặt tên sub menu hoa , nên đặt: trẻ em , văn học, toán học  
              // xử lí trẻ em -> tre em ; gọi hàm xử lí chuỗi ;
                $test1 = $result_id['sub_menuname'];
                $test = $book->stripUnicode($result_id['sub_menuname']);
                $get_books = $book->getall_theloai($test, $test1);
                foreach($get_books as $get_b) {
                ?>

                <div class="row border border-bottom-1">
                  <div class="col-sm-4">
                  <a href="view_book.php?id=<?php echo $get_b['ma_sach'] ?>">
                      <img src="./admin/librarian/upload/<?php echo $get_b['anh'] ?>" alt="" style="width: 100%; height:300px; object-fit: cover ">
                    </a>
                  </div>
                  <div class="col-sm-8">
                  <h1 class="text-capitalize"><?php echo $get_b['ten_sach'] ?> </h1>
                    <h3> <i class="fa fa-user" aria-hidden="true"></i> <?php echo $get_b['tac_gia'] ?> </h3>
                    <p> <i class="fa fa-clone" aria-hidden="true"> </i>  <?php echo $get_b['mo_ta'] ?>  </p>
                    <p>  <i class="fa fa-calendar" aria-hidden="true"></i> <span> <?php echo $get_b['nam_xuat_ban'] ?></span> | <span> <i class="fa fa-users" aria-hidden="true"> </i> <?php echo $get_b['nha_xuat_ban'] ?></span> | <i class="fa fa-bars" aria-hidden="true"></i> <span><?php echo $get_b['the_loai'] ?></span> | <i class="fa fa-eye" aria-hidden="true"> </i> <?php echo $get_b['luot_xem'] ?>  </p>


                  </div>
                </div>
                <?php  
                }

            }
            // menu 2 
            else if($result_id['menu_id'] == 2)
            {
              $test1 = $result_id['sub_menuname'];
              $test = $book->stripUnicode($result_id['sub_menuname']);
              
                $get_books = $book->getall_tacgia($test, $test1);
                foreach($get_books as $get_b) {
                ?>

                <div class="row">
                  <div class="col-sm-4">
                  <a href="view_book.php?id=<?php echo $get_b['ma_sach'] ?>">
                      <img src="./admin/librarian/upload/<?php echo $get_b['anh'] ?>" alt="">
                    </a>
                  </div>
                  <div class="col-sm-8">
                  <h1 class="text-capitalize"><?php echo $get_b['ten_sach'] ?> </h1>
                    <h3> <i class="fa fa-user" aria-hidden="true"></i> <?php echo $get_b['tac_gia'] ?> </h3>
                    <p><i class="fa fa-clone" aria-hidden="true"></i> <?php echo $get_b['mo_ta'] ?>  </p>
                    <p>  <i class="fa fa-calendar" aria-hidden="true"></i> <span> <?php echo $get_b['nam_xuat_ban'] ?></span> | <span> <i class="fa fa-users" aria-hidden="true"> </i> <?php echo $get_b['nha_xuat_ban'] ?></span> | <i class="fa fa-bars" aria-hidden="true"></i> <span><?php echo $get_b['the_loai'] ?></span> | <i class="fa fa-eye" aria-hidden="true"> </i> <?php echo $get_b['luot_xem'] ?>  </p>

                  </div>
                </div>

                <?php  
                }
            }

            // menu nhà xuất bản 
            else if($result_id['menu_id'] == 3)
            {
              $test1 = $result_id['sub_menuname'];
              $test = $book->stripUnicode($result_id['sub_menuname']);
              echo $test1 . $test ;
                $get_books = $book->getall_nhaxuatban($test, $test1);
                foreach($get_books as $get_b) {
                ?>

                <div class="row">
                  <div class="col-sm-4">
                    <a href="view_book.php?id=<?php echo $get_b['ma_sach'] ?>">
                      <img src="./admin/librarian/upload/<?php echo $get_b['anh'] ?>" alt="">
                    </a>
                  </div>
                  <div class="col-sm-8">
                    <h1 class="text-capitalize"><?php echo $get_b['ten_sach'] ?> </h1>
                    <h3> <i class="fa fa-user" aria-hidden="true"></i> <?php echo $get_b['tac_gia'] ?> </h3>
                    <p><i class="fa fa-clone" aria-hidden="true"></i> <?php echo $get_b['mo_ta'] ?>  </p>
                    <p>  <i class="fa fa-calendar" aria-hidden="true"></i> <span> <?php echo $get_b['nam_xuat_ban'] ?></span> | <span> <i class="fa fa-users" aria-hidden="true"> </i> <?php echo $get_b['nha_xuat_ban'] ?></span> | <i class="fa fa-bars" aria-hidden="true"></i> <span><?php echo $get_b['the_loai'] ?></span> | <i class="fa fa-eye" aria-hidden="true"> </i> <?php echo $get_b['luot_xem'] ?>  </p>

                  </div>
                </div>

                <?php  
                }
            }
            
            
        }
        ?>

        
    </div>
</div>


<?php
include 'footer_menu.php';
?>