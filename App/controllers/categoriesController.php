<?php

class CategoriesController
{

    public function showMenu()
    {

        require_once "./App/models/categoriesModel.php";
        $categories = new CategoriesModel();
        require_once "./App/views/categories/menu.php";
    }
}