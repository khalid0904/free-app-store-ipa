<?
session_start();
if($_SESSION['user']->role !== "admin"){
 session_destroy();
   header("location:index.php");
    exit();
}
if(isset($_GET['logout'])){
    session_destroy();
    header("Location: index.php ");
}
?>