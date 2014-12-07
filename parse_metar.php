<?php

function add_returns ($text)
{
        $hrefFound = 0;
        //return substr($text, 0, 4);
        for ($i=0; $i<=(strlen($text) - 4); $i++)
        {
                //echo "test " . $i . "<br />";
                if (substr($text, $i, 2) == "=\"")
                {
                        //$hrefFound = $i;
                        //else {$hrefFound = 0;}
                        $text = substr($text, $i, strlen($text));
                        $i = 0;
                }
                if (substr($text, $i, 5) == ".mp3\"")
                {
                        //echo "found mp3 " . $i . " " . htmlentities(substr($text, 0,$i + 4)) . "<br />";
                        echo "<a href" . substr($text, 0,$i + 5) . ">" . htmlentities(substr($text, 2,$i + 2)) . "</a><br />";
                        //$text = substr($text, $i, strlen($text));
                        //$i = 0;
                }
        }
}

function getMetar ($fileLine)
{
}


$webAddress = $_POST["webAddress"];
$webContent = file_get_contents($webAddress);
//echo $_POST["webAddress"];
//echo $webAddress;
//echo "<br />";
//add_returns($webContent);
//echo "<br />";
//echo file_get_contents($webAddress);
//echo "<br />";
//$webHTML = get_url_contents($webAddress);
//echo $webHTML;

echo $webContent;

?>
