<?php
// ====== CABECERAS ====== 
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

//====== LÓGICA DEL API ======
$input = json_decode(file_get_contents("php://input"), true);
if (!$input['nombre']) {
    echo json_encode(["estado" => "error", "mensaje" => "Falta el nombre."]);
    exit;
}
if (!$input['correo']) {
    echo json_encode(["estado" => "error", "mensaje" => "Falta el correo electrónico."]);
    exit;
}
if (!$input['razonsocial']) {
    echo json_encode(["estado" => "error", "mensaje" => "Falta la razón social."]);
    exit;
}
if (!$input['telefono']) {
    echo json_encode(["estado" => "error", "mensaje" => "Falta el teléfono."]);
    exit;
}
if (!$input['tipoproducto']) {
    echo json_encode(["estado" => "error", "mensaje" => "Falta el tipo de producto."]);
    exit;
}
if (!filter_var($input['correo'], FILTER_VALIDATE_EMAIL)) {
    echo json_encode(["estado" => "error", "mensaje" => "Correo inválido. "]);
    exit;
}
echo json_encode([
    "estado" => "ok",
    "mensaje" => "Usuario registrado correctamente.",
    "usuario" => $input
]);
?>