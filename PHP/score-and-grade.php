<?php
  
    function print_grade($grade){
        $number = rand(50,100);

if ($number<70)
{
	 $grade = "<h1>Your Score: $number/100 </h1> <br> <h2>Your grade is D.</h2> ";
}
else if($number>=70 || 80)
{
	$grade = "<h1>Your Score: $number/100 </h1> <br> <h2>Your grade is C.</h2> ";
}
else if($number>=80 || 90)
{
	$grade = "<h1>Your Score: $number/100 </h1> <br> <h2>Your grade is B.</h2> ";
}
else($number>=90 || 100);
{
	echo $grade = "<h1>Your Score: $number/100 </h1> <br> <h2>Your grade is A.</h2> ";
}
    }
print_grade($grade);
?>
     
