<?php
include_once 'conectar.php';

class Usuario {
    private $usuario;
    private $senha;
    private $conexao;

    // Getter para $usuario
    public function getUsuario() {
        return $this->usuario;
    }

    // Setter para $usuario
    public function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    // Getter para $senha
    public function getSenha() {
        return $this->senha;
    }

    // Setter para $senha
    public function setSenha($senha) {
        $this->senha = $senha;
    }

    function logar(){
        try{
            $this->conexao = new Conectar();
            $sql = $this->conexao->prepare("SELECT * FROM usuario WHERE usuario = ? AND senha = ?");
            @$sql->bindParam(1,$this->getUsuario(), PDO::PARAM_STR);
            @$sql->bindParam(2,$this->getSenha(), PDO::PARAM_STR);
            $sql->execute();
            return $sql->fetchAll();
            $this->conexao = null;
        }
        catch(PDOException $exp){
            echo "Erro ao consultar";
        }
    }
}

?>