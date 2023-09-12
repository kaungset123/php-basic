<?php

$ary =[
    ["one"=>1,"two"=>2,"three"=>3,"four"=>4],
    ["one"=>1,"two"=>2,"three"=>3,"four"=>4],
    ["one"=>1,"two"=>2,"three"=>3,"four"=>

    ["one"=>1,"two"=>2,"three"=>3,"four"=>4],
    ["one"=>1,"two"=>2,"three"=>3,"four"=>4],
    ["one"=>1,"two"=>2,"three"=>3,"four"=>4]

    ]

];

$encode =json_encode($ary);
$decode =json_decode($encode,true);

echo $encode;

foreach($decode as  $value){
    foreach($value as $key => $data){
        if(!is_array($data)){
            echo "key is" . $key ."value is" . $data ."<hr>";
        }else{
            foreach($data as $ky => $item){
                echo "key is" . $ky . "value is" . $item . "<br>";
            }
            echo "<hr>";
        }
        
    }
}


//  echo "<pre>" . print_r($decode,true) . "</pre>";