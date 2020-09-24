<?php
require 'models/Movie.php';
require 'models/Status.php';
require 'models/User.php';
require 'models/Category.php';
/**
 * 
 */
class MovieController
{
    private $model;
    private $users;
    private $status;
    private $category;

    public function __construct()
    {
        try{
            $this->model = new Movie;
            $this->users = new User;
            $this->status = new Status;
            $this->category = new Category;
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }
    
    public function index(){
        require 'views/layout.php';
        $movies=$this->model->getAll();
        require 'views/movie/list.php';
    }

    public function new()
    {
        $users = $this->users->getAll();
        $categories = $this->category->getAll();
        require 'views/layout.php';
        require 'views/movie/new.php';
    }
    
    public function save()
    {
        //Organizar en un array los datos de la tabla movie
        $dataMovie = [
            'name'          => $_POST['name'],
            'description'   => $_POST['description'],
            'user_id'       => $_POST['user_id'],
            'status_id'     => 1
        ];

        //Array de categorias
        $arrayCategories = isset($_POST['categories']) ? $_POST['categories'] : [];        

        if(!empty($arrayCategories)) {
            //Inserción de la Tabla Movie
            $respMovie = $this->model->newMovie($dataMovie);

            //Obtener el ultimo ID registrado
            $lastIdMovie = $this->model->getLastId();
            //Inserción de la Tabla category_movie
            $respCategoryMovie = $this->model->saveCategoryMovie($arrayCategories, $lastIdMovie[0]->id);

        } else {
            $respMovie          = false;
            $respCategoryMovie  = false;            
        }

        $arrayResp = [];

        if($respMovie == true && $respCategoryMovie == true) {
            $arrayResp = [
                'success' => true,
                'message' => "Pelicula Creada"  
            ];
        } else {
            $arrayResp = [
                'error' => true,
                'message' => "Error Creando la Pelicula"  
            ];
        }

        echo json_encode($arrayResp);
        return;

    }
    
    public function edit()
    {
        if(isset($_REQUEST['id'])){
            $id=$_REQUEST['id'];

            $data=$this->model->getById($id);
            $users=$this->users->getAll();
            $statuses=$this->status->getAll();
            $categories = $this->category->getAll();            
            require 'views/layout.php';
            require 'views/movie/edit.php';
        }else{
            echo "Error, no se realizo.";
        }
    }

    public function update()
    {       
        $respMovie = $this->model->editMovie($_POST);
        header('Location: ?controller=movie');
    }
    public function delete()
    {
        $this->model->deleteMovie($_REQUEST);
        header('Location: ?controller=movie');
    }

}

?>