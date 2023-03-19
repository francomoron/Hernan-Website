<?php
require_once "./App/config/database.php";

class CategoriesModel
{

    public $db;

    public function __construct()
    {
        $this->db = db::conect();

    }
    public function getParentCategories()
    {
        $query = 'SELECT * FROM categories WHERE parentCategory IS NULL ORDER BY sort_order';
        $response = $this->db->query($query);
        return $response;
    }

    public function getChildCategories($parentId)
    {
        $query = "SELECT * FROM categories WHERE parentCategory =  $parentId  ORDER BY sort_order ";
        $response = $this->db->query($query);
        return $response;
    }

}