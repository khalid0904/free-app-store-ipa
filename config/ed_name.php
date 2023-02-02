	<? 
	include_once('db.php');
			    if(isset($_POST['edit_ifn'])){
			    $id= $_POST['id'];
			    $app_name= $_POST['app'];
			    $app_dis= $_POST['app_dis'];
	    $sql1="UPDATE `app` SET `app_name` = '$app_name', `app_dis` = '$app_dis' WHERE `app`.`id` = '$id'";
	    $stmt1= $database->prepare($sql1);
	    $stmt1->execute(); 
	    
	    
	    
	    if($stmt1){
	        header("location:../app.php");
	    }
	    
			    }
?>	