<?php
/* PHP Loops
Often when you write code, you want the same code to run over and over again a certain number of times. So we use loops.

Loops are used to execute the same code again and again, as long as a certain condition is true.

In PHP, we have the following loop types:

while - loop through code as long as the condition is true
do...while - loop through code once, and then repeats the loop as long as the condition is true
for - loop through code a number of times
*/

/* while loop */
/*the code works like this

while (condition is true) {
  code;
}
EXAMPLE
*/

$a = 5;

while($a <= 10) {
  echo "The number is $a <br>";
  $a++;
}
/* The PHP for Loop */

/*The for loop is used when you know how many times script should run.*/

/*the code works like this

 for (init counter; test counter; increment counter) {
  code to be executed for each iteration; */
Example
  
php
for ($x = 0; $x <= 10; $x++) {
  echo "The number is: $x <br>";
}

/*The PHP foreach Loop*/
/*the code works like this*/
php
foreach ($array as $value) {
  code to be executed;
}

?>

