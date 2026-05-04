<?php
require_once __DIR__ . '/../Model/Usuario.php';

class UsuarioController
{
  public function actionIndex()
  {
    $modelUsuario = new Usuario();
    $usuarios = $modelUsuario->getUsuarios();
    include __DIR__ . '/../View/usuario/index.php';
  }
}

$controller = new UsuarioController();
$controller->actionIndex();
