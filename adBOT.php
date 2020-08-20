<?php

set_time_limit(0);
error_reporting(0);
date_default_timezone_set('Asia/Jakarta');

function fetch_value($str,$find_start,$find_end) {
 $start = @strpos($str,$find_start);
 if ($start === false) {
   return "";
 }
 $length = strlen($find_start);
 $end = strpos(substr($str,$start +$length),$find_end);
 return trim(substr($str,$start +$length,$end));
}

include "cfg.php";

/* ANEKA WARNA */
$hitam="\033[0;30m";
$putih="\033[0;37m";
$putih2="\033[1;37m";
$red="\033[0;31m";
$red2="\033[1;31m";
$lblue="\033[0;36m";
$lblue2="\033[1;36m";
$green="\033[0;32m";
$green2="\033[1;32m";
$blue="\033[0;34m";
$blue2="\033[1;34m";
$purple="\033[0;35m";
$purple2="\033[1;35m";
$yellow="\033[0;33m";
$yellow2="\033[1;33m";
$abu2="\033[1;30m";

/* SIMBOL */

$nott = "{$abu2} [{$red}!{$abu2}]{$red2}";
$siip = "{$abu2} [{$green}√{$abu2}]{$green}";
$note = "{$lblue2} [{$yellow2}Ϟ{$lblue2}]{$yellow2}";
$cl = "{$lblue2} [{$yellow2}~{$lblue2}]{$yellow2}";
$titik2 = "{$lblue2} [{$green2}~{$lblue2}]{$lblue2}";
$add = "{$lblue2} [{$green2}+{$lblue2}]{$green}";
$titik4 = "{$lblue2} [{$putih2}^{$lblue2}]{$putih2}";


function curl_get($url,$headers){
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
   curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);    
  $result = curl_exec($ch);
  curl_close($ch);
  return $result;
}

function curl_post($url,$headers,$data){
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
  $result = curl_exec($ch);
  curl_close($ch);
  return $result;
}


$banner = "\r
{$red2} ╔{$yellow2}•{$yellow2}•{$red2}═{$yellow2}•{$red2}═{$yellow2}•{$red2}═{$yellow2}•{$red2}═{$yellow2}•{$red2}═{$yellow2}•{$red2}═{$yellow2}•{$red2}═{$yellow2}•{$red2}═{$yellow2}•{$red2}═{$yellow2}•{$red2}═{$yellow2}•{$red2}═{$yellow2}•{$red2}═{$yellow2}•{$red2}═{$yellow2}•{$red2}═{$yellow2}•{$red2}═{$yellow2}•{$red2}═{$yellow2}•{$red2}═{$yellow2}•{$red2}═{$yellow2}•{$red2}═{$yellow2}•{$red2}═{$yellow2}•{$red2}═{$yellow2}•{$red2}═{$yellow2}•{$red2}═{$yellow2}•{$red2}═{$yellow2}•{$red2}═{$yellow2}•{$red2}╗
{$green2} ║ BOT               : adBOT.cc {$blue2}(Website)         {$green2}    ║
{$purple2} ║ Author By         : DD™                            ║
{$red2} ║ YT Channel        : {$red2}GgLoan Tube                    ║
 {$lblue2}╚{$yellow2}•{$red2}═{$yellow2}•{$red2}═{$yellow2}•{$red2}═{$yellow2}•{$red2}═{$yellow2}•{$red2}═{$yellow2}•{$red2}═{$yellow2}•{$red2}═{$yellow2}•{$red2}═{$yellow2}•{$red2}═{$yellow2}•{$red2}═{$yellow2}•{$red2}═{$yellow2}•{$red2}═{$yellow2}•{$red2}═{$yellow2}•{$red2}═{$yellow2}•{$red2}═{$yellow2}•{$red2}═{$yellow2}•{$red2}═{$yellow2}•{$red2}═{$yellow2}•{$red2}═{$yellow2}•{$red2}═{$yellow2}•{$red2}═{$yellow2}•{$red2}═{$yellow2}•{$red2}═{$yellow2}•{$red2}═{$yellow2}•{$red2}═{$yellow2}•{$yellow2}•{$lblue2}╝\n";

 /* PROSES BOT */



sleep(1);
$uazec = array(
    "user-agent: ".$useragent."",
    "Connection: keep-alive",
    "cookie: PHPSESSID=".$ssidzec."",
    "cookie: ".$token."",
    "cookie: ".$valsurf."");
$uadoge = array(
    "user-agent: ".$useragent."",
    "Connection: keep-alive",
    "cookie: PHPSESSID=".$ssiddoge."",
    "cookie: ".$token."",
    "cookie: ".$valsurf."");
$ualtc = array(
    "user-agent: ".$useragent."",
    "Connection: keep-alive",
    "cookie: PHPSESSID=".$ssidltc."",
    "cookie: ".$token."",
    "cookie: ".$valsurf."");
$uabch = array(
    "user-agent: ".$useragent."",
    "Connection: keep-alive",
    "cookie: PHPSESSID=".$ssidbch."",
    "cookie: ".$token."",
    "cookie: ".$valsurf."");
echo os.system('clear');
$authzec = curl_get("https://adzec.cc/dashboard", $uazec);
$z = explode('<a href="deposit" class="btn white light-blue-text text-darken-4">', $authzec);
$x = explode('</a>', $z[1]);
$us = $x[0];
if ($us == "Deposit"){
  echo "{$siip} Success Login adZEC...!!!";
}else{
  echo "{$nott} PHPSESSID ZEC Salah...!!!";
}
sleep(1);
echo os.system('clear');
$authdoge = curl_get("https://addoge.cc/dashboard", $uadoge);
$z = explode('<a href="deposit" class="btn white light-blue-text text-darken-4">', $authdoge);
$x = explode('</a>', $z[1]);
$us = $x[0];
if ($us == "Deposit"){
  echo "{$siip} Success Login adDOGE...!!!";
}else{
  echo "{$nott} PHPSESSID DOGE Salah...!!!";
}
sleep(1);
echo os.system('clear');
$authltc = curl_get("https://adltc.cc/dashboard", $ualtc);
$z = explode('<a href="deposit" class="btn white light-blue-text text-darken-4">', $authltc);
$x = explode('</a>', $z[1]);
$us = $x[0];
if ($us == "Deposit"){
  echo "{$siip} Success Login adLTC...!!!";
}else{
  echo "{$nott} PHPSESSID LTC Salah...!!!";
}
sleep(1);
echo os.system('clear');
$authbch = curl_get("https://adbch.cc/dashboard", $uabch);
$z = explode('<a href="deposit" class="btn white light-blue-text text-darken-4">', $authbch);
$x = explode('</a>', $z[1]);
$us = $x[0];
if ($us == "Deposit"){
  echo "{$siip} Success Login adBCH...!!!";
}else{
  echo "{$nott} PHPSESSID BCH Salah...!!!";
}
sleep(1);
echo os.system('clear');
sleep(1);
echo $banner;
$dashzec = curl_get("https://adzec.cc/dashboard", $uazec);
$azec = explode('<h6>Username : <b>', $dashzec);
$bzec = explode('</b>', $azec[1]);
$czec = explode('Account Balance<br><b>', $dashzec);
$dzec = explode('</b>', $czec[1]);

$dashdoge = curl_get("https://addoge.cc/dashboard", $uadoge);
$adoge = explode('<h6>Username : <b>', $dashdoge);
$bdoge = explode('</b>', $adoge[1]);
$cdoge = explode('Account Balance<br><b>', $dashdoge);
$ddoge = explode('</b>', $cdoge[1]);

$dashltc = curl_get("https://adltc.cc/dashboard", $ualtc);
$altc = explode('<h6>Username : <b>', $dashltc);
$bltc = explode('</b>', $altc[1]);
$cltc = explode('Account Balance<br><b>', $dashltc);
$dltc = explode('</b>', $cltc[1]);

$dashbch = curl_get("https://adbch.cc/dashboard", $uabch);
$abch = explode('<h6>Username : <b>', $dashbch);
$bbch = explode('</b>', $abch[1]);
$cbch = explode('Account Balance<br><b>', $dashbch);
$dbch = explode('</b>', $cbch[1]);
sleep(1);
$ip = curl_get("https://www.myip.com/", $ua);
$ip1 = explode('<span id="ip">', $ip);
$ip2 = explode('</span>', $ip1[1]);
echo " {$lblue2}Your IP {$red2}:{$purple2} ".$ip2[0]."\n";
echo $note."{$purple2} Account  : ","{$green2}".$bzec[0]." {$red2}==> ","{$purple2} Ballance : ","{$green2}".$dzec[0]."\n";
sleep(1);
echo $note."{$purple2} Account  : ","{$green2}".$bdoge[0]." {$red2}==> ","{$purple2} Ballance : ","{$green2}".$ddoge[0]."\n";
sleep(1);
echo $note."{$purple2} Account  : ","{$green2}".$bltc[0]." {$red2}==> ","{$purple2} Ballance : ","{$green2}".$dltc[0]."\n";
sleep(1);
echo $note."{$purple2} Account  : ","{$green2}".$bbch[0]." {$red2}==> ","{$purple2} Ballance : ","{$green2}".$dbch[0]."\n";
sleep(1);
echo "\n{$cl} {$lblue2}AutoClaim is Running...!!!\n";

while (true){
 $surfzec = curl_get("https://adzec.cc/surf", $uazec);
 $ezec = explode('<a href="skip?token=', $surfzec);
 $fzec = explode('"', $ezec[1]);
 $tokenzec = $f[0];
 if ($tokenzec == null){
    echo $nott." Ads ZEC No Available ","{$abu2}<{$red}!{$abu2}>"," Please Try Again !!!\n";
    sleep(1);
 }else{
 $gzec = explode('<h6>Price : <b>', $surfzec);
 $hzec = explode('</b>', $gzec[1]);
 $rewardzec = $hzec[0];
 $xzec = explode('<br>Duration : <b>', $surfzec);
 $yzec = explode('</b>', $xzec[1]);
 $zzec = $yzec[0];
 echo "\r \r";
 echo $titik4."\r<<< Views Ads >>> ";
 echo "\r\r";
 sleep(1);
 
 $datazec = "adsids=".$tokenzec."";
 $claimzec = curl_post("https://adzec.cc/earndata.php", $uazec,  $datazec);
 for ($wzec=$zzec;$wzec>0;$wzec--){
     echo "\r \r";
     echo $titik4."\r<<< Views Ads >>> ".$wzec." Seconds ";
     echo "\r\r";
     sleep(1); 
     }
 $surf2zec = curl_get("https://adzec.cc/surf", $uazec);
 $izec = explode('Account Balance<br><b>', $surf2zec);
 $jzec = explode('</b>', $izec[1]);
 echo $add." ".$rewardzec." | ".$jzec[0]."\n";
 sleep(1);
 }

 $surfdoge = curl_get("https://addoge.cc/surf", $uadoge);
 $edoge = explode('<a href="skip?token=', $surfdoge);
 $fdoge = explode('"', $edoge[1]);
 $tokendoge = $fdoge[0];
 if ($tokendoge == null){
    echo $nott." Ads DOGE No Available ","{$abu2}<{$red}!{$abu2}>"," Please Try Again !!!\n";
    sleep(1);
 }else{
 $gdoge = explode('<h6>Price : <b>', $surfdoge);
 $hdoge = explode('</b>', $gdoge[1]);
 $rewarddoge = $hdoge[0];
 $xdoge = explode('<br>Duration : <b>', $surfdoge);
 $ydoge = explode('</b>', $xdoge[1]);
 $zdoge = $ydoge[0];
 echo "\r \r";
 echo $titik4."\r<<< Views Ads >>> ";
 echo "\r\r";
 sleep(1);
 $datadoge = "adsids=".$tokendoge."";
 $claimdoge = curl_post("https://addoge.cc/earndata.php", $uadoge,  $datadoge);
 for ($wdoge=$zdoge;$wdoge>0;$wdoge--){
     echo "\r \r";
     echo $titik4."\r<<< Views Ads >>> ".$wdoge." Seconds ";
     echo "\r\r";
     sleep(1);
     }
 $surf2doge = curl_get("https://addoge.cc/surf", $uadoge);
 $idoge = explode('Account Balance<br><b>', $surf2doge);
 $jdoge = explode('</b>', $idoge[1]);
 echo $add." ".$rewarddoge." | ".$jdoge[0]."\n";
 sleep(1);
 }

 $surfltc = curl_get("https://adltc.cc/surf", $ualtc);
 $eltc = explode('<a href="skip?token=', $surfltc);
 $fltc = explode('"', $eltc[1]);
 $tokenltc = $fltc[0];
 if ($tokenltc == null){
    echo $nott." Ads LTC No Available ","{$abu2}<{$red}!{$abu2}>"," Please Try Again !!!\n";
    sleep(1);
 }else{
 $gltc = explode('<h6>Price : <b>', $surfltc);
 $hltc = explode('</b>', $gltc[1]);
 $rewardltc = $hltc[0];
 $xltc = explode('<br>Duration : <b>', $surfltc);
 $yltc = explode('</b>', $xltc[1]);
 $zltc = $yltc[0];
 echo "\r \r";
 echo $titik4."\r<<< Views Ads >>> ";
 echo "\r\r";
 sleep(1);
 
 $dataltc = "adsids=".$tokenltc."";
 $claimltc = curl_post("https://adltc.cc/earndata.php", $ualtc,  $dataltc);
 for ($wltc=$zltc;$wltc>0;$wltc--){
     echo "\r \r";
     echo $titik4."\r<<< Views Ads >>> ".$wltc." Seconds ";
     echo "\r\r";
     sleep(1);
     }
 $surf2ltc = curl_get("https://adltc.cc/surf", $ualtc);
 $iltc = explode('Account Balance<br><b>', $surf2ltc);
 $jltc = explode('</b>', $iltc[1]);
 echo $add." ".$rewardltc." | ".$jltc[0]."\n";
 sleep(1);
 }

 $surfbch = curl_get("https://adbch.cc/surf", $uabch);
 $ebch = explode('<a href="skip?token=', $surfbch);
 $fbch = explode('"', $ebch[1]);
 $tokenbch = $fbch[0];
 if ($tokenbch == null){
    echo $nott." Ads BCH No Available ","{$abu2}<{$red}!{$abu2}>"," Please Try Again !!!\n";
    sleep(1);
 }else{
 $gbch = explode('<h6>Price : <b>', $surfbch);
 $hbch = explode('</b>', $gbch[1]);
 $rewardbch = $hbch[0];
 $xbch = explode('<br>Duration : <b>', $surfbch);
 $ybch = explode('</b>', $xbch[1]);
 $zbch = $ybch[0];
 echo "\r \r";
 echo $titik4."\r<<< Views Ads >>> ";
 echo "\r\r";
 sleep(1);
 
 $databch = "adsids=".$tokenbch."";
 $claimbch = curl_post("https://adbch.cc/earndata.php", $uabch,  $databch);
 for ($wbch=$zbch;$wbch>0;$wbch--){
     echo "\r \r";
     echo $titik4."\r<<< Views Ads >>> ".$wbch." Seconds ";
     echo "\r\r";
     sleep(1);
     }
 $surf2bch = curl_get("https://adbch.cc/surf", $uabch);
 $ibch = explode('Account Balance<br><b>', $surf2bch);
 $jbch = explode('</b>', $ibch[1]);
 echo $add." ".$rewardbch." | ".$jbch[0]."\n";
 sleep(1);
 }
 if ($tokenzec != null){
   continue;
 }elseif ($tokendoge != null){
   continue;
 }elseif ($tokenltc != null){
   continue;
 }elseif ($tokenbch != null){
   continue;
 }else{
   exit;
 }
}

/*
"cookie: __dtsu=10401595081261FF772D1E41EB173C94",
    "cookie: SAregister=SAregister_existed",
    "cookie: FreMe=Ynk1MjMz",
    "cookie: FreMeP=NmRhYzdiZTZmODgzZTVmZTUzYmE0YWUyNWUyYWJjMTU%3D",
    "cookie: SAreD=SAreDV",
    "cookie: a=GfTbfskBl3palQqOpUn5mztiivFezWm4",
*/
// $earn = curl_post("https://adbch.cc/earndata.php", $ua, $data);
// echo $earn;



// echo $banner;
// $dash = curl_get("https://www.letit.cloud/dashboard", $ua);
// $a = explode('<div class="head__top--username">', $dash);
// $b = explode('</div>', $a[1]);
// $c = $b[0];
// echo $titik." ".$c."\n";
// $reff = curl_get("https://www.letit.cloud/dashboard", $ua);
// $d = explode('<div class="affi__stats--text2">
//               Total Referred Users
//               <span>', $reff);
// $e = explode('</span>', $d[1]);
// $f = $e["0"];
// echo $titik." Your Reff : ".$f."\n";
// $sett = curl_get("https://www.letit.cloud/withdraw", $ua);
// $g = explode('<div class="wd__your__balance--wallet--number text-crop">
//                                 ', $sett);
// $h = explode('</div>', $g[1]);
// $i = $h[0];
// echo $titik." Your BTC : ".$i."\r";
// echo "{$red2} x{$yellow2}•{$yellow2}•{$red2}═{$yellow2}•{$red2}═{$yellow2}•{$red2}═{$yellow2}•{$red2}═{$yellow2}•{$red2}═{$yellow2}•{$red2}═{$yellow2}•{$red2}═{$yellow2}•{$red2}═{$yellow2}•{$red2}═{$yellow2}•{$red2}═{$yellow2}•{$red2}═{$yellow2}•{$red2}═{$yellow2}•{$red2}═{$yellow2}•{$red2}═{$yellow2}•{$red2}═{$yellow2}•{$red2}═{$yellow2}•{$red2}═{$yellow2}•{$red2}═{$yellow2}•{$red2}═{$yellow2}•{$red2}═{$yellow2}•{$red2}═{$yellow2}•{$red2}═{$yellow2}•{$red2}═{$yellow2}•{$red2}═{$yellow2}•{$red2}═{$yellow2}•{$red2}x\n";
// echo "\n{$titik} Start Mining....!!!\n";
// while (True){
//  $dash2 = curl_get("https://www.letit.cloud/withdraw", $ua);
//  $d = explode('<span id="withdraw" data-btc="', $dash2);
//  $e = explode('"', $d[1]);
//  $f = $e[0];
//  echo $titik3." ".$f."\n";
//  sleep(5);

// }
