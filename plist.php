<?
$p="/images/";
$plist='plist/'.$_POST['name'].'.plist';
$file=fopen("$plist","w");
$msg='
<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE plist PUBLIC "-//Apple//DTD PLIST 1.0//EN" "http://www.apple.com/DTDs/PropertyList-1.0.dtd">
<plist version="1.0">
<dict>
 <key>items</key>
 <array>
  <dict>
   <key>assets</key>
   <array>
    <dict>
     <key>kind</key>
     <string>software-package</string>
     <key>url</key>
     <string>'.$link.'</string>
    </dict>
    <dict>
     <key>kind</key>
     <string>display-image</string>
     <key>url</key>
     <string>'.$domain.$p.$img.'</string>
    </dict>
    <dict>
     <key>kind</key>
     <string>full-size-image</string>
     <key>url</key>
     <string>'.$domain.$p.$img.'</string>
    </dict>
   </array>
   <key>metadata</key>
   <dict>
    <key>bundle-identifier</key>
    <string>'.$b.'</string>
    <key>bundle-version</key>
    <string>1.0</string>
    <key>kind</key>
    <string>software</string>
    <key>title</key>
    <string>'. $app_nam.'</string>
   </dict>
  </dict>
 </array>
</dict>
</plist>


';
fwrite($file,$msg);

if(fclose($file)){
    header("location: uploud.php");
}





?>