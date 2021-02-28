<?php
    if ($_SERVER['SERVER_NAME'] == 'localhost') {
        $host = "localhost";
        $user = "root";
        $password = "";
        $db = "omni-ai";
    } else {
        $host = "sql2.freemysqlhosting.net";
        $user = "sql2395722";
        $password = "rN3!xS6*";
        $db = "sql2395722";
        // $con = mysqli_connect($host, $user, $password, $db);
    }
    
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