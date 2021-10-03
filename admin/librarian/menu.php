<?php
include ('header.php');
$load_menu = new menu();
$results = $load_menu->getall_menu_tbl();
?>
<?php 
if(isset($_POST['submit_menu_tbl']))
{
	$load_menu->menu_name=$_POST['menu_name'];
	$load_menu->insert_menu_tbl();
   header('menu.php');
}
 if(isset($_POST['submit_sub_menu']))
 {
  //  lấy giá trị value 1 2 3 từ section "main menu"
	 $load_menu->menu_id =$_POST['main_menu'];
     $load_menu->sub_menuname =$_POST['sub_menu1_name'];
    $load_menu->insert_sub_menu();
    header('menu.php');
 }
 ?>
<?php include('navbar_menu.php'); ?>

<div class="row">


      
<div id="horizontalmenu">
    <?php
    $results = $load_menu->getall_menu_tbl();
    foreach($results as $row)
    {
      $menu_id = $row['id'];
    ?>
          
       <ul class="list_menu"><li > <button class="submit_<?php echo $menu_id ?>"><?php echo $row['menu_name']; ?> <i class="fa fa-angle-down" aria-hidden="true"></i></button>
            
        <ul class="sub_menu<?php echo $menu_id ?>">
      <?php
        $results_submenu = $load_menu->get_subname_with_menu($menu_id);
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
    



<div class="col-sm-6">
<form action="" method="post" name="form">

<table width="30%" border="2" cellspacing="0" cellpadding="10" style="margin-top:100px; margin-left: 560px">
  <tr>
    <th colspan="2" scope="col">ADD Menu</th>
    </tr>
  <tr>
    <th scope="row">Menu  name:</th>
    <td><label for="menu_name"></label>
      <input type="text" name="menu_name" id="menu_name" /></td>
  </tr>
  <tr>
    <th colspan="2" scope="row"><input type="submit" name="submit_menu_tbl" id="submit" value="Submit" /></th>
    </tr>
</table>
</form> 
  <!-- form #2 -->
<form action="" method="post" name="form1">
<table width="30%" border="2" cellspacing="0" align="center" cellpadding="10">
  <tr>
    <th colspan="2" scope="col">ADD Sub Menu</th>
    </tr>
  <tr>
    <th scope="row">Main Menu:</th>
    <td><label for="main_menu"></label>
      <select name="main_menu" id="main_menu" >
      <option value="">--select menu--</option>
     
      <?php

	 
      foreach($results as $row) 
	  {
	  ?>
      <option value="<?php echo $row['id'];?>"> <?php echo $row['menu_name'];?></option>
      <?php
	  }
	  ?>
      
      </select></td>
  </tr>
  <tr>
    <th scope="row">Sub Menu name 1</th>
    <td id=""><label for="sub_menu1_name"></label>
      <input type="text" name="sub_menu1_name"  />
    </td>
  </tr>
  <tr>
    <th colspan="2" scope="row"><input type="submit" name="submit_sub_menu" id="submit2" value="Submit" /></th>
    </tr>
</table>
</form>
</div>


</div>

<?php include('footer.php') ?>