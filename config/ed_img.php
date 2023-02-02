 <?php
	$p1="images/";
	

				
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

	

	
?>