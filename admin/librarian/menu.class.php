<?php
class menu extends connection_db 
{
   public $menu_name;
   public $menu_id;
   public $sub_menuname;
 // Lấy danh sách Menu trả về một mảng
 function getall_menu_tbl()
 {
    $sql = "select * from menu_tbl";
    return $this->query($sql);
 }
 function getList_sub_menu()
 {
    $sql = "select * from menu_tbl";
    return $this->query($sql);
 }
 function getList_sub_menu_id($id)
 {
    $sql = "select * from sub_menu where id = $id ";
    return $this->query1($sql);
 }
 function insert_menu_tbl()
 {
    $sql ="insert into menu_tbl(menu_name) values('$this->menu_name')";
     $this->no_query($sql);
 }
 function insert_sub_menu()
 {
    // phải gọi đến menu_id , sub_name 
    $sql ="select * from menu_tbl where id='$this->menu_id'";
   $result = $this->query1($sql);
   $this->menu_name=$result['menu_name'];
   
  $sql ="insert into sub_menu(menu_id,menu_name,sub_menuname) values('$this->menu_id','$this->menu_name','$this->sub_menuname')" ;
  $this->no_query($sql);
}
function get_subname_with_menu($menu1)
{
   $sql = "select * from sub_menu where menu_id='$menu1'";
  return $this->query($sql);
}

}
?>