
<?php


/**
 * 
 */

function redirect_url($url_name)
{
    header("Location: $url_name");//redirect u to another page
    exit;//means do the code over the exit then go out
}
redirect_url("Continue.php");
ob_start();//use it if the output_buffer to start
ob_end_flush();// after the buffering is over delete the code so u take another one 
?>