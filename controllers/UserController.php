<?php

/**
 * Class UserController
 */

require 'models/User.php';
require 'models/Status.php';
require 'models/Rol.php';


class UserController
{
    private $userModel;
    private $status;
    private $rol;

    public function __construct()
    {
        $this->userModel = new User;
        $this->status = new Status;
        $this->rol = new Rol;
    }

    public function index()
    {
    	$users = $this->userModel->getAll();
    	require 'views/layout.php';
    	require 'views/user/list.php';
    }

    public function add()
    {
        require 'views/layout.php';
        require 'views/user/new.php';
    }

    public function save()
    {
        $this->userModel->newUser($_REQUEST);
        header('Location: ?controller=user');
    }

    public function edit() 
    {
        if(isset($_REQUEST['id'])) {
            $id = $_REQUEST['id'];
            $user = $this->userModel->getById($id);
            $statuses = $this->status->getCustomStatuses('usuario');
            $roles = $this->rol->getAll();
            require 'views/layout.php';
            require 'views/user/edit.php';
            require 'views/user/editModal.php';
        } else {
            echo 'Error, Se requiere el id del usuario';
        }
    }

    public function update()
    {
        if(isset($_POST)) {
            $this->userModel->editUser($_POST);
            header('Location: ?controller=user');
        } else {
            echo 'Error intentando actualizar un usuario';            
        }
    }

    public function delete()
    {
        $this->userModel->deleteUser($_REQUEST);
        header('Location: ?controller=user');
    }
}

