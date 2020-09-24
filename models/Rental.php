<?php

/**
 * modelo de peliculas
 */
class Rental
{
    private $id;
    private $name;
    private $description;
    private $user_id;
    private $status_id;
    private $pdo;

    public function __construct()
    {
        try {
            $this->pdo = new Database;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    public function getAll()
    {
        try {
            $strSql = 'SELECT m.*, u.name as user, s.name as status FROM rentals m INNER JOIN users u INNER JOIN statuses s ON s.id=m.status_id AND u.id=m.user_id';
            $query = $this->pdo->select($strSql);
            return $query;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    
    public function newRental($data)
    {
        try {
            $this->pdo->insert('rentals', $data);
            return true;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }

    public function editRental($data)
    {
        try {
            $strWhere = 'id=' . $data['id'];
            $this->pdo->update('rentals', $data, $strWhere);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    public function deleteRental($data)
    {
        try {
            $strWhere = 'id=' . $data['id'];
            $this->pdo->delete('rentals', $strWhere);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    
    public function getById($id)
    {
        try {
            $strSql = "SELECT * FROM rentals WHERE id=:id";
            $array = ['id' => $id];
            $query = $this->pdo->select($strSql, $array);
            return $query;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getLastId()
    {
        try {
            $strSql = "SELECT MAX(id) as id FROM rentals";
            $query = $this->pdo->select($strSql);
            return $query;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }

    public function saveMovieRental($arrayMovies, $lastIdRental, $total)
    {
        try {
            foreach ($arrayMovies as $movie) {
                $data = [
                    'rental_id'      =>  $lastIdRental,
                    'movie_id'   =>  $movie["id"],
                    'price'   =>  $total
                ];

                $this->pdo->insert('movie_rental', $data);
            } 

            return true;
        } catch (PDOException $e) {
            return $e->getMessage();
        }    
    }

    
}
