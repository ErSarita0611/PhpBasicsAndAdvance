<?php 

// 1. if statement
// if Statement: This statement allows us to set a condition. On being TRUE, 
// the following block of code enclosed within the if clause will be executed.

$x = 12; 
  
if ($x > 0) { 
    echo "The number is positive"; 
} 
echo "<br>"; 



// 2. if…else Statement:
//  We understood that if a condition will hold i.e., 
// TRUE, then the block of code within if will be executed. 
// But what if the condition is not TRUE and we want to perform an action? 
// This is where else comes into play.
//  If a condition is TRUE then if block gets executed, otherwise else block gets executed.

$y = -12; 
  
if ($y > 0) { 
    echo "The number is positive"; 
} 
  
else{ 
    echo "The number is negative"; 
}
echo "<br>"; 

// 3. if…elseif…else Statement:
//      This allows us to use multiple if…else statements. We use this when there are multiple 
//      conditions of TRUE cases.

$z = "August"; 
  
if ($z == "January") { 
    echo "Happy Republic Day"; 
} 
  
elseif ($z == "August") { 
    echo "Happy Independence Day!!!"; 
} 
  
else{ 
    echo "Nothing to show"; 
}
echo "<br>"; 


// 4. switch Statement:
//    The “switch” performs in various cases i.e., it has various cases to which it matches the condition 
//    and appropriately executes a particular case block. It first evaluates an expression and then
//     compares with the values of each case.

// 1. The break statement is used to stop the automatic control flow into the next cases and exit from the switch case.
// 2. The default statement contains the code that would execute if none of the cases match.


$n = "February"; 
  
switch($n) { 
    case "January": 
        echo "Its January"; 
        break; 
    case "February": 
        echo "Its February"; 
        break; 
    case "March": 
        echo "Its March"; 
        break; 
    case "April": 
        echo "Its April"; 
        break; 
    case "May": 
        echo "Its May"; 
        break; 
    case "June": 
        echo "Its June"; 
        break; 
    case "July": 
        echo "Its July"; 
        break; 
    case "August": 
        echo "Its August"; 
        break; 
    case "September": 
        echo "Its September"; 
        break; 
    case "October": 
        echo "Its October"; 
        break; 
    case "November": 
        echo "Its November"; 
        break; 
    case "December": 
        echo "Its December"; 
        break; 
    default: 
        echo "Doesn't exist"; 
} 
?> 