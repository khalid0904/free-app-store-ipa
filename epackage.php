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
	if(isset($_GET['dp'])){
		$id = $_GET['dp'];
$database->prepare("DELETE FROM dis WHERE id=?")->execute([$id]);
					}
		?>
     
      <?php

	if(isset($_GET['ep'])){
	 
				
		$id = $_GET['ep'];
					$sql =' select * from dis where id = :id';
					$stmt= $database->prepare($sql);
					 $stmt->execute(['id'=>$id]);
					 $result= $stmt->fetch();


		
		 $m=$id;
		echo '
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Edit package</h5>
      
        <button type="button" class="close" onclick="goBack()" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  
			<form class="contact-form "   method="post" id="" enctype="multipart/form-data">
						
						
					  <div class="form-group row">
						<label for="colFormLabel" class="col-sm-3 col-form-label">اسم الباقة</label>
						<div class="col-sm-9">
						  <input type="text" class="form-control" name="pn" value="'.$result['packeg_n'].'" >
						  <input type="hidden" class="form-control" name="id" value="'.$result['id'].'" >
						</div>
					  </div>
					  
					  <div class="form-group row">
						<label for="colFormLabel" class="col-sm-3 col-form-label">السعر</label>
						<div class="col-sm-9">
						  <input type="text" class="form-control" name="pr" value="'.$result['packeg_p'].'" >
						</div>
							</div>
							<div class="form-group row">
						<label for="colFormLabel" class="col-sm-3 col-form-label">الصفحة</label>
						<div class="col-sm-9">
						  <input type="text" class="form-control" name="pl" value="'.$result['packeg_l'].'" >
						</div>
							</div>
						 <div class="form-group">
    <label for="exampleFormControlTextarea1">الوصف</label>
    <textarea   name="pd" class="form-control" id="exampleFormControlTextarea1" rows="4">'.$result['packeg_d'].'</textarea>
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
 	<? 

			    if(isset($_POST['edit_ifn'])){
			    $id= $_POST['id'];
			    $pnn= $_POST['pn'];
			    $prr= $_POST['pr'];
			    $pll= $_POST['pl'];
			    $pdd= $_POST['pd'];
	    $sql1="UPDATE `dis` SET `packeg_n` = '$pnn' , `packeg_p` = '$prr'  , `packeg_l` = '$pll'  , `packeg_d` = '$pdd' WHERE `dis`.`id` = '$id'";
	    $stmt1= $database->prepare($sql1);
	    $stmt1->execute(); 
	    
	    
	    
	    
	    
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

      

      <h2>الباقات</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
		  <th scope="col">اسم الباقة</th>
		    <th scope="col">سعر الباقة</th>
		  <th scope="col">الوصف</th>
		   <th scope="col">تعديل</th>
		   <th scope="col">حذف</th>
            </tr>
          </thead>
          <tbody>
          
               <?php
              
	

		$num = 1;
	$sql='SELECT * FROM dis';
 $stmt= $database->query($sql);
while ($result=$stmt->fetch()){
    $pn=$result['packeg_n'];
     $pp=$result['packeg_p'];
      $pd=str_ireplace("\n",'<br>',$result['packeg_d']);
       $id1=$result['id'];
   
	
			echo '
					<tr>
					  <th scope="row">'.$num++.'</th>
					
					  <td>'.$pn.'</td>
					  <td>'.$pp.'</td>
					  <td>'.$pd.'</td>
					 
					  <td><a href="?ep='.$id1.'" class="btn btn-warning">تعديل</a></td>
					  <td><a href="?dp='.$result['id'].'" class="btn btn-danger">حذف</a></td>
					   
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
