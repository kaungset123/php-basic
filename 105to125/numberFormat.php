<?

// number_format(value , behind point , replace point , replace comma)

$num = 10000000000;

echo number_format($num) . "<br>";
echo number_format($num,"4")."<br>";
echo number_format($num,"2",",","-");