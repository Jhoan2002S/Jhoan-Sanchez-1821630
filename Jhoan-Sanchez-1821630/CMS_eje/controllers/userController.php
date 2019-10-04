<?php

class userController extends User{
    //Mostrar toda la informacion
    public function index(){                
        require_once 'views/layouts/header.php';
        require_once 'views/user/index.php';
        require_once 'views/layouts/footer.php';
    }

    // Mostar la vista del formulario
    public function create(){
        require_once 'views/layouts/header.php';
        require_once 'views/user/create.php';
        require_once 'views/layouts/footer.php';
    }

    //'Validaciones e interaccion model
    public function store(){
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
        echo parent::register($_POST) ? header('location: ?controller=index') : 'Error en el registro';
    }

    //consultar y luego mostrar la informacion en el formulario
    public function edit(){

    }

    //Validaciones e interaccion model
    public function update(){
        
    }


    //
    public function delete(){

    }

}