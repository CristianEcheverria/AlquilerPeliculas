<?php

/**
 * Class RentalController
 */

require 'models/Rental.php';
require 'models/User.php';
require 'models/Status.php';

class RentalController
{
    private $rentalModel;
    private $user;
    private $status;

    public function __construct()
    {
        $this->rentalModel = new Rental;
        $this->user = new User;
        $this->status = new Status;
    }

    public function index()
    {
    	$rentals = $this->rentalModel->getAll();
    	require 'views/layout.php';
    	require 'views/rental/list.php';
    }

    public function add()
    {
        require 'views/layout.php';
        require 'views/rental/new.php';
    }

    public function save()
    {
        $this->rentalModel->newRental($_REQUEST);
        header('Location: ?controller=rental');
    }

    public function edit() 
    {
        if(isset($_REQUEST['id'])) {
            $id = $_REQUEST['id'];
            $rental = $this->rentalModel->getById($id);
            $user = $this->user->getAll();
            $statuses = $this->status->getCustomStatuses('usuario');
            require 'views/layout.php';
            require 'views/rental/edit.php';
        } else {
            echo 'Error, Se requiere el id del usuario';
        }
    }

    public function update()
    {
        if(isset($_POST)) {
            $this->rentalModel->editRental($_POST);
            header('Location: ?controller=rental');
        } else {
            echo 'Error intentando actualizar un usuario';            
        }
    }

    public function delete()
    {
        $this->rentalModel->deleteRental($_REQUEST);
        header('Location: ?controller=rental');
    }
}