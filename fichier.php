<?php
$array = array("$firstname"=>"","$firstnameErr" => "","$sujet"=>"","$sujetErr" => "","$isSuccess"=>false);
$email = "mikabernik@gmail.com";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $array["$firstname"]= verifyInput ($_POST["$firstname"]);
    $array["$sujet"]= verifyInput ($_POST["$sujet"]);
    $array["$isSuccess"] = true;
    if (empty($firstname)){
            $array["$firstnameErr"] = "svp votre nom !";
            $array["$isSuccess"]= false;
    };
    if (empty($sujet)){
        $array["$sujetErr"] = "sujet svp !";
        $array["$isSuccess"]= false;
};
    if($isSucces){
        mail($email,"$array["$sujet"]","le message et contenu du mail");
    }

    echo json_encode($array);
};  
function verifyInput ($var){
    $var = trim("$var");
    $var = htmlspecialchars("$var");
    return $var;
};
?>
