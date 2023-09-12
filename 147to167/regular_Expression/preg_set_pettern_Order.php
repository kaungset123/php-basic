<?php

// preg_match_all(pattern,subject,matches,flags)
// pattern = reg pattern to search for
// subject = string or paragraph to match
// matches = array where all match are assigned
// flags = define result order


$str ="we start learning php at 7:30 am and finish learning at 5:30 pm";

preg_match_all("/(\d+:+\d+)\s*(am|pm)/",$str,$matches,PREG_SET_ORDER);
echo "<pre>" . print_r($matches,true) . "</pre>";
echo "<hr>";
preg_match_all("/(\d+:+\d+)\s*(am|pm)/",$str,$matches,PREG_PATTERN_ORDER);
echo "<pre>" . print_r($matches,true) . "</pre>";