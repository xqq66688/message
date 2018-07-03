<?php 
header("content-type:text/html;charset=utf8");
//1.100以内的奇数
echo "100以内的奇数<br>";
for ($i=1; $i<100;$i++) { 
	if ($i%2==1) {
		echo $i.",";
	}
}
echo "<hr>";
//2.100以内的偶数
echo "100以内的偶数<br>";
for($i=1;$i<100;$i++){
	if ($i%2==0) {
		echo $i.",";
	}
}
echo "<hr>";
//3.99乘法表
for($i=1; $i<=9; $i++){
	echo "<br>";
	for ($j=1; $j<=$i;$j++) { 

		echo $j."*".$i."&nbsp&nbsp";
	}
}
echo "<hr>";
//4.一个数字的数组用方法排序(正序)
echo "一个数字的数组用方法排序正序<br>";
$array=array(1,5,6,2,9,3,7);
$arr=array();
for ($i=1; $i<20;$i++) { 
	foreach ($array as $key => $value) {
		if ($value<$i) {
		array_push($arr,$value);
		}
	}	
}	echo "<pre>";
	var_dump(array_unique($arr));
echo "<hr>";

//4.一个数字的数组用方法排序(反序)
echo "一个数字的数组用方法排序反序<br>";
$array=array(1,5,6,2,9,3,7);
$arr=array();
for ($i=10; $i>=1;$i--) { 
	foreach ($array as $key => $value) {
		if ($value==$i) {
			array_push($arr,$value);
		}
	}
}
var_dump($arr);
echo "<hr>";

//5.求一个组数字的平均数/和
echo "求一个组数字的和<br>";
$array=array(1,5,6,2,9,3,7);
$sum='';
foreach ($array as $key => $value) {
	$sum+=$value;
}
echo $sum;
echo "<hr>";
echo "求一个组数字的平均数<br>";
$array=array(1,5,6,2,9,3,7);
$sum='';
foreach($array as $key => $value){
	$sum+=$value;
}
$count=$key+1;
echo $sum/$count;
echo "<hr>";
//问每个月的兔子总数为多少
echo "每个月的兔子的总数为<br>";
$array=array(1,1,2,3,5,8,13,21);
$month=6;
for ($i=1;$i<$month;$i++) { 
	$a=count($array)-1;
	$b=count($array)-2;
	$v=$array[$a]+$array[$b];
	array_push($array,$v);
}
var_dump($array);
echo "<hr>";
//判断101-200之间有多少个素数，并输出所有素数
echo "判断101-200之间有多少个素数，并输出所有素数<br>";
// $count=0;
// echo "101-200之间的素数有:";
// for ($i=101; $i<200;$i++) { 
// 	if ($i%2==1&&$i%3==1) {
// 		echo $i."&nbsp";
// 		$count++;
// 	}

// }	
// echo "<br>101-200之间有".$count."个素数";
$sum=0;
for($i=101;$i<=200;$i++){
      for($j=2;$j<=sqrt($i);$j++){
	  if($i%$j==0){continue 2 ;}
	  }
	  echo $i.'<br/>';
	  $sum++;
}
echo $sum."个";

echo "<hr>";
////水仙花数
//153是一个"水仙花数"，因为153=1的三次方＋5的三次方＋3的三次方。 
//1.程序分析：利用for循环控制100-999个数，每个数分解出个位，十位，百位
echo "利用for循环控制100-999个数，每个数分解出个位，十位，百位<br>";
$arr=array();
for ($i=0;$i<9;$i++) { 
	for ($j=0;$j<9;$j++) { 
		for ($m=0;$m<9;$m++) { 
			if ($i*$i*$i + $j*$j*$j + $m*$m*$m==100*$i+10*$j+$m) {
				$arr[]=100*$i+10*$j+$m;
			}
		}
	}
}
print_r($arr);

echo "<br><hr>";


#题目：利用条件运算符的嵌套来完成此题：学习成绩>=90分的同学用A表示，60-89分之间的用B表示，60分以下
#的用C表示。 
#1.程序分析：(a>b)?a:b这是条件运算符的基本例子
$fen=rand(1,100);
if ($fen>=60&&$fen<=89) {
	echo $fen.":为B同学";
}else if ($fen>=90) {
	echo $fen.":为A同学";
}else{
	echo $fen.":为C同学";
}
echo "<br><hr>";


//将一个正整数分解质因数。例如：输入90,打印出90=2*3*3*5。 
echo "将一个正整数分解质因数";
$num=321;
for ($i=2;$i<$num; $i++) { 
	if ($num%$i==0) {
		echo $i;
		$num=$num/$i;
		$i=1;
	}
}
echo "<br><hr>";

$m=80;
$n=40;
function getit($j){
for($k=2;$k<=$j/2;$k++){
   if($j%$k==0){$arr[]=$k;}
   }
   return $arr;
}
 
$arrm=getit($m);
$arrn=getit($n);
for($i=count($arrm)-1;$i>=0;$i--){
 
	for($p=count($arrn)-1;$p>=0;$p--){
    if($arrm[$i]==$arrn[$p]){echo '最大公约数：'.$arrm[$i];break 2;}
 
    }
 
}
echo '最小公倍数：'.$m*$n/$arrm[$i];

echo "<br><hr>";
//求s=a+aa+aaa+aaaa+aa...a的值，
//其中a是一个数字。例如2+22+222+2222+22222(此时共有5个数相加)，

$k=0;$t='';
for($y=1;$y<=5;$y++){
	$g='';
	for($j=1;$j<=$y;$j++){
    
	$g=$g.'2';
	
	}
$k+=intval($g);
}
echo $k;
echo "<br><hr>";



$a="http://wfdskjgds..*fdsjgkdnkjhifgjhkjfgjhkfghkjfgghjchgdfgcom.cn:88/abc/de/fg.php?id=1655645645435werr";
 
// $b=parse_url($a);//解析 URL，以数组的方式返回其组成部分
 
// var_dump($b);
// echo '<br>';
 
// 方法一
// echo substr($b['path'],strpos($b['path'],'.'));
 
// echo '<br>';
 
// 方法二
// $path_array = explode('.',$b['path']);
// echo end($path_array);
// echo "<br><hr>";
$c=strripos($a,'.');
$d=substr($a,$c,4);
echo $d."<br><hr>";
$a1=strripos($a,'.')+1;
$b2=substr($a,$a1,3);
echo $b2;
echo "<br><hr>";
$num='';
for ($i=1;$i<50;$i++) { 
	if ($i%2==1) {
		$num=$num+$i;
	}
}
echo $num;

