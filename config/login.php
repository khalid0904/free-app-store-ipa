  <?php
  if(isset($_POST['login'])) {

    $login= $database->prepare("SELECT * FROM admin WHERE user =:user AND pass =:password ;");
    $login->bindParam("user",$_POST['user']);
     $login->bindParam("password",$_POST['password']);
     $login->execute();
     if($login->rowCount()===1){
        $user = $login->fetchObject();
        session_start();
$_SESSION['user'] = $user;
if($user->role ==="admin"){
    header("location:cp.php",true);
     }else{
          echo '<div dir="rtl" class="alert alert-danger" role="alert">
 يوجد خطاء
</div>';   

     }}else{
      echo '<div dir="rtl" class="alert alert-danger" role="alert">
 يوجد خطاء
</div>';   

         
     }
}

    ?>