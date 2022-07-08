<?php
function Idiosyncratic($name,$symbol){
$UpperCase="QWERTYUIOPLKJHGFDSAZXCVBNMQWERTYUIOPLKJHGFDSAZXCVBNMQWERTYUIOPLKJHGFDSAZXCVBNM";
$LowerCase="qwertyuioplkjhgfdsazxcvbnmqwertyuioplkjhgfdsazxcvbnmqwertyuioplkjhgfdsazxcvbnm";
$UpperCaseShuffle= str_shuffle($UpperCase);
$LowerCaseShuffle= str_shuffle($LowerCase);
$date=date("Y");
$date3=date("s");
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
echo $name.$symbol.substr($date,2,4).$date3.substr($UpperCaseShuffle,0,1).rand(1,9).$t.substr($LowerCaseShuffle,0,3).rand(0,9).substr($UpperCaseShuffle,0,4).rand(10,99);
}

?>
