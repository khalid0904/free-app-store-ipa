<?

include_once('config/db.php');
include "config/inf.php";
include "config/login.php";


?>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 
   
   
    <title><?echo $store ?></title>
 <style>
 body {
       background-color: #202020 ;
}
.text-uppercase{
    color: #ffffff;
}
.navbar{justify-content: center;}
.card{ 
}
.im{
   
    border-radius: 20%;
}
.card-group {flex-flow: column;}

}
.card-body {background-color:#ffffff;}
.bg-light {
    background-color: #ffffff;
}
     
 }
</style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-black ">
    
  <a class="navbar-brand" href="index.php">
       <span><img src="images/<?echo $logo ?>" alt="back"  width="45" alt="" class="d-inline align-right im "></span>
       <div class=" d-inline text-uppercase  font-weight-bold"><?echo $store ?></div>

       
  </a>
  </nav>
  
    <br>
    <br>
    <br>
     <center>
   
        
        <div class="card bg-dark">
<form method="POST" class="text-white">

<dev class="col-sm-12">
<p>
    اسم المستخدم
</p>

<div class="col-sm-9 col-xs-12 qs-form-item qs-form-control">
  <input class="form-cntrol " tybe="text" name="user" required/>
</div>

 

    
<dev class="col-sm-12 ">
<p>
كلمة المرور
</p>

<div class="col-sm-12">
  <input class="form-cntrol " tybe="text" name="password" required />
</div>
<br>
   <div class="col-3">
   <button class="btn btn-blue p-auto m-auto" tybe="submet" name="login" >
تسجيل
   </button>
   </div> 
</form>
</div>




</center>


      
</body>

