<?php
function Idiosyncratic($name,$separator){
$UpperCase="QWERTYUIOPLKJHGFDSAZXCVBNMQWERTYUIOPLKJHGFDSAZXCVBNMQWERTYUIOPLKJHGFDSAZXCVBNM";
$LowerCase="qwertyuioplkjhgfdsazxcvbnmqwertyuioplkjhgfdsazxcvbnmqwertyuioplkjhgfdsazxcvbnm";
$UpperCaseShuffle= str_shuffle($UpperCase);
$LowerCaseShuffle= str_shuffle($LowerCase);
$year=date("Y");
$seconds=date("s");
$rand=rand(0,10000);
if(strlen($rand)==1){
$t="0000".$rand;
}else if(strlen($rand)==2){
 $t= "000".$rand;
}else if(strlen($rand)==3){
 $t= "00".$rand;
}else if(strlen($rand)==4){
$t="0".$rand;
}else if(strlen($rand)==5){
 $t=$rand;
}
$ID=$name.$separator.substr($year,2,4).$seconds.substr(microtime(),3,3).substr($UpperCaseShuffle,0,1).rand(1,9).$t.substr($LowerCaseShuffle,0,3).rand(0,9).substr($UpperCaseShuffle,3,4).rand(100,999).substr($LowerCaseShuffle,6,1);
echo $ID;
}
?>
