<?php
//Main Tools:https://github.com/KgHasan
//Open Source Tools
//Share With Give Credit To Owner
function curl($url) {
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_5; en-US) AppleWebKit/534.13 (KHTML, like Gecko) Chrome/9.0.597.15 Safari/534.13");
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
    $content = curl_exec($curl);
    curl_close($curl);
    return $content;
}
system("clear");
echo "
   \033[1;92m██   ██  █████  ███████  █████  ███    ██ 
   \033[1;92m██   ██ ██   ██ ██      ██   ██ ████   ██ 
   \033[1;92m███████ ███████ ███████ ███████ ██ ██  ██ 
   \033[1;92m██   ██ ██   ██      ██ ██   ██ ██  ██ ██ 
   \033[1;92m██   ██ ██   ██ ███████ ██   ██ ██   ████ 
         
  \033[1;92m×××××××××××××××××\033[1;93m××××××××××××××\033[1;92m××××××××××××××××××
  \033[1;32m|     \033[1;33m[✓] CREATED BY\33[0;m   :  \033[1;33mASRAFUL ISLAM HASAN   \033[1;92m|
  \033[1;32m|     \033[1;32m[✓] FACEBOK      : \033[1;34m Hasa N                \033[1;92m|
  \033[1;32m|     \033[1;35m[✓] GITHUB       :  \033[1;35mKgHasan               \033[1;92m|
  \033[1;32m|     \033[1;36m[✓] TOOL STATUS  : \033[1;36m Fb Video Downloading  \033[1;92m|
  \033[1;32m|     \033[1;35m[✓] TEAM         :  \033[1;35mKST                   \033[1;92m|
  \033[1;32m|     \033[1;36m[✓] TOOL VIRSION :  \033[1;36m2.4                   \033[1;92m|
  \033[1;92m×××××××××××××××××\033[1;93m×××××××××××××××\033[1;92m×××××××××××××××××
";
echo "\n\n";
echo "  \033[1;91m[\033[1;93m•\033[1;91m] \033[1;92mEnter Video Url : ";
$v = trim(fgets(STDIN, 1024));
echo "\n\n[#] Enter Video Name To Save As : ";
$name = trim(fgets(STDIN, 1024));
$url = str_replace('www', 'mbasic', $v);
$s = curl($url);
//echo $s;
$vurl = preg_match('/<a href=\"\/video_redirect\/\?src\=(.*?)\"/ims', $s, $matches) ? $matches[1] : null;
$vu = urldecode($vurl);
echo "\n\n[+] Downloading... \n\n\n";
$d = 'wget -O "' . $name . '.mp4" --user-agent="Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/536.6 (KHTML, like Gecko) Chrome/20.0.1092.0 Safari/536.6" "' . $vu . '" -q --show-progress';
system($d);
echo "\n\n[+] Done.. Saved As : " . $name . ".mp4\n\n";
exit(0);
?>
