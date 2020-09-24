<?php

/**
 * Rental Class
 */
class Rental
{

	private $id;
	private $startDate;
	private $endDate;
    private $total;
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
            $strSql = "SELECT u.*, s.name as status, r.name as user FROM rentals u INNER JOIN statuses s ON s.id = u.status_id INNER JOIN users r ON r.id = u.user_id";
            $query = $this->pdo->select($strSql);
            return $query;
        } catch (PDOException $e) {
            die($e->getMessage());
        } 
    }

    public function newRental($data)
    {
        try {
            $data['status_id'] = 1;
            $this->pdo->insert('rentals', $data);
        } catch (PDOException $e) {
            die($e->getMessage());
        } 
    }

        public function getById($id)
    {
        try {
            $strSql = "SELECT * FROM rentals WHERE id = :id";
            $arrayData = ['id' => $id];
            $query = $this->pdo->select($strSql, $arrayData);
            return $query;
        } catch (PDOException $e) {
            die($e->getMessage());
        }    
    }

    public function editRental($data)
    {
        try {
            $strWhere = 'id = ' . $data['id'];
            $this->pdo->update('rentals', $data, $strWhere); 
        } catch (PDOException $e) {
            die($e->getMessage());
        } 
    }

    public function deleteRental($data)
    {
        try {
            $strWhere = 'id = ' . $data['id'];
            $this->pdo->delete('rentals', $strWhere); 
        } catch (PDOException $e) {
            die($e->getMessage());
        }    
    }
}