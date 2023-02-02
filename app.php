<?php

include "config/parmation.php";
include'config/db.php';
include "config/inf.php";

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
     .bg-sky{
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
    </style>

    
    <!-- Custom styles for this template -->
    <link href="css/dashboard.rtl.css" rel="stylesheet">
  </head>
  <body>
      <?php
	$p="images/";
	$p1="plist/";
	
	if(isset($_GET['app_delete'])){
	 
				
		$id = $_GET['app_delete'];
		$sql =' select * from app where id = :id ;';
					$stmt= $database->prepare($sql);
					 $stmt->execute(['id'=>$id]);
					 $result= $stmt->fetch();
					
					$remove_pic= $result['app_img'];
					$remove_plist= $result['app_name'];
				
   if	(file_exists($p .$remove_pic)){
    unlink ($p .$remove_pic) ;
    };
    if	(file_exists($p1 .$remove_plist.'.plist')){
    unlink($p1.$remove_plist.'.plist');
    };
    
   
$database->prepare("DELETE FROM app WHERE id=?")->execute([$id]);
				
	}
					
		?>
     
      <?php

	if(isset($_GET['app_edit'])){
	 
				
		$id = $_GET['app_edit'];
					$sql =' select * from app where id = :id';
					$stmt= $database->prepare($sql);
					 $stmt->execute(['id'=>$id]);
					 $result= $stmt->fetch();


		
		 $m=$id;
		echo '
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Edit name</h5>
      
        <button type="button" class="close" onclick="goBack()" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  
			<form class="contact-form "  action="config/ed_name.php?id='.$m.'"  method="post" id="" enctype="multipart/form-data">
						
						
					  <div class="form-group row">
						<label for="colFormLabel" class="col-sm-3 col-form-label">اسم التطبيق</label>
						<div class="col-sm-9">
						  <input type="text" class="form-control" name="app" value="'.$result['app_name'].'" >
						  <input type="hidden" class="form-control" name="id" value="'.$result['id'].'" >
						</div>
					  </div>
					  
					  <div class="form-group row">
						<label for="colFormLabel" class="col-sm-3 col-form-label"> وصف التطبيق</label>
						<div class="col-sm-9">
						  <input type="text" class="form-control" name="app_dis" value="'.$result['app_dis'].'" >
						</div>
					  
		   <div id="product_ar_edit_result" class="text-center col-md-12" style="margin:10px 0;"></div>
        <button type="button" onclick="goBack()" class="btn btn-danger" data-dismiss="modal">Back</button>
		 
        <button type="submit" name="edit_ifn" class="btn btn-success">Edit</button>
        
        
		  </form>

      </div>
    </div>
  </div>
</div>				
		';
		
	}

?>
  <?php

	if(isset($_GET['update'])){
	 
				
		$id = $_GET['update'];
					$sql =' select * from app where id = :id';
					$stmt= $database->prepare($sql);
					 $stmt->execute(['id'=>$id]);
					 $result= $stmt->fetch();


		
		 $m=$id;
		echo '
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">update</h5>
      
        <button type="button" class="close" onclick="goBack()" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  
			<form class="contact-form "    method="post" id="" enctype="multipart/form-data">
						
						
					  <div class="form-group row">
						<label for="colFormLabel" class="col-sm-3 col-form-label"> رابط التطبيق</label>
						<div class="col-sm-9">
						  <input type="text" class="form-control" name="app" value="'.$result['url'].'" >
						  <input type="hidden" class="form-control" name="id" value="'.$result['id'].'" >
						</div>
					  </div>
					  
				
					  
		   <div id="product_ar_edit_result" class="text-center col-md-12" style="margin:10px 0;"></div>
        <button type="button" onclick="goBack()" class="btn btn-danger" data-dismiss="modal">Back</button>
		 
        <button type="submit" name="edit_ifn" class="btn btn-success">Edit</button>
        
        
		  </form>

      </div>
    </div>
  </div>
</div>				
		';
		
	}
	
if(isset($_POST ['edit_ifn'])){
    include "up_plist.php";
   $id= $_POST['id'];
   $url= $_POST['app'];
			  
			     $sql1="UPDATE `app` SET `url` = '$url' WHERE `app`.`id` = '$id'";
	    $stmt1= $database->prepare($sql1);
	    $stmt1->execute(); 
}
?>
<?
	
	if(isset($_GET['img_edit'])){
	    $id = $_GET['img_edit'];
	 	$sql =' select * from app where id = :id';
					$stmt= $database->prepare($sql);
					 $stmt->execute(['id'=>$id]);
					 $result= $stmt->fetch();
					 $pic='images/'.$result['app_img'];
					
				
		
		include "config/ed_img.php";
		if (empty($error)) {
   unlink($pic);
move_uploaded_file($app_tmp, $p1 .$app_name) ;
	$sql =" UPDATE app SET app_img='$app_name'  WHERE app . id = '$id'";
					$stmt= $database->prepare($sql);
				$stmt->execute();
			

header("Location: app.php");

}



		
		 $m=$id;
		echo '
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">img update</h5>
      
        <button type="button" class="close" onclick="goBack()" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  
	
         <form method="post" enctype="multipart/form-data" >
        <input type="file" name="files" multiple>
        
        <input type="submit" value="Upload File" name="submit">
        </form>

      </div>
    </div>
  </div>
</div>				
		';
		
		}else{
	    if(is_array($error) || is_object($error) ){
    foreach ($error as $error ) {
        echo $error;
    };
}
}
?>

    
<header class="navbar navbar-dark sticky-top bg-sky flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="cp.php"><? echo $store ?></a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="عرض/إخفاء لوحة التنقل">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="بحث" aria-label="بحث">
  <div class="navbar-nav">
    
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="#">تسجيل الخروج</a>
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

      

      <h2>التطبيقات</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
		  <th scope="col">اسم التطبيق</th>
		    <th scope="col">الصورة</th>
		  <th scope="col">تعديل</th>
		   <th scope="col">تعديل الصورة</th>
		   <th scope="col"> تحديث التطبيق</th>
		   <th scope="col">حذف</th>
            </tr>
          </thead>
          <tbody>
          
               <?php
               $p="images/";
	

		$num = 1;
	$sql='SELECT * FROM app';
 $stmt= $database->query($sql);
while ($result=$stmt->fetch()){
    $app_name=$result['app_name'];
    $app_img=$result['app_img'];
   
	
			echo '
					<tr>
					  <th scope="row">'.$num++.'</th>
					
					  <td>'.$app_name.'</td>
					  
					  <td><img width="50" height="50" src="'.$p.$app_img.'"></img></td>
					  <td><a href="?app_edit='.$result['id'].'" class="btn btn-warning">تعديل</a></td>
					  <td><a href="?img_edit='.$result['id'].'" class="btn btn-danger"> الصورة</a></td>
					  <td><a href="?update='.$result['id'].'" class="btn btn-danger"> تحديث</a></td>
					  <td><a href="?app_delete='.$result['id'].'" class="btn btn-danger">حذف</a></td>
					   
					</tr>
			';
		}
		
	?>
           
          
          </tbody>
        </table>
      </div>
      <?
   
    
      ?>
    </main>
  </div>
</div>
<script type="text/javascript">
    $(window).on('load',function(){
        $('#edit').modal('show');
    });
</script>
	
	
<script>
function goBack() {
    window.history.back();
}
</script>


<script>
$('#edit').modal({
backdrop: 'static',
keyboard: false
})
</script>

    <script src="js/bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>
