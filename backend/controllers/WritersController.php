<?php
session_start();
// require_once("../../database/Connect.php");
require_once("../models/Writers.php");

// $writers = new Writers();

// $postResult = filter_input_array(INPUT_POST);

// if(isset($_POST['register'])){

//     $writers->setWriterName($postResult['writerName']);
//     $writers->create($writers);

//     $_SESSION['msg'] = "<p id='book_success'>Escritor cadastrado com sucesso</p>";
//     header("Location: ../../frontend/page/writerForm?page=1");
//     die();
// } 
// elseif (isset($_POST['edit'])) {
//     $writers->setId($postResult['writerEditId']);
//     $writers->setWriterName($postResult['editWriter']);
//     $writers->update($writers);

//     $_SESSION['msg'] = "<p id='book_success'>Escritor editado com sucesso</p>";
//     header("Location: ../../frontend/page/writerForm?page=1");
//     die();
// }
// elseif (isset($_POST['delete'])) {
//     $writers->setId($postResult['writerNameDel']);
//     $writers->delete($writers);

//     $_SESSION['msg'] = "<p id='book_success'>Escritor deletado com sucesso</p>";
//     header("Location: ../../frontend/page/writerForm?page=1");
//     die();
// }

class WritersController {
    protected $post;

    public function setPost($post){
        $this->post = $post;
    }
    public function getPost(){
        return $this->post;
    }
    //Metodos
    public function register(){
        $writers = new Writers();
        $postResult = $this->getPost();
        $writers->setWriterName($postResult['writerName']);
        $writers->create($writers);

        $_SESSION['msg'] = "<p id='book_success'>Escritor cadastrado com sucesso</p>";
        header("Location: ../../frontend/page/writerForm?page=1");
        die();
    }

    public function edit(){
        $writers = new Writers;
        $postResult = $this->getPost();
        $writers->setId($postResult['writerEditId']);
        $writers->setWriterName($postResult['editWriter']);
        $writers->update($writers);
    
        $_SESSION['msg'] = "<p id='book_success'>Escritor editado com sucesso</p>";
        header("Location: ../../frontend/page/writerForm?page=1");
        die();
    }
    public function delete(){
        $writers = new Writers;
        $postResult = $this->getPost();
        $writers->setId($postResult['writerNameDel']);
        $writers->delete($writers);
    
        $_SESSION['msg'] = "<p id='book_success'>Escritor deletado com sucesso</p>";
        header("Location: ../../frontend/page/writerForm?page=1");
        die();
    }
}