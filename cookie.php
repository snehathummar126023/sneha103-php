<?php
//creating cookie
//setcookie("user","sneha",time() + 300);

//edit the cookie
//setcookie("user","sneha",time() + 300);

//deleting the cookie
echo $_COOKIE["user"];
setcookie("user","sneha",time() - 300);

//enctypt the cookie
//string + letters/number/symbols = enccstring
//sneha + encryptionmothod = %sneh@**


//evaluate / careating

function enc_cookie($data)
{
    $data = $data  . "3554%5";
    setcookie("user","$data",time () +300 );
    echo $_COOKIE['user'];

}

enc_cookie("sneha");



?>