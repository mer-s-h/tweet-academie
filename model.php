<?php

    class Model{
        public function __construct ()
        {
            try {
                $db = new PDO('mysql:host=localhost;dbname=tweet_academie;charset=utf8', 'cedric', 'cd0ea15cc4');
                $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (Exception $e){
                die ('Erreur : ' . $e->getMessage());
            }
            $this->db = $db;
        }
    }

    class User extends Model {
        
        public function addUser($prenom, $nom, $tel,$email,$date,$pass)
        {
            $query = $this->db->prepare("INSERT INTO user VALUES (NULL,:email, :tel, :pass, :nom, :prenom, :nickname , :date, '', '', NULL, 'Blue')");
            $query->bindValue('tel', $tel);
            $query->bindValue('nom', $nom);
            $query->bindValue('date', $date);
            $query->bindValue('email', $email);
            $query->bindValue('prenom', $prenom);
            $query->bindValue('pass', $pass);
            $query->bindValue('nickname', "@".$prenom);
            $query->execute();
        }

        public function ifexist($email)
        {
            $query = $this->db->prepare("SELECT COUNT(*) FROM user WHERE email = :email");
            $query->bindValue("email",$email);
            $query->execute();
            $data = $query->fetch();
            if ($data[0] > 0) {
                return true;
            } else {
                return false;
            }
        }

        public function getUsers()
        {
            $query = $this->db->query("SELECT * FROM user");
            $data = $query->fetchAll(PDO::FETCH_ASSOC);
            var_dump($data);
        }

        public function getUser($id)
        {
            $query = $this->db->query("SELECT * FROM user WHERE id_user= {$id}");
            $data = $query->fetch(PDO::FETCH_ASSOC);
            var_dump($data);
        }

    }
    
    $user = new User;
    // if ($_POST["newUser"] == true) {
    //         print_r($_POST);
    //         $user = new User;
    //         $user->addUser($_POST["prenom"],$_POST["nom"],$_POST["tel"],$_POST["email"],$_POST["date"],$_POST["pass"]);
    //     }
    
    if (isset($_POST["newUser"]) && $_POST["newUser"] == true) {
            print_r($_POST);
            // $user = new User;
            $user->addUser($_POST["prenom"],$_POST["nom"],$_POST["tel"],$_POST["email"],$_POST["date"],$_POST["pass"]);
    }


    if ($_POST['test'] == "test") {
        $user->getUser(30);
        echo "OK";

    }






