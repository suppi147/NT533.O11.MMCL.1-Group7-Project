<?php
class CommentController{
    protected $connect;
    public $indexLocation="http://localhost/Noteziee/CommentUI/index/index.php";

    function __construct(){
        $connect=null;
    }

    function Connect2DB(){
        $hostname="noteziee-db-service";
        $dbname="CommentDB";
        $username="noteziee";
        $password="uitcisco";
        
        $maxAttempt = 100;
        $attempt = 1;
        while($attempt <= $maxAttempt){
            try{
                $this->connect=new PDO("mysql:host=$hostname;dbname=$dbname",$username,$password) or die("Can't connect to Database");
                break;
            }
            catch(PDOException $e){
                $attempt++;
            }
        }    
    }
    function Disconnect2DB(){
	$this->connect=null;
    }
    


}
?>
