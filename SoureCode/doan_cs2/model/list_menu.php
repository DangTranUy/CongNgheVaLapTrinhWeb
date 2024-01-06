<?php
function menuMain()
{
    try {
        include("../db.php");
        $query = 'SELECT * FROM menumain';
        $statement = $db->prepare($query);
        $statement->execute();
        $list_menumain = $statement->fetchAll();
        $statement->closeCursor();
        return $list_menumain;
    } catch (\Throwable $th) {
        //throw $th;
    }
}
