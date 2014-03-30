<?php

function json_decode_homemade($json) 
{  
    // Author: walidator.info 2009 
    $comment = false; 
    $out = '$x='; 
    
    for ($i=0; $i<strlen($json); $i++) 
    { 
        if (!$comment) 
        { 
            if ($json[$i] == '{')        $out .= ' array('; 
            else if ($json[$i] == '}')    $out .= ')'; 
            else if ($json[$i] == ':')    $out .= '=>'; 
            else                         $out .= $json[$i];            
        } 
        else $out .= $json[$i]; 
        if ($json[$i] == '"')    $comment = !$comment; 
    } 
    eval($out . ';'); 
    return $x; 
}  
 
  function get_dispo_tapisserie() {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //Set curl to return the data instead of printing it to the browser.
    curl_setopt($ch, CURLOPT_URL, "http://api.la-tapisserie.net/v1/open");
    $data = curl_exec($ch);
    $t = json_decode_homemade($data);
    curl_close($ch);

    if ($t['open']) {
      return "http://api.la-tapisserie.net/rideau/1.jpg";
    }else {
      return "http://api.la-tapisserie.net/rideau/6.jpg";
    }
  }
?>