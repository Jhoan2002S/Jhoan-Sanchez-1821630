<?php

class publicationController extends publication{
    //Mostrar toda la informacion
    public function index(){                
        require_once 'views/layouts/header.php';
        require_once 'views/publication/index.php';
        require_once 'views/layouts/footer.php';
    }

    // Mostar la vista del formulario
    public function create(){
        require_once 'views/layouts/header.php';
        require_once 'views/publication/create.php';
        require_once 'views/layouts/footer.php';
    }

    //'Validaciones e interaccion model
    public function store(){
        echo parent::register($_POST) ? header('location: ?controller=publication') : 'Error en el registro';
    }

    //consultar y luego mostrar la informacion en el formulario
    public function edit(){
        $user = parent::find($_GET['id']);
        require_once 'views/layouts/header.php';
        require_once 'views/user/edit.php';
        require_once 'views/layouts/footer.php';
    }

    //Validaciones e interaccion model
    public function update(){
        var_dump(parent::update_register($_POST) ? header('location: ?controller=publication'): 'Error al actualizar');
    }


    //
    public function delete(){
         parent::delete_register($_GET) ? header('location: ?controller=publication') : 'Error al eliminar';;
    }

}