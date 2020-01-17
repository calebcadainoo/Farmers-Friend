<?php
	$host = "localhost";
	$user = "root";
	$password = "";
	$db = "omni-ai";
	$con = new mysqli($host,$user,$password,$db) or die($con->error);

    if (!function_exists('replaceAll')) {
        function replaceAll($text) { 
            // $text = strtolower(htmlentities($text)); 
            $text = htmlentities($text); 
            $text = str_replace(get_html_translation_table(), "&#39;", $text);
            $text = str_replace("'", "&#39;", $text);
            $text = preg_replace("/[-]+/i", "-", $text);
            return $text;
        }

    }
?> 