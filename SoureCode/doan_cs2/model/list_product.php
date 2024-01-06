<?php

function products()
{
    try {
        include("../db.php");
        $query = 'SELECT * FROM products';
        $statement = $db->prepare($query);
        $statement->execute();
        $list_product = $statement->fetchAll();
        $statement->closeCursor();
        return $list_product;
    } catch (\Throwable $th) {
        //throw $th;
    }
}

function productsSortByCharacterAsc()
{
    try {
        include("../db.php");
        $query = 'SELECT * FROM products ORDER BY product_name ASC';
        $statement = $db->prepare($query);
        $statement->execute();
        $list_product = $statement->fetchAll();
        $statement->closeCursor();
        return $list_product;
    } catch (\Throwable $th) {
        //throw $th;
    }
}

function productsSortByCharacterDesc()
{
    try {
        include("../db.php");

        $query = 'SELECT * FROM products ORDER BY product_name DESC';
        $statement = $db->prepare($query);
        $statement->execute();
        $list_product = $statement->fetchAll();
        $statement->closeCursor();

        return $list_product;
    } catch (\Throwable $th) {
        // Handle error appropriately here
    }
}

function productsSortByPriceAsc()
{
    try {
        include("../db.php");

        $query = 'SELECT * FROM products ORDER BY product_price ASC';
        $statement = $db->prepare($query);
        $statement->execute();
        $list_product = $statement->fetchAll();
        $statement->closeCursor();

        return $list_product;
    } catch (\Throwable $th) {
        // Handle error appropriately here
    }
}

function productsSortByPriceDesc()
{
    try {
        include("../db.php");

        $query = 'SELECT * FROM products ORDER BY product_price DESC';
        $statement = $db->prepare($query);
        $statement->execute();
        $list_product = $statement->fetchAll();
        $statement->closeCursor();

        return $list_product;
    } catch (\Throwable $th) {
        // Handle error appropriately here
    }
}
