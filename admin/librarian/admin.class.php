<?php
include_once'dbcon.class.php';
class admin extends connection_db
{
    public $user;
    public $pass;
    public $name;
    public $email;

    function getall_admin()
    {
        $sql = "select * from admin";
        return $this->query($sql);
    }
    function getall_admin_user()
    {
        $sql = "SELECT * FROM admin WHERE user = '$this->user' ";
        return $this->query1($sql);
    }
    
	function delete_admin($user){
		$sql="DELETE FROM `admin` WHERE user='$this->user' ";
		return $this->no_query($sql);
	}
    function inser_admin()
    {
        $sql = "INSERT INTO `admin`(`user`, `pass`, `name`, `email`) VALUES ('$this->user','$this->pass','$this->name','$this->email')";
        return $this->no_query($sql);
    }
    function update_admin()
    {
     $sql ="UPDATE `admin` SET `pass`='$this->pass',`name`='$this->name',`email`='$this->email' WHERE `user`='$this->user' ";
     return $this->no_query($sql);
    }
	

}

?>