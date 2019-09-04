<?php
system(clear);
set_time_limit(0);
date_default_timezone_set("Asia/Jakarta");
error_reporting(1);

function get_between($string,$start,$end)
{
    $string = " ".$string;
    $ini    = strpos($string,$start);

    if ($ini == 0) return "";

    $ini += strlen($start);
    $len  = strpos($string,$end,$ini)-$ini;

    return substr($string,$ini,$len);
}

function login($user,$loginuth)
{
    $ch = curl_init();

    curl_setopt($ch,CURLOPT_URL,"https://word-bricker.firebaseio.com/CoinbaseUsers/".$user."/.json?print=pretty&auth=".$loginuth."");
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,"");
    curl_setopt($ch,CURLOPT_POST,false);
    curl_setopt($ch,CURLOPT_ENCODING,"gzip, deflate");

    $headers   = array();
    $headers[] = "Accept: */*";
    $headers[] = "Cache-Control: no-cache";
    $headers[] = "Connection: keep-alive";
    $headers[] = "Host: word-bricker.firebaseio.com";
    $headers[] = "User-Agent: Firebase/5/3.0.0/23/Android";
    $headers[] = "cache-control: no-cache";

    curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
    $result = curl_exec($ch);

    if (curl_errno($ch)) {
        return "JANDES";
    }

    curl_close($ch);
    return $result;
}

function gandakan($user,$crd,$data,$pnjg)
{
    $ch = curl_init();

    curl_setopt($ch,CURLOPT_URL,"https://word-bricker.firebaseio.com/CoinbaseUsers/".$user."/.json?print=pretty&auth=".$crd."");
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,"".$data."");
    curl_setopt($ch,CURLOPT_CUSTOMREQUEST,"PATCH");
    curl_setopt($ch,CURLOPT_ENCODING,"gzip, deflate");

    $headers   = array();
    $headers[] = "Content-Length: ".$pnjg."";
    $headers[] = "Content-Type: application/json; charset=utf-8";

    curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
    $result = curl_exec($ch);

    if (curl_errno($ch)) {
        echo "Error:".curl_error($ch);
    }

    curl_close($ch);
    return $result;
}

function balance($user,$loginuth)
{
    $ch = curl_init();

    curl_setopt($ch,CURLOPT_URL,"https://word-bricker.firebaseio.com/CoinbaseUsers/".$user."/wallet/.json?print=pretty&auth=".$loginuth."");
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,"");
    curl_setopt($ch,CURLOPT_POST,false);
    curl_setopt($ch,CURLOPT_ENCODING,"gzip, deflate");

    $headers   = array();
    $headers[] = "Accept: */*";
    $headers[] = "Cache-Control: no-cache";
    $headers[] = "Connection: keep-alive";
    $headers[] = "Content-Type: application/x-www-form-urlencoded";
    $headers[] = "Host: word-bricker.firebaseio.com";
    $headers[] = "User-Agent: Firebase/5/3.0.0/23/Android";
    $headers[] = "cache-control: no-cache";

    curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
    $result = curl_exec($ch);

    if (curl_errno($ch)) {
        return "KANXCK";
    }

    curl_close($ch);
    return $result;
}

$black        = "\x1b[0;30m";
$darkgrey     = "\x1b[1;30m";
$red          = "\x1b[0;31m";
$lightred     = "\x1b[1;31m";
$green        = "\x1b[1;32m";
$lightgreen   = "\x1b[1;32m";
$brown        = "\x1b[0;33m";
$yellow       = "\x1b[1;33m";
$blue         = "\x1b[1;35m";
$lightblue    = "\x1b[1;34m";
$magenta      = "\x1b[0;35m";
$lightmagenta = "\x1b[1;35m";
$cyan         = "\x1b[0;36m";
$lightcyan    = "\x1b[1;36m";
$lightgrey    = "\x1b[0;37m";
$white        = "\x1b[1;37m";
$end          = "\x1b[0m";

echo "\n";
echo $yellow."   Wellcome to Kampung Scrypt".$end."\n\n";
echo "\x1b[1;31mDON'T FORGET LIKE, COMMENT, SHARE AND SUBSCRIBE\n";
echo $lightmagenta."==============================================".$end."\n\n";
echo $lightgreen."Name  ".$end.$lightblue."#    ".$end.$lightred."CryptoWord".$end."\n";
echo $lightgreen."Creator   ".$end.$lightblue."#    ".$end.$lightred."Kanxck".$end."\n";
echo $lightgreen."Email ".$end.$lightblue."#    ".$end.$lightred."kanxcunxkrinx@gmail.com".$end."\n";
echo $lightgreen."Facebook".$end.$lightblue."#  ".$end.$lightred."@Tersisih.tersisih.589".$end."\n";
echo $lightgreen."Youtube   ".$end.$lightblue."#    ".$end.$lightred."Kampung Scrypt".$end."\n";
echo $lightgreen."Telegram".$end.$lightblue."#  ".$end.$lightred."Tuyul Crypto - Kampung Scrypt".$end."\n";
echo $lightgreen."Website   ".$end.$lightblue."#    ".$end.$lightred."www.Tuyulcrypto.tech".$end."\n\n";
echo $lightmagenta."==============================================".$end."\n\n";
echo $yellow."Best Regard All Team Huru-Hara Kampung Scrypt".$end."\n";
echo $lightmagenta."==============================================".$end."\n\n";

sleep(2);
exec("termux-open-url https://www.youtube.com/channel/UCJo5zejeh45Ii27pjQ5KBNw");
sleep(3);

echo"{$blue}Masukkan User Id = {$end}";
$user = trim(fgets(STDIN));

echo"{$blue}Masukkan Cred = {$end}";
$cred  = trim(fgets(STDIN));
$login = json_decode(login($user,$cred));

system(clear);
echo "\n";
echo $yellow."   Wellcome to Kampung Scrypt".$end."\n\n";
echo "\x1b[1;31mDON'T FORGET LIKE, COMMENT, SHARE AND SUBSCRIBE\n";
echo $lightmagenta."==============================================".$end."\n\n";
echo $lightgreen."Name  ".$end.$lightblue."#    ".$end.$lightred."CryptoWord".$end."\n";
echo $lightgreen."Creator   ".$end.$lightblue."#    ".$end.$lightred."Kanxck".$end."\n";
echo $lightgreen."Email ".$end.$lightblue."#    ".$end.$lightred."kanxcunxkrinx@gmail.com".$end."\n";
echo $lightgreen."Facebook".$end.$lightblue."#  ".$end.$lightred."@Tersisih.tersisih.589".$end."\n";
echo $lightgreen."Youtube   ".$end.$lightblue."#    ".$end.$lightred."Kampung Scrypt".$end."\n";
echo $lightgreen."Telegram".$end.$lightblue."#  ".$end.$lightred."Tuyul Crypto - Kampung Scrypt".$end."\n";
echo $lightgreen."Website   ".$end.$lightblue."#    ".$end.$lightred."www.Tuyulcrypto.tech".$end."\n\n";
echo $lightmagenta."==============================================".$end."\n\n";
echo $yellow."Best Regard All Team Huru-Hara Kampung Scrypt".$end."\n";
echo $lightmagenta."==============================================".$end."\n\n";

sleep(2);
exec("termux-open-url https://t.me/joinchat/J5iye0aYDneNPQLCN_3qdg");
sleep(3);

if ($login->error == TRUE) {
    print"{$blue}[".date("Y:m:d H:i:s")."]{$end} - {$red}Gagal Login,, Capture ulang, ganti cred sama userID.{$end}\n";
} else {
    while (true) {
        $data = json_decode(login($user,$cred));
        $z    = json_encode(array("email"=>$data->email,
                                  "referral_accu"=>$data->referral_accu+3,
                                  "satoshi_accu"=>$data->satoshi_accu+1,
                                  "satoshi_total_claimed"=>$data->satoshi_total_claimed,
                                  "last_claimed"=>$data->last_claimed,
                                  "objectId"=>$user,
                                  "score"=>$data->score));
        $panjang = strlen($z);
        $ganda   = json_decode(gandakan($user,$cred,$z,$panjang));

        if ($ganda->satoshi_accu == TRUE) {
            print "\x1b[1;33m[\x1b[1;35m".date("H:i:s")."\033[1;33m] {$end} # {$lightcyan}Ballace Satoshi{$end} =>{$red}[{$green}$ganda->satoshi_accu{$red}]{$end}\n";
            sleep(3);
        } else {
            print"{$greenb}[".date("G:i:s")."]{$end} - {$red} Silahkan Capture Ulang Ganti Cred{$end}\n";
            exit();
        }
    }
}
?>
