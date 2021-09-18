<?php
class connection_db{
    private $hostname="localhost";
	private $username="root";
	private $password="";
	private $dbname="quanlythuven";
	private $conn;
	private $result;
    

    function connection_db(){
        $this->connect();
    }
    function connect()
    {
        $this->conn = mysqli_connect($this->hostname, $this->username, $this->password,$this->dbname);
		if ( !$this->conn ) {
        
			return false;
		} else {	
			return $this->conn;
            
		}
	 
    }
    function query($sql)
    {
        $this->result = mysqli_query($this->conn,$sql);
        $arr =array();
        while ($row = mysqli_fetch_assoc($this->result)) 
		{
			$arr[] = $row;
		}
		return $arr;
    }
    function query1($sql)
    {
        $query = mysqli_query($this->conn,$sql);
        $row=mysqli_fetch_array($query);
        return $row;
    }
    function no_query($sql)
    {

        $this->result = mysqli_query($this->conn,$sql);
        
    }
}
?>