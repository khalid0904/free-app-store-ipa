	<?
if(isset($_POST['add'])){
  
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
        if (empty($error)) {
  
move_uploaded_file($app_tmp, $p1 .$app_name) ;

 $p1= "imgaes/" ;
  $app_nam= $_POST['name'] ;
          $dis =  $_POST['dis'] ;
          $img = $app_name;
          $plist=$app_nam.".plist";
          $link= $_POST['link'] ;
          $b= $_POST['b'] ;
          include "plist.php";
  $addapp= $database->prepare("INSERT INTO `app` ( app_name, app_dis, url , bundel ,app_img,app_plist) VALUES (:app ,:dis, :url , :b ,:img,:pl);");
      
          $addapp->bindParam("app",$app_nam); 
          $addapp->bindParam("dis",$dis);
           $addapp->bindParam("url",$link);
            $addapp->bindParam("b",$b);
          $addapp->bindParam("img",$img); 
          $addapp->bindParam("pl",$plist); 
          
 if($addapp->execute()){
  
  echo "done";
     
 }else{
  echo "faile".'<br>' ;
  
};
			



}



		
    
}
  ?>
