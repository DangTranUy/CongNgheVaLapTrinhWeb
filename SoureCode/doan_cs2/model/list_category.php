<?php

function categories()
{
    try {
        include("../db.php");
        $query = 'SELECT * FROM categories';
        $statement = $db->prepare($query);
        $statement->execute();
        $list_categories = $statement->fetchAll();
        $statement->closeCursor();
        return $list_categories;
    } catch (\Throwable $th) {
        //throw $th;
    }
}

function insert_category($name_category, $img_category, $danhmuclon)
{
    try {
        include '../db.php';
        $query = "INSERT INTO categories(name_category, category_img, menumain_id ) VALUES ('$name_category', '$img_category', '$danhmuclon')";
        $statement = $db->prepare($query);
        $statement->execute();
        $statement->closeCursor();
    } catch (\Throwable $th) {
        // throw $th;
        echo $th;
    }
}

function delete_category($category_id)
{
    try {
        include '../db.php';
        $query = "DELETE from categories where category_id = $category_id";
        $statement = $db->prepare($query);
        $statement->execute();
        $statement->closeCursor();
    } catch (\Throwable $th) {
        // throw $th;
        echo $th;
    }
}
