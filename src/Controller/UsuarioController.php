<?php

class UsuarioController{
    
    public function inserir(){
        
        if(isset($_POST['nome'])){

            $usuarioModel = new UsuarioModel();

            $usuarioModel->setNome($_POST['nome']);
            $usuarioModel->setUsername($_POST['username']);
            $usuarioModel->setEmail($_POST['email']);
            $usuarioModel->setSenha($_POST['senha']);
            $usuarioModel->setAdmin($_POST['admin']);
            var_dump($usuarioModel->insert());
            if($usuarioModel->insert()){
                $msg = "ok";
            } else{
                $msg = "problem";
            }
        }  
        include 'View/Local/RegistroUsuario.php';
    }
    
    public function deletar(){
        
    }
    
    public function listar(){
        
    }
    
    public function atualizar(){
        
    }
}
