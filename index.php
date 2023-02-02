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
    <title><? echo $disc?></title><link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Noto+Kufi+Arabic:wght@900&family=Noto+Sans+Arabic&family=Roboto:ital,wght@1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    
    <meta name="description" content="<? echo $disc?>">
    <link rel="icon" type="image/png" href="https://meshal-app.store/admin/uploads/logo.jpeg">
</head>
<style> @import url('https://fonts.googleapis.com/css2?family=Noto+Kufi+Arabic:wght@900&family=Noto+Sans+Arabic&family=Roboto:ital,wght@1,900&display=swap'); </style>
 <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<style>
    
   
   

</style>
<style> @import url('https://fonts.googleapis.com/css2?family=Noto+Kufi+Arabic:wght@900&family=Noto+Sans+Arabic&family=Roboto+Condensed:wght@700&family=Roboto:ital,wght@1,900&display=swap'); </style>
<style>
    .material-symbols-rounded {
font-size: 45px ; 
color : black ;
    }

</style>

<body>
<header>
    <div class="navbar">
        
        <p><? echo $store?></p>
 
        <img src="images/<? echo $logo?>" alt="">
    </div>
</header>
<br>
<div class="info-card">
    <br>
    <center>
        <div class="slider">
            <div class="slides">
          
              <input type="radio" name="radio-btn" id="radio1">
              <input type="radio" name="radio-btn" id="radio2">
              <input type="radio" name="radio-btn" id="radio3">
              <input type="radio" name="radio-btn" id="radio4">
             
             <?$sql2='SELECT * FROM banner';
 $stmt2= $database->query($sql2);
 $img=$stmt2->fetch();
   $banner=$img['img'];
    $pp="images/";
 echo'
              <div class="slide first">
                <img src="'.$pp.$banner.'" alt="">
              </div>
              ';
              
              while ($img=$stmt2->fetch()){
              
    $banner=$img['img'];
    $pp="images/"; echo'
              <div class="slide">
                <img src="'.$pp.$banner.'" alt="">
              </div>
             
            
          ';}?>
            
          
              <div class="navigation-auto">
                <div class="auto-btn1"></div>
                <div class="auto-btn2"></div>
                <div class="auto-btn3"></div>
              
              </div>
           
            <div class="navigation-manual">
              <label for="radio1" class="manual-btn"></label>
              <label for="radio2" class="manual-btn"></label>
              <label for="radio3" class="manual-btn"></label>
              
              
            </div>
        
          </div>
        
      
          <script type="text/javascript">
          var counter = 1;
          setInterval(function(){
            document.getElementById('radio' + counter).checked = true;
            counter++;
            if(counter > 3){
              counter = 1;
            }
          }, 5000);
          </script>
</center>
<br>
<br>
<br>
<p class="ds"><? echo $disc?></p>

<br>

<br>
</div>
<br>
<center>
<p class="sus">المميزات</p>
</center>
<hr>
<br>
<br>
<div class="feature">
    <img src="https://www.svgrepo.com/show/250276/pay.svg" alt="">
    <h3>طرق الدفع</h3>
    <p class="featuree"><? echo $pay?></p>
    
    <br>
    <br>
    <hr>
<br>
<br>
<img src="https://meshal-app.store/images/feather/clock.svg" alt="">
<h3>الدعم الفني</h3>
<p class="featuree"><? echo $ts?></p>
<br>
<br>
<hr>
<br>
<br>
</div>

<div class="package">
<p>باقات الاشتراك</p>
 <? while ($result66=$stmt12->fetch()){
              
    $name4=$result66['packeg_n'];
    $price=$result66['packeg_p'];
    $discr= '<p class="description">'.str_replace("\n",'*<br>',$result66['packeg_d']).'   *</p>';
    $ur=$result66['packeg_l'];
    echo'
<div class="info-card">
    <br>
<p class="vip">'.$name4.'</p>
<p class="price">'.$price.'</p>
<p class="pricee">'.$cc.'</p>
<br>
'.$discr.'
<br>
<a class="sb" href="'.$ur.'">اشترك بالباقة</a>
<br>
<br>
</div>
';}?>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<?include "footer.php"?>

</body>
</html>










