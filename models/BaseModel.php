<?php

abstract class BaseModel{
    public static $db; 
    
    protected $host="localhost";
	protected $username="root";
	protected $password="12345678";
    protected $db_name="revelsoft_horkhankha";

	function __construct(){
        static::$db = mysqli_connect($host, $username, $password, $db_name);
        if (mysqli_connect_errno())
        {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
    }

}

function convertImg($name){
	$data = iconv("utf-8", "tis-620",$name);
	return $data;
}
?>
