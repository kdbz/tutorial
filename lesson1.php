<?php

//variables - placeholder/store
//different kinds
$cash_str = "200";
$cash2 = 200;
/*sdsd
sds
sdsd
*/
//echo gettype($cash_str);
#echo gettype($cash2);
#echo '<br/>';
$sum = $cash_str + $cash2;

$name2 = 'dd';
#print $¬name2;
//simple types (data) - int,string,boolean,double/float,
//echo ,print
//compound types, data structures (data+operations)
//arrays,objects,stack
$array1 = [2,3,2];
//show content
/*print_r($array1);

$a += 1;
$a = $a + 1;
$a -= 1;
$a = $a - 1;
$a++;
$a--;
*/
//var_dump
// ==


//var_dump(2 <=> 1);

$str = "2";
$num = 2;
$str2 = 'they are equal';
// == (value)
// === (value + datatype)
if( $str === $num ){
  var_dump($str2);
}else{
  //echo 'not equal';
}

//strings - simple types/ scalar
$int = 123;
$boolean = true;
$double = 12.3;
$string = "hi";

$users = "Kamau,Karongo,Kevin,Grace";
//split
$users_array = explode(',',$users);
//print_r($users_array);

//join
$name1 = 'Kamau';
$name2 = 'Karongo';
$combi = $name1.','.$name2;
echo '<br/>';
//echo $sql = "select * from users where name in ($combi)";
//print $combi;
$names = ['Kamau','Karongo','Kevin','Grace'];
//getting part of a string
$salary = ['KES120000','KES1200','KES10000'];
$sal1 = '120000-KES';
//sub_str(string,start,end)
//start = + , -
//end = +,-
$sal1_int = substr($sal1,0,-4);
//echo '<br/>';
//echo $sal1_int;
//cleaning
$salary = ['KES120,000','£1,200','$10,000'];


//---------CAT 2 Revision--
//Question a)
//namespace Data;
//use ClassName as Cls;
//Question b)

function funct($number1,$number2,$bool=true,$msg=""){

  $result = $number1 + $number2;
  if($bool == false){
    $result = $number1 - $number2;
  }

  if($msg == 'showMessage'){
    $result = 'Hi, the output is : '.$result;

  }
    echo $result;
}

//Question c)
class Animal {

}

class Cow extends Animal{

}
//Question d)
$c = new Cow();//objects
//methods
//polymorphism
//abstraction..
abstract class Hippo{
  abstract function eats();
  abstract function runs();
}
//encapsulation
class example{
  private $a;
  public function test(){

  }
}

 ?>
