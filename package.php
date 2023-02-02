<?php

include "config/parmation.php";
include_once('config/db.php');
include "config/inf.php";
	
if(isset($_POST['addd'])){

 
    
 $pn= $_POST['pp'] ;
          $pr =  $_POST['prr'] ;
         $pl= $_POST['ll'] ;
          $pd= $_POST['disc'] ;
         
  $ppp= $database->prepare("INSERT INTO `dis` ( packeg_n, packeg_p, packeg_d , packeg_l ) VALUES (:pp ,:prr, :disc , :ll );");
      
          $ppp->bindParam("pp",$pn); 
          $ppp->bindParam("prr",$pr);
           $ppp->bindParam("disc",$pd);
            $ppp->bindParam("ll",$pl);
      
          
 if($ppp->execute()){
  
  echo "done";
     
 }else{
  echo "faile".'<br>' ;
  
};
			


		
    
}

  ?>
<?
if(isset($_POST['add_b'])){
    $file='ed_admin.php';
   $f= fopen($file,"w");
    $msg1='
    <? 
    $cc="'.$_POST['cc'].'"?>
    
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
    اسم الباقة
</p>

<div class="col-sm-9 col-xs-12 qs-form-item qs-form-control">
  <input  style="width: 308px;height: 30px;" class="form-cntrol " tybe="text" name="pp" required/>
</div>

 <dev class="col-sm-12">
<p>
    السعر  
</p>

<div class="col-sm-9 col-xs-12 qs-form-item qs-form-control">
  <input style="width: 308px;height: 30px;"  class="form-cntrol " tybe="text" name="prr" required/>
</div>
 
 <dev class="col-sm-12">
<p>
    الرابط
</p>

<div class="col-sm-9 col-xs-12 qs-form-item qs-form-control">
  <input  style="width: 308px;height: 30px;"  class="form-cntrol " tybe="text" name="ll" required/>
</div>



<div class="form-group">
    <label for="exampleFormControlTextarea1">وصف الباقة</label>
    <textarea name="disc" class="form-control" id="exampleFormControlTextarea1" rows="10"></textarea>
  </div>
  

        <br>
         <br>
        <input class="add" type="submit" value="اضافة " name="addd">
    </form>
    </div>




</center>
<br>
<br>

 <center>
<div class="card bg-dark">
         <form method="POST" class="text-white" enctype="multipart/form-data" >
             <dev class="col-sm-12">
<p>
العملة 
</p>

<div class="col-sm-9 col-xs-12 qs-form-item qs-form-control">
  <input  style="width: 308px;height: 30px;" class="form-cntrol " tybe="text" name="cc" required/>
</div>

 
 

    


         <br>
        <input class="add" type="submit" value="اضافة " name="add_b">
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

