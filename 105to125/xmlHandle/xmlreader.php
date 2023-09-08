<?php
 
$xml = <<<START
<coder>

    <name>KaungSettNaing</name>
    <age>16</age>
    <address>South Dagon</address>
    <occupation>Developer</occupation>

</coder>
START;



## There has two mehtods to call XML data
## simplexml_load_file()
## simplexml_load_string()


## simplexml_load_string() 
$result = simplexml_load_string($xml);
print_r($result);
echo "<br><br>";


## simplexml_load_file()
$data = simplexml_load_file("data.xml");
foreach($data as $key => $value){  // showing the data with foreach loop
    echo "{$key} => {$value}    ";
}


