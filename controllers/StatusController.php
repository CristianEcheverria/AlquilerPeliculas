<?php

/**
 * Class statusController
 */

require 'models/Status.php';
require 'models/TypeStatus.php';

class StatusController
{
    private $statusModel;

    public function __construct()
    {
        $this->statusModel = new Status;
        $this->typeStatus = new TypeStatus;
    }

    public function index()
    {
    	$statuses = $this->statusModel->getAll();
    	require 'views/layout.php';
    	require 'views/status/list.php';
    }

    public function add()
    {
        require 'views/layout.php';
        require 'views/status/new.php';
    }

    public function save()
    {
        $this->statusModel->newStatus($_REQUEST);
        header('Location: ?controller=status');
    }
    
    public function edit() 
    {
        if(isset($_REQUEST['id'])) {
            $id = $_REQUEST['id'];
            $status = $this->statusModel->getById($id);
            $typeStatuses = $this->typeStatus->getAll();
            require 'views/layout.php';
            require 'views/status/edit.php';
        } else {
            echo 'Error, Se requiere el id del usuario';
        }
    }

    public function update()
    {
        if(isset($_POST)) {
            $this->statusModel->editStatus($_POST);
            header('Location: ?controller=status');
        } else {
            echo 'Error intentando actualizar un usuario';            
        }
    }

    public function delete()
    {
        $this->statusModel->deleteStatus($_REQUEST);
        header('Location: ?controller=status');
    }
}
