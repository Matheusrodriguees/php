<?php
require_once("../model/CadastroLivro.php");
class cadastroController {
    
    private $cadastro;
    
    public function __construct() {
        $this->cadastro = new Cadastro();
        $this->incluir();
    } 
    private function incluir() {
        $this->cadastro->setNome($_POST['nome']);
        $this->cadastro->setAutor($_POST['autor']);
        $this->cadastro->setQuantidade($_POST['quantidade']);
        $this->cadastro->setPreco($_POST['preco']);
        $this->cadastro->setData(date('Y-m-d',strtotime($_POST['data'])));
    
    #Chamada método incluir dentro classe cadastro arquivo cadastroLivro.php
        $result = $this->cadastro->incluir();
        if($result>=1) {
            echo "<script>alert('Registro incluído com sucesso!');document.location='../view/Cadastro.php'</script>";
        } else {
            echo "<script>alert('Erro ao gravar registro!, verifique se o livro não está duplicado');history.back()</script>";
        }
    }
}
new cadastroController();