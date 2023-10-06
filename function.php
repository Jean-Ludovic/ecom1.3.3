<?php
function nameLengthIsValid($nameToValid){
$length=strlen($nameToValid);
$response=[
    'isValid'=>true,
    'msg'=>'',
];
if($length <2){
    $response=[
        'isValid'=>False,
    'msg'=>'Nom trop court',
    ];

}elseif($length>10){
    $responses=[
    'isValid'=>false,
    'msg'=>'Nom trop long',
    ];
}
return $responses;
}
function addSalt($nameToSalt){
    $salt=' You succeed ! ';
    $saltedName=$salt.$nameToSalt.$salt;
    return $saltedName;
}
 function encodeName($saltedName){
    $encodeName= sha1($saltedName);
    return $encodeName;
 }
?>