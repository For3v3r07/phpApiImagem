<?php
require_once 'model/upload.php';
$arquivo = $_FILES['arquivo'];
$up = new upload($arquivo,'assets/img');
$result = $up->salvarImagem();
if($result){
    http_response_code(200);
    $retorno["result"] = true;
    $retorno["url _arquivo"] = $result;
}
else{
    http_response_code(404);
    $retorno["result"] = false;
    $retorno["url _arquivo"] = '';
}
echo json_encode($retorno);