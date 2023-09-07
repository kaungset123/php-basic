<?php
$p1 = 0;
$p2 = 0;
$d = 0;

for($i=0;$i<100;$i++){
    $player_1 = rand(1,6);
    $player_2 = rand(1,6);
    if($player_1 > $player_2){
        $p1++;
    }elseif($player_1 == $player_2){
        $d++;
    }else{
        $p2++;
    }
}

echo "Player_1 win {$p1} times.";
echo "<br>";
echo "Player_2 win {$p2} times.";
echo "<br>";
echo "Draw {$d} times.";
echo "<br>";

if($p1>$p2){
    echo "Player1 won this game!";
}elseif($p1<$p2){
    echo "Player2 won this game!";
}else{
    echo "They draw!";
}