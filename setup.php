<?
if(isset($_POST['setup'])){
$host=$_POST['host']; 
$username=$_POST['user']; 
$pass=$_POST['pass']; 
$name=$_POST['sql']; 
    
    
    
$files=fopen("config/db.php","w");
$msg='
<?php


$servername = "'.$host.'"; //الهوست
$username = "'.$username.'"; // اسم المستخدم
$passwor = "'.$pass.'"; // الرقم السري
$dbname = "'.$name.'"; // اسم قاعدة البيانات
$database = new PDO("mysql:host=$servername;dbname=$dbname", $username, $passwor);


if (!$database) {
	echo mysqli_connect_error("خطأ فى الإتصال بقاعدة البيانات") . mysqli_errno();
}


';
fwrite($files,$msg);
if (fclose($files)){
    header("location: creatsql.php");
}

}
?>


<!doctype html>

<html lang="ar" dir="rtl">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>التثبيت</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/dashboard-rtl/">
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/fontawesome-all.min.js"></script>
<script src="js/form-jquery.js" type="text/javascript"></script>	
<script src="js/main-js.js"></script>
    

    

<link href="css/bootstrap.rtl.min.css" rel="stylesheet">

    <style>
   body{
        background-color: #000000;
        color: #2090ff;
    }
 .bg-sky {
    background-color: #2090ff;
}
      th{
      color: #2090ff;
      }
     .table-striped>tbody>tr:nth-of-type(odd)>*{
         color: #2090ff;
     }
       .table-striped>tbody>tr:nth-of-type(even)>*{
         color: #2090ff;
     }
      
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }
     

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
      
      .navbar-brand {
    padding-top: 0.75rem;
    padding-bottom: 0.75rem;
    background-color: rgba(0, 0, 0, .25);
    box-shadow: inset 1px 0 0 rgb(0 0 0 / 25%);
}
      
    </style>

    
    <!-- Custom styles for this template -->
    <link href="css/dashboard.rtl.css" rel="stylesheet">
  </head>
  <body>
 
    

    
      <center>
<div class="card bg-dark">
         <form method="POST" class="text-white" enctype="multipart/form-data" >
             <dev class="col-sm-12">
<p>
    الهوست 
</p>

<div class="col-sm-9 col-xs-12 qs-form-item qs-form-control">
  <input style="width: 308px;height: 30px;" class="form-cntrol " tybe="text" name="host" required/>
</div>

 <dev class="col-sm-12">
<p>
    اسم المستخدم  
</p>

<div class="col-sm-9 col-xs-12 qs-form-item qs-form-control">
  <input style="width: 308px;height: 30px;"  class="form-cntrol " tybe="text" name="user" required/>
</div>
 
 <dev class="col-sm-12">
<p>
    كلمة المرور 
</p>

<div class="col-sm-9 col-xs-12 qs-form-item qs-form-control">
  <input  style="width: 308px;height: 30px;"  class="form-cntrol " tybe="text" name="pass" required/>
</div>
    

 <dev class="col-sm-12">
<p>
    اسم قاعدة البيانات 
</p>

<div class="col-sm-9 col-xs-12 qs-form-item qs-form-control">
  <input  style="width: 308px;height: 30px;"  class="form-cntrol " tybe="text" name="sql" required/>
</div>

<br>
   
        
        <br>
         <br>
        <input class="add" type="submit" value="اضافة " name="setup">
    </form>
    </div>




</center>


     
    
    </main>
  </div>
</div>


    <script src="js/bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>
