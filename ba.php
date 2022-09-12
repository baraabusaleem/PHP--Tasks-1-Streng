<!-- 1. -->
<?php
$str = "Tutorials Class";
echo strtoupper($str);
?>
<br>
<?php
$str = "BARA";
echo strtolower($str);
?>

<br>
<?php
$str = "stop";
echo ucfirst($str);
?>

<br>
<?php
$thesentence = "the quick brown fox jumped over the lazy dog.";
echo ucwords ( $thesentence ); //prints out "The Quick Brown Fox Jumped Over The Lazy Dog."
?>
<br>
<!-- 2 -->
<?php
$str= "085119"; 
echo substr(chunk_split($str, 2, ':'), 0, -1)."\n";
?>
<br>
<!-- <3> -->

<?php
$str = "I am a full stack developer at orange coding acadimy";
if (strpos($str,'orange') !== false) 
 {
    echo 'Word found';
 }
else
 {
    echo "The specific word is not present";
 }
?>
<br>
<!-- <4> -->

<?php
$path = 'www.gogel.com/index.php';
$file_name = substr(strrchr($path, "/"), 1);
echo $file_name."\n"; 
?>
<br>
<!-- <5> -->

<?php
$mailid  = 'bara@yahoo.com';
$user = strstr($mailid, '@', true);
echo $user."\n";
?>

<br>
<!-- <6> -->

<?php
$str1 = 'bara@yahoo.com';
echo substr($str1, -3)."\n";
?>
<br>
<!-- <7> -->
<?php
function password_generate($chars) 
{
  $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
  return substr(str_shuffle($data), 0, $chars);
}
  echo password_generate(7)."\n";
?>
<br>
<!-- <8> -->

<?php
$str = "That new trainee is so genius";
echo preg_replace('/the/', 'That', $str, 1)."\n"; 
?>
<br>
<!-- <9> -->

<?php
$str1 = 'dragonball';
$str2 = 'dragonboll';
$str_pos = strspn($str1 ^ $str2, "\0");
printf('First difference between two strings at position %d: "%s" vs "%s"',
$str_pos, $str1[$str_pos], $str2[$str_pos]);
printf("\n");
?>
<!-- <10> -->
<br>
<?php
$str = "Twinkle, twinkle, little star,\nHow I wonder what you are.\nUp above the world so high,\nLike a diamond in the sky.";
$arra1 = explode("<br>", $str);
var_dump($arra1);
?>
<!-- <11> -->
<br>
<?php
$cha = 'a';
$next_cha = ++$cha; 
//The following if condition prevent you to go beyond 'z' or 'Z' and will reset to 'a' or 'A'.
if (strlen($next_cha) > 1) 
{
 $next_cha = $next_cha[0];
 }
echo $next_cha."\n";
?>
<br>
<?php
$cha = 'z';
$next_cha = ++$cha; 
//The following if condition prevent you to go beyond 'z' or 'Z' and will reset to 'a' or 'A'.
if (strlen($next_cha) > 1) 
{
 $next_cha = $next_cha[0];
 }
echo $next_cha."\n";
?>

<br>
<?php
$cha = 'Y';
$next_cha = ++$cha; 
//The following if condition prevent you to go beyond 'z' or 'Z' and will reset to 'a' or 'A'.
if (strlen($next_cha) > 1) 
{
 $next_cha = $next_cha[0];
 }
echo $next_cha."\n";
?>
<br>
<!-- <12> -->
<?php
$original_string = 'The brown fox';
$string_to_insert ='quick';
$insert_pos = 4;
$new_string = substr_replace($original_string, $string_to_insert.' ', $insert_pos, 0);
echo $new_string."\n";
?>

<br>
<!-- <13> -->
<?php
$x = '000567022.24';
$str1 = ltrim($x, '0');
echo $str1."\n";
?>
<br>
<!-- <14> -->


<br>
<!-- <15> -->
<?php
$str = 'the quick brown fox jumps over the lazy dog.';
echo preg_replace('/the/', 'That', $str, 1)."\n"; 
?>
<br>
<!-- <16> -->

<?php
$my_str = '\"\1+2/3*2:2-3/4*3';
echo str_replace(str_split('\\/:*?"<>|+-'), ' ', $my_str)."\n";
?>
<br>

<!-- <17> -->

<?php
$str = 'the quick brown fox jumps 0 ! !.';
echo preg_replace('/the/', 'That', $str, 1)."\n"; 
?>




<br>
<!-- <18> -->

<?php
$str1 = "2,543.12";
$x = str_replace( ',', '', $str1);
if( is_numeric($x))
  {
  echo $x."\n";
  }
?>
<br>
<!-- <19> -->

<?php
for ($x = ord('a'); $x <= ord('z'); $x++)
 echo chr($x);
 echo "\n"
?>