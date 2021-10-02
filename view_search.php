<?php
include 'header.php';
?>
<?php 
include 'search_top.php';
?>
<?php
include 'nav.php';
?>

 <!-- Post dữ liệu khi click submit  -->

<?php
if(isset($_POST['submit_search']))
{
    $index = $_POST['search_select'];
    $content = $_POST['search_content'];
    if($index==1)
    {
        //  tìm kiếm theo thể loại
        $code =   " like " . "'%" . $content . "%'";
        $results_search = $book->search_theloai($code);
    }
    else if($index==0)
    {
        //  tìm kiếm theo thể loại
        $code =   "'%" . $content . "%'";
        $results_search = $book->search_all($code);
    }
    else
    {
        // tìm kiếm theo tên sách, nhà xuất bản index (tên col ) content (nd tìm kiếm)
        $code = $index . " like " . "'%" . $content . "%'";
        
        $results_search = $book->search_sach($code);
    }

    if(empty($results_search))
    {
        echo ('<h2 class ="ml-5 mr-5 mt-5">'.'Từ khóa tìm kiếm: ' .$content . '<span class ="text-danger">'.' Không có kết quả' .'<span>'.'</h2>');
        
    }
    else
    {
        echo ('<h2 class ="ml-5 mr-5 mt-5">'.'Từ khóa tìm kiếm: ' .$content .'</h2>');

    }
}
        //  xử lí khi  submit catalog
    else if (isset($_POST['buttton_catalog']))
    {
        $content = $_POST['search_content'];
        $content = "'%" . $content . "%'";
        $results_search = $book->search_all($content);
    }

?>

 <!-- Nội dung hiển thị  -->
<div class="row">

    <!-- thanh nav trái  -->

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

        <!-- load dữ liệu thông tin về sách " thanh phải " -->
       <?php  
        foreach($results_search as $get_b) {
                ?>

                        <div class="row">
                        <div class="col-sm-4">
                            <a href="view_book.php?id=<?php echo $get_b['ma_sach'] ?>">
                            <img src="./admin/librarian/upload/<?php echo $get_b['anh'] ?>" alt="">
                            </a>
                        </div>
                        <div class="col-sm-8">
                            <h1><?php echo $get_b['ten_sach'] ?> </h1>
                            <p> <?php echo $get_b['mo_ta'] ?>  </p>
                            <div>
                                <span>Tác giả : <?php echo $get_b['tac_gia'] ?> | </span>
                                <span> Nhà xuất bản: <?php echo $get_b['nha_xuat_ban'] ?> </span>
                            </div>
                        </div>
                        </div>
                        <?php 
                            }
                        ?>


    </div>
  </div>

<?php include 'footer_menu.php' ?>