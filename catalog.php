<?php
include 'header.php';
?>
<?php 
include 'search_top.php';
?>
<?php
include 'nav.php';
?>
<div class="catalog">

<div class="catalog_content">
    <h1>tìm kiếm</h1>
    <form action="view_search.php" method="POST">
        <input type="text" class="form-control form-control" name="search_content">
        <button class="btn btn-dark" name="buttton_catalog"> <i class="fa fa-search" aria-hidden="true"></i></button>
    </form>
</div>

</div>



<?php
include 'footer.php';
?>
