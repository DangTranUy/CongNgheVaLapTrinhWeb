<?php

function product_details($product_id)
{
    try {
        include("../db.php");
        $query = "SELECT products.*,categories.name_category  FROM products INNER JOIN categories ON products.category_id = categories.category_id 
        WHERE products.product_id = $product_id";
        $statement = $db->prepare($query);
        $statement->execute();
        $product_details = $statement->fetchAll();
        $statement->closeCursor();
        return $product_details;
    } catch (\Throwable $th) {
        //throw $th;
    }
}
function product_details_show($menumain_id)
{
    try {
        include("../db.php");
        $query = "SELECT products.*,categories.name_category  FROM products INNER JOIN categories ON products.category_id = categories.category_id 
        WHERE products.menumain_id = $menumain_id";
        $statement = $db->prepare($query);
        $statement->execute();
        $product_details_show = $statement->fetchAll();
        $statement->closeCursor();
        return $product_details_show;
    } catch (\Throwable $th) {
        //throw $th;
    }
}
