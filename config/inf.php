<?
	$sql =' select * from page  ';
					$stmt= $database->prepare($sql);
					 $stmt->execute();
					 $result= $stmt->fetch();
					

     $store=$result['name'];
    $domain=$result['domain'];
      $logo=$result['img'];
      $disc=str_replace("\n",'<br>',$result['disc']);
       $pay=str_replace("\n",'<br>',$result['pay']);
       $info=str_replace("\n",'<br>',$result['info']);
        $ts=str_replace("\n",'<br>',$result['ts']);
         $tw=$result['tw'];
       $tele=$result['tele'];
       
     
	$sql12 =' select * from dis  ';
					$stmt12= $database->query($sql12);
				
					 
                
      ?>