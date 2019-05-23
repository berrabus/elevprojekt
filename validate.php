<?php

function test($in)
{
if(isset($in) &&  ( (strlen(strip_tags($in)) > 3) && ( strlen(strip_tags($in)) <= 15) ))
{
    // Kollar om det finns HTML-taggar
    if ( strlen($in) != strlen(strip_tags($in)) ) {
         return "HTML taggar hittades";
    }
    // Matchar mot ett regulgärt uttryck
    if (preg_match("/[\s \\ \/]/",$in)) {
        // Om det matchar, hittas
        return "Förbjudna tecken hitades";
    }
}
else {
      return "Antal tecken ".strlen($in). " vilket inte är tillåtet";
}
return "ok";
}
?>
