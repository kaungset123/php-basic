<?php
// here_doc (<<<ST....ST;) is used for writing html code in simple and effective way
// ST can be any alpharbet in capitalletter 

echo "<h1>Welcome to my channel</h1>";
echo "<p>This will be a nice place for you!</p>";
echo "<p>I'll teach you all the thing you need to know</p>";
echo "<i>Isn't it <b>Great !</b></i>";

$doc = <<<ST
<h1>Welcome to my channel</h1>
<p>This will be a nice place for you!</p>
<p>I'll teach you all the thing you need to know</p>
<i>Isn't it <b>Great !</b></i>
ST;
echo $doc;

