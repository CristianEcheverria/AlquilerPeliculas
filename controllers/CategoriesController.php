<?php

/**
 * Class CategoriesController
 */

require 'models/Category.php';
require 'models/Status.php';

class CategoriesController
{
    private $categoriesModel;

    public function __construct()
    {
        $this->categoriesModel = new Category;
        $this->status = new Status;
    }

    public function index()
    {
    	$categories = $this->categoriesModel->getAll();
    	require 'views/layout.php';
    	require 'views/categories/list.php';
    }

    public function add()
    {
        require 'views/layout.php';
        require 'views/categories/new.php';
    }

    public function save()
    {
        $this->categoriesModel->newCategories($_REQUEST);
        header('Location: ?controller=categories');
    }

    public function edit() 
    {
        if(isset($_REQUEST['id'])) {
            $id = $_REQUEST['id'];
            $statuses = $this->status->getCustomStatuses('usuario');
            $categories = $this->categoriesModel->getById($id);
            require 'views/layout.php';
            require 'views/categories/edit.php';
        } else {
            echo 'Error, Se requiere el id del usuario';
        }
    }

    public function update()
    {
        if(isset($_POST)) {
            $this->categoriesModel->editcategories($_POST);
            header('Location: ?controller=categories');
        } else {
            echo 'Error intentando actualizar un usuario';            
        }
    }

    public function delete()
    {
        $this->categoriesModel->deletecategories($_REQUEST);
        header('Location: ?controller=categories');
    }
}