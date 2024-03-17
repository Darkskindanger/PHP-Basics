<?php

// $foods=['chicken','beef','eggs','oranges'];

// for loops:

  // for($i=0;$i<5;$i++)
  // {echo "Hi, this is round $i,";};

  // When limit is unknown, i.e for every value inside of an array

  // for($i=0;$i<count($foods);$i++){echo "Not sure when the limit is here, I think we're on round $i,";};

  // Also can use a forEach loop

  // foreach($foods as $food){ echo "Once again, not sure when the limit is here, I think i want $food" . '<br/>';}

  // Usage in DOM:
  $games = [
  ['title'=>'Halo : Combat Evolved','age'=>'23','author'=>'Bungie'],
  ['title'=>'Halo 2','age'=>'20','author'=>'Bungie'],
  ['title'=>'Halo 3','age'=>'17','author'=>'Bungie']
  ];

  foreach($games as $game){
    echo $game['title'] .'-'. $game['age'] .'-'. $game['author'];
    echo '<br/>';
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Loops</title>
</head>
<body>
  <div>
  <h2>Game titles (for loop): 
  <?php for($i=0;$i<count($games);$i++){echo '</br>'.$games[$i]['title'];} ?>
  </h2>
  <h4>Game age (for loop): <?php for($i=0;$i<count($games);$i++){echo '</br>'. $games[$i]['age'];} ?></h4>
  <h4>Game author (for each loop):<?php foreach($games as $game){echo '</br>'. $game['author'];} ?></h4>
</div>
</body>
</html>