<?php

/**
 * Class RolController
 */

require 'models/Rol.php';
require 'models/Status.php';

class RolController
{
    private $rolModel;
    private $status;

    public function __construct()
    {
        $this->rolModel = new Rol;
        $this->status = new Status;
    }

    public function index()
    {
    	$roles = $this->rolModel->getAll();
    	require 'views/layout.php';
    	require 'views/rol/list.php';
    }

    public function add()
    {
        require 'views/layout.php';
        require 'views/rol/new.php';
    }

    public function save()
    {
        $this->rolModel->newRol($_REQUEST);
        header('Location: ?controller=rol');
    }
    
    public function edit() 
    {
        if(isset($_REQUEST['id'])) {
            $id = $_REQUEST['id'];
            $roles = $this->rolModel->getById($id);
            $statuses = $this->status->getAll();
            require 'views/layout.php';
            require 'views/rol/edit.php';
        } else {
            echo 'Error, Se requiere el id del usuario';
        }
    }

    public function update()
    {
        if(isset($_POST)) {
            $this->rolModel->editRol($_POST);
            header('Location: ?controller=rol');
        } else {
            echo 'Error intentando actualizar un usuario';            
        }
    }

    public function delete()
    {
        $this->rolModel->deleteRol($_REQUEST);
        header('Location: ?controller=rol');
    }
}