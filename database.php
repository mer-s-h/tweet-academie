<?php

class Database
{

    function __construct()
    {

        try {
            $pdo = new PDO('mysql:host=localhost;dbname=tweet_academie;charset=utf8', 'regina', '0611386482');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }

    function update($first_name, $last_name, $email, $phone, $birth_date, $username, $gender, $description, $picture, $theme, $id_user)
    {
        $sql = "UPDATE user SET first_name = $first_name , last_name = $last_name, email = $email, phone = $phone, birth_date = $birth_date, username = $username, gender = $gender, description = $description, picture = $picture, theme = $theme WHERE id_user = $id_user";
    }
    
}
