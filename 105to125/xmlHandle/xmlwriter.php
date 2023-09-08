<?php

$arys = array(
    "name" => "kaungSettNaing",
    "age" => "16",
    "address" => "South Dagon",
    "occupation" => "Developer"
);

$str = "";
$str.="<coder>";
foreach($arys as $key => $value){
    $str.="<".$key.">";
    $str.=$value;
    $str.="</".$key.">";
}
$str.="</coder>";

echo $str;

$control = fopen("bio.xml",'w'); // writing xml data to bio.xml file
fprintf($control,"%s",$str);