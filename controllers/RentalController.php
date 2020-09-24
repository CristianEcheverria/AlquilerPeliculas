<?php
require 'models/Rental.php';
require 'models/Status.php';
require 'models/User.php';
require 'models/Category.php';
require 'models/Movie.php';
/**
 * 
 */
class RentalController
{
    private $model;
    private $users;
    private $status;
    private $category;
    private $movie;

    public function __construct()
    {
        try{
            $this->model = new Rental;
            $this->users = new User;
            $this->status = new Status;
            $this->category = new Category;
            $this->movie = new Movie;
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }
    
    public function index(){
        require 'views/layout.php';
        $rentals=$this->model->getAll();
        require 'views/rental/list.php';
    }

    public function new()
    {
        $users = $this->users->getAll();
        $statuses = $this->status->getAll();
        $movies = $this->movie->getAll();
        require 'views/layout.php';
        require 'views/rental/new.php';
    }
    
    public function save()
    {
        //Organizar en un array los datos de la tabla rental
        $dataRental = [
            'start_date'          => $_POST['start_date'],
            'end_date'   => $_POST['end_date'],
            'total'       => $_POST['total'],
            'user_id'       => $_POST['user_id'],
            'status_id'     => 1
        ];
        $total=$_POST['total'];

        //Array de categorias
        $arrayMovies = isset($_POST['movies']) ? $_POST['movies'] : [];        
        if(!empty($arrayMovies)) {
            //Inserción de la Tabla Rental
            $respRental = $this->model->newRental($dataRental);

            //Obtener el ultimo ID registrado
            $lastIdRental = $this->model->getLastId();
            //Inserción de la Tabla category_rental
            $respMovieRental = $this->model->saveMovieRental($arrayMovies, $lastIdRental[0]->id, $total);

        } else {
            $respRental          = false;
            $respMovieRental  = false;            
        }

        $arrayResp = [];

        if($respRental == true && $respMovieRental == true) {
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
            require 'views/rental/edit.php';
        }else{
            echo "Error, no se realizo.";
        }
    }

    public function update()
    {       
        $respRental = $this->model->editRental($_POST);
        header('Location: ?controller=rental');
    }
    public function delete()
    {
        $this->model->deleteRental($_REQUEST);
        header('Location: ?controller=rental');
    }

}

?>