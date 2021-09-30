<?php
include 'header.php';
?>
<?php include 'search_top.php'?>
<?php
include 'nav.php';
?>
<?php
if(isset($_GET['id']))
{
    $id = $_GET['id'];
    $results = $book->get_ma_sach($id);
    $book->update_luotxem($id);
    
?>
<div class="row text-drank" >
    <div class="col-sm-3">
        <h2> <?php echo $results['ten_sach'] ?></h2>
        <h3> Tác giả: <?php echo $results['tac_gia'] ?></h3>
        <p> Tóm tắt: <?php echo $results['mo_ta'] ?></p>
        
    </div>
    <div class="col-sm-9">
    <embed src="./admin/librarian/upload/<?php echo $results['tai_lieu']; ?>" type="" style="width:900px; height:700px; margin-bottom:20px " class="embed-responsive embed-responsive-21by9">
    </div>
</div>
<?php } ?>

<?php
include 'footer.php';
?>