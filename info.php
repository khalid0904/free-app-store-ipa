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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="icon" type="image/png" href="images/<? echo $logo?>">
</head>
<style> @import url('https://fonts.googleapis.com/css2?family=Noto+Kufi+Arabic:wght@900&family=Noto+Sans+Arabic&family=Roboto:ital,wght@1,900&display=swap'); </style>
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
<img class="logo" src="images/<? echo $logo?>" alt="">
</center>
<br>
<br>
<br>
<p> <? echo $info?></p>
<p> تابعني هنا </p>
<br>
<div class="info-card-social">
<center>
<a href="https://t.me/<? echo $tele?>" target="_blank"><img src="https://www.svgrepo.com/show/271091/telegram.svg" alt=""></a>
<a href="https://twitter.com/<? echo $tw?>"target="_blank"><img src="https://www.svgrepo.com/show/126780/twitter.svg" alt=""></a>
</center>
</div>
<br>
<br>
<br>
</div>
<?include "footer.php"?>

</body>
</html>