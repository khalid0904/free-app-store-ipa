<?php

include "config/parmation.php";
include_once('config/db.php');
include "config/inf.php";
	
if(isset($_POST['add'])){
   
 
        $p1="images/";
	$pic=$p1.$logo ;
unlink($pic);
				
$error= array();


//get info from fprm
$app_name= $_FILES['files']['name'];
$app_tybe= $_FILES['files']['type'];
$app_tmp= $_FILES['files']['tmp_name'];


// allowed .png
$ext= array ('png', 'jpg','jpeg') ;

//get file ext
$app_ext= strtolower(end(explode('.', $app_name )));

//check file size
if ($app_size > 50000000 ) {
    // input on array
    $error[]='<div> size file is larg</div>';
}
if ( !in_array($app_ext,$ext)  ) {
    // input on array
    $error[]='<div> not imge file</div>';
 
}
        if (empty($error)) {
  
move_uploaded_file($app_tmp, $p1 .$app_name) ;

 $p1= "imgaes/" ;
 $id= "1";

			    $store_name= $_POST['name'];
			    $domain1= $_POST['domain'];
			    $logo1=$app_name;
			    $tele1= $_POST['tele'];
			    $disc= $_POST['disc'];
			    $tw= $_POST['tw'];
			    $info= $_POST['info'];
			    $pay= $_POST['pay'];
			    $ts= $_POST['ts'];
	    $sql1="UPDATE `page` SET `name` = '$store_name', `domain` = '$domain1',img ='$logo1' ,tele='$tele1' ,disc='$disc',tw='$tw',info='$info',pay='$pay',ts='$ts' ; WHERE `page`.`id` ='1'";
	    $stmt1= $database->prepare($sql1);
	    $stmt1->execute(); 
	    
	    
	    
	    if($stmt1){
	       
	    }
	    



		
    
}
}
  ?>
<?
if(isset($_POST['add_b'])){
    $file='ed_admin.php';
   $f= fopen($file,"w");
    $msg1='
    <? $bt="'.$_POST['name1'].'";
    $lbt="'.$_POST['link1'].'"?>
    
    ';
    fwrite($f , $msg1);
    fclose($f);
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
    <title>لوحة تحكم</title>

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
 
    
<header class="navbar navbar-dark sticky-top bg-sky flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="cp.php"><? echo $store ?></a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="عرض/إخفاء لوحة التنقل">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="بحث" aria-label="بحث">
  <div class="navbar-nav">
    
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="?logout">تسجيل الخروج</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3 sidebar-sticky">
       <? include 'config/nav.php' ;  ?>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">لوحة التحكم</h1>


      </div>
      <center>
<div class="card bg-dark">
         <form method="POST" class="text-white" enctype="multipart/form-data" >
             <dev class="col-sm-12">
<p>
    اسم المتجر
</p>

<div class="col-sm-9 col-xs-12 qs-form-item qs-form-control">
  <input value="<?echo $store?>" style="width: 308px;height: 30px;" class="form-cntrol " tybe="text" name="name" required/>
</div>

 <dev class="col-sm-12">
<p>
    الدومين  
</p>

<div class="col-sm-9 col-xs-12 qs-form-item qs-form-control">
  <input value="<?echo $domain?>" style="width: 308px;height: 30px;"  class="form-cntrol " tybe="text" name="domain" required/>
</div>
 
 <dev class="col-sm-12">
<p>
    حساب التلجرام
</p>

<div class="col-sm-9 col-xs-12 qs-form-item qs-form-control">
  <input value="<?echo $tele?>" style="width: 308px;height: 30px;"  class="form-cntrol " tybe="text" name="tele" required/>
</div>

<dev class="col-sm-12">
<p>
    حساب تويتر
</p>

<div class="col-sm-9 col-xs-12 qs-form-item qs-form-control">
  <input value="<?echo $tw?>" style="width: 308px;height: 30px;"  class="form-cntrol " tybe="text" name="tw" required/>
</div>

<div class="form-group">
    <label for="exampleFormControlTextarea1">وصف المتجر</label>
    <textarea name="disc" class="form-control" id="exampleFormControlTextarea1" rows="10"><?echo $disc?></textarea>
  </div>
    
    <div class="form-group">
    <label for="exampleFormControlTextarea1">معلومات عنك</label>
    <textarea name="info" class="form-control" id="exampleFormControlTextarea1" rows="10"><?echo $info?></textarea>
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlTextarea1">معلومات الدفع</label>
    <textarea name="pay" class="form-control" id="exampleFormControlTextarea1" rows="10"><?echo $pay?></textarea>
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlTextarea1">معلومات الدعم الفني</label>
    <textarea name="ts" class="form-control" id="exampleFormControlTextarea1" rows="10"><?echo $ts?></textarea>
  </div>

<br>
   <p>صورة المتجر</p>
        <input type="file" name="files" multiple>
        <br>
         <br>
        <input class="add" type="submit" value="اضافة " name="add">
    </form>
    </div>




</center>
<br>
<br>


     
    
    </main>
  </div>
</div>


    <script src="js/bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>

