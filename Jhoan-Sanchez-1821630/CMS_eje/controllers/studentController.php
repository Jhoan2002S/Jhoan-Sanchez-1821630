<?php

class studentController extends student{

    public function __construct()
    {
       Security :: verifyUser();
    }

    //Mostrar toda la informacion
    public function index(){                
        require_once 'views/layouts student/header.php';
        require_once 'views/student/index.php';
        require_once 'views/layouts student/footer.php';
    }

    // Mostar la vista del formulario
    public function create(){
        require_once 'views/layouts student/header.php';
        require_once 'views/student/create.php';
        require_once 'views/layouts student/footer.php';
    }

    //'Validaciones e interaccion model
    public function store(){
  
        
        $url_path = 'assets/imgs/' . $_FILES['file']['name'];
        move_uploaded_file($_FILES['file']['tmp_name'], $url_path);
        $_POST['url_image'] = $url_path;
        echo parent::register($_POST) ? header('location: ?controller=student') : 'Error en el registro';
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