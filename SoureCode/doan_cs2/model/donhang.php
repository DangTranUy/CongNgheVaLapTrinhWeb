<?php
function tt_donhang()
{
    try {
        include '../db.php';
        $query = " SELECT * from donhang Inner join products On donhang.product_id = products.product_id  where user_id = '" . $_SESSION['tkuser']['user_id'] . "' ";
        $statement = $db->prepare($query);
        $statement->execute();
        $tk = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $tk;
    } catch (\Throwable $th) {
        //throw $th;
    }
}
