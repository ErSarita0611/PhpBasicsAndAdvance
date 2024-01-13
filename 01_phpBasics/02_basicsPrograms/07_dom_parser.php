<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="GoogleSearch.php" method="POST">
        <input type="text" name="search">
         
        <br><br>
         
        <button>
            Search
        </button>
    </form>


<?php

// Web Scraping in PHP Using Simple HTML DOM Parser

/*Web scraping can be done by targeting the selected DOM components and then processing 
or storing the text between that DOM element of a web page. */

// Extracting DOM
  
    $html = file_get_html(
        'http://www.google.com/search?q='.$_POST["search"]);

        // Displaying DOM
        foreach($html->find('div.kCrYT') as $elements) {
            echo $elements->plaintext;
            break;
        }

?>
    
</body>
</html>
