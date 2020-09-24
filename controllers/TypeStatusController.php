<?php

/**
 * summary
 */

require 'models/TypeStatus.php';

class TypeStatusController
{
    /**
     * summary
     */

    private $typeStatusModel;

    public function __construct()
    {
         $this->typeStatusModel = new TypeStatus;
    }

    public function index()
    {
        $typeStatus = $this->typeStatusModel->getAll();
    	require 'views/layout.php';
        require 'views/typeStatus/list.php';
    }

     public function add()
    {
        require 'views/layout.php';
        require 'views/typeStatus/new.php';
    }

    public function save()
    {
        $this->typeStatusModel->newTypeStatus($_REQUEST);
        header('Location: ?controller=typestatus');
    }
    
    public function edit() 
    {
        if(isset($_REQUEST['id'])) {
            $id = $_REQUEST['id'];
            $typeStatus = $this->typeStatusModel->getById($id);
            require 'views/layout.php';
            require 'views/typeStatus/edit.php';
        } else {
            echo 'Error, Se requiere el id del tipo de estado';
        }
    }

    public function update()
    {
        if(isset($_POST)) {
            $this->typeStatusModel->edittypeStatus($_POST);
            header('Location: ?controller=typeStatus');
        } else {
            echo 'Error intentando actualizar un tipo de estado';            
        }
    }

    public function delete()
    {
        $this->typeStatusModel->deletetypeStatus($_REQUEST);
        header('Location: ?controller=typeStatus');
    }
}