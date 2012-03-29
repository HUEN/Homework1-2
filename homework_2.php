<?php
/*1.FIND_3_PRIME
 $arr = range(20,1000,37);
 
function find_3_prime($arr)
{ 
  global $arr;
  
  foreach ($arr as $value)
  { 
  if((($value%2)==0 AND $value>2) || $value<2)
{
      return false ;

for($Divisor = 3; $Divisor <=sqrt($value); $Divisor +=2)
{ 
     if(($value%$Divisor)==0)
{
     return false;
}}}}}
  echo find_3_prime($arr);
  
  
  
  
  
 //2.CHECK_EXISTS
 
  $arr = range(20,1000,37);
 
 function check_exists ($arr)
{ 
    
      global $arr;
      if(in_array (146,  $arr,true))
	  {
	      echo " '146' exist in the array"; 
       }
	   else {
	    echo "The number '146' does not exist in the array";
	} 
		if(in_array (284,$arr,true))
	  {
	      echo " '284' exist in the array"; 
      }
	   else {
	   
	    echo "The number '284' does not exist in the array";
	}
    if(in_array (871,$arr,true))
	  {
	      echo " '871' exist in the array"; 
      }
	   else {
	   
	    echo "The number '871' does not exist in the array";
	}}

	echo check_exists($arr);*/
?>



				 
