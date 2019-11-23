<?php
function abbreviate ($string) {
    $in = explode(" ", $string);
    $abbr = '';
    foreach ($in AS $key => $input) {
        preg_match("/^([A-Z]+)/", $input, $matches);
        $abbr = (isset($matches[0])) ? $abbr.$matches[0] : $abbr;
    }
    return $abbr;
}

echo abbreviate("Negara Kesatuan Republik Indonesia");
echo abbreviate("JAwa TIMur");
?>