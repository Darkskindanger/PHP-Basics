<?php
// Include - Imports code from other PHP files
include('inc-req-suppFile.php');
echo "The above was imported from 'inc-req-suppFile' </br>";
// When an error is encountered, include() continues the code below itself

// Require
require('inc-req-suppFile.php');
echo "The above was also imported from 'inc-req-suppFile'"
// When an error is encountered, include() WONT continue the code below itself

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
</body>
</html>