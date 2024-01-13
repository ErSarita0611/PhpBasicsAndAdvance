<?php

// PHP supports four types of looping techniques;

// 1. for loop
// 2. while loop
// 3. do-while loop
// 4. foreach loop

// 1. for loop:
//  This type of loops is used when the user knows in advance, 
// how many times the block needs to execute. That is, the number of iterations is known beforehand. 
// These type of loops are also known as entry-controlled loops. 
// There are three main parameters to the code,
//  namely the initialization, the test condition and the counter.

for ($num=1; $num <= 10 ; $num+=2) { 
    echo "$num \n";
}
echo "<br>";

// 2. while loop:
//      The while loop is also an entry control loop like for loops i.e., 
//      it first checks the condition at the start of the loop and if its true then it enters the loop and
//       executes the block of statements, and goes on executing it as long as the condition holds true.

$num =2;
while ($num < 12) {
    $num +=2;
    echo $num, "\n";
}
echo "<br>";


// 3. do-while loop:
//      This is an exit control loop which means that it first enters the loop, executes the statements, 
//      and then checks the condition. Therefore, a statement is executed at least once on using the
//       do…while loop. After executing once, the program is executed as long as the condition holds true.

$num1 = 2;
do {
    $num1 += 2;
    echo $num1, "\n";
} while ($num1 < 20);
echo "<br>";

// PHP code to illustrate the difference of two loops 

$a = 2;
 
while ($a != 2) {
    echo "in case of while the code is skipped";
    echo $a, "\n";
}
do {

    $a++;
    echo "The do....while code is executed atleast once";

} while ($a == 10);
echo "<br>";


// 4. foreach loop:
//      This loop is used to iterate over arrays. For every counter of loop, an array element
//       is assigned and the next counter is shifted to the next element.

$arr = array (10, 20, 30, 40, 50, 60);
foreach ($arr as $value) {
    echo "$value \n";
}

$arr = array("sarita", "sandhya", "riya");
foreach ($arr as $value) {
    echo "$value \n";
}
?>