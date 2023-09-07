<?php

// setcookie(name,value,expire,path,domain,secure)

function mySetCookie(){
    setcookie('ksn','kaungsetnaing',time() + (3600 * 24),'/','',0);
}

function myGetCookie(){
    if(isset($_COOKIE['ksn'])){
        echo  $_COOKIE['ksn'];
    }else{
        echo "There is no match cookie result.";
    }
    
}

function myDeleteCookie(){
    setcookie('ksn','',time()-3600,'/','',0);
}

// mySetCookie();
myGetCookie();
// myDeleteCookie();