<?php
function insert_taikhoan($username2, $email2, $password2)
{
    try {
        include '../db.php';
        $query = "INSERT INTO user(username, email, password) VALUES ('$username2', '$email2', '$password2')";
        $statement = $db->prepare($query);
        $statement->execute();
        $$statement->closeCursor();
    } catch (\Throwable $th) {
        //throw $th;
    }
}


function check_tkdangnhap($username2, $password2)
{
    try {
        include '../db.php';
        $query = " SELECT * from user where username='" . $username2 . "' AND password='" . $password2 . "' ";
        $statement = $db->prepare($query);
        $statement->execute();
        $tk = $statement->fetch(PDO::FETCH_ASSOC);
        return $tk;
    } catch (\Throwable $th) {
        //throw $th;
    }
}

function tt_taiKhoan()
{
    try {
        include '../db.php';
        $query = " SELECT * from user ";
        $statement = $db->prepare($query);
        $statement->execute();
        $tk = $statement->fetch(PDO::FETCH_ASSOC);
        return $tk;
    } catch (\Throwable $th) {
        //throw $th;
    }
}

function taikhoan()
{
    try {
        include("../db.php");
        $query = 'SELECT * FROM user';
        $statement = $db->prepare($query);
        $statement->execute();
        $list_taikhoan = $statement->fetchAll();
        $statement->closeCursor();
        return $list_taikhoan;
    } catch (\Throwable $th) {
        //throw $th;
    }
}
