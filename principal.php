<?php
$usuario = isset($_POST['usuario']) ? $_POST['usuario'] : null;
$pwd  = isset($_POST['pwd']) ? $_POST['pwd'] : null;

$ListaUsuario = [
    [
        'usuario' => 'administrador',
        'rol' => '1',
        'pwd' => '123',
    ],
    [
        'usuario' => 'editor',
        'rol' => '2',
        'pwd' => '123',
    ],
    [
        'usuario' => 'usuario',
        'rol' => '3',
        'pwd' => '123',
    ]
];

foreach ($ListaUsuario as $lista) {
    if ($usuario == $lista['usuario'] && $pwd == $lista['pwd']) {
        if ($lista['rol'] == 1) {
            include_once('nav1.php');  // Acción para el rol 1 (administrador)
        } else if ($lista['rol'] == 2) {
            include_once('nav2.php');  // Acción para el rol 2 (editor)
        } else if ($lista['rol'] == 3) {
            include_once('nav3.php');  // Acción para el rol 3 (usuario)
        }
        break;
    }
}
