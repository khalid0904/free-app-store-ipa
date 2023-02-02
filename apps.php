<?

include_once('config/db.php');
include "config/inf.php";
include "ed_admin.php";


?>


<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><? echo $store?></title><link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Noto+Kufi+Arabic:wght@900&family=Noto+Sans+Arabic&family=Roboto:ital,wght@1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <meta name="description" content="<? echo $disc?>">
    <link rel="icon" type="image/png" href="images/<? echo $logo?>">
</head>
 <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<style> @import url('https://fonts.googleapis.com/css2?family=Noto+Kufi+Arabic:wght@900&family=Noto+Sans+Arabic&family=Roboto:ital,wght@1,900&display=swap'); </style>
<style>
    .material-symbols-rounded {
font-size: 45px ; 
color : black ;
    }

</style>
<style>
    
    
   
</style>
<style> @import url('https://fonts.googleapis.com/css2?family=Noto+Kufi+Arabic:wght@900&family=Noto+Sans+Arabic&family=Roboto+Condensed:wght@700&family=Roboto:ital,wght@1,900&display=swap'); </style>

<body>
<header>
    <div class="navbar">
        <p><? echo $store?></p>
        <img src="images/<? echo $logo?>" alt="">
    </div>
</header>

<br>
<?
$sql='SELECT * FROM app';
 $stmt= $database->query($sql);
while ($result=$stmt->fetch()){
    $app_name=$result['app_name'];
    $app_img=$result['app_img'];
    $app_dis=$result['app_dis'];
     $plist=$result['app_plist'];
     $url=$result['url'];
     echo'

<div class="card-apps">
   <img class="card" src="images/'.$app_img.'">
   <h1>'.$app_name.'</h1>
   <a href="itms-services://?action=download-manifest&url='.$domain.'/'.$plist.'">
     <h2>GET</h2>
   </a>
      <a href="'.$url.'"><h2>IPA</h2></a>
  </div>
';
}
?>
    
     <br>
     <br>
     <br>
     <br>



    <?include "footer.php"?>





</body>
</html>