<?php

class User{

    private $user_id;
    private $db;
    public $login;
    public $password;
    public $email;
    public $firstname;
    public $lastname;


    public function __construct(){

        $servername = "localhost";
        $username = "root";
        $dbpassword = "";
        $dbname = "classes";

        $this->db = new mysqli($servername, $username, $dbpassword, $dbname);
        if(!$this->db){
            die("connection lost");
        }else{
            echo "connection etablie";
        }

    }

    public function register($login, $password, $email, $firstname, $lastname){

        $this->login = $login;
        $this->password = $password;
        $this->email = $email;
        $this->firstname = $firstname;
        $this->lastname = $lastname;

      $bdd = "INSERT INTO utilisateurs (`login`, `password`, `email`, `firstname`, `lastname`) VALUES ('$login','$password','$email','$firstname','$lastname')";
      $this->db -> query($bdd);

    }

    public function connect($login, $password){

        /*$this->login = $login;
        $this->password = $password;*/

      $user1 = "SELECT * FROM utilisateurs WHERE login = '$login'";
      echo $login;
      $result= $this->db -> query($user1);
      $userinfo = $result ->fetch_assoc();
      var_dump($userinfo);
     if($login = $userinfo['login'] && $password = $userinfo['password']){
        $_SESSION['login'] = $userinfo['login'];
        $_SESSION['password'] = $userinfo['password'];
        $_SESSION['email'] = $userinfo['email'];
        $_SESSION['firstname'] = $userinfo['firstname'];
        $_SESSION['lastname'] = $userinfo['lastname'];
        $_SESSION['id'] = $userinfo['id'];
        echo "ok2";
        header('location: index.php');
      }
     
    }

    public function disconnect($login, $password){

        if (isset($_SESSION['user']->{'login'})) {
            $_SESSION = [];
           unset($_SESSION['user']);
           session_destroy();
     header('location: index.php');

    }
    }
    public function update($login,$password,$email,$firstname,$lastname){

        /*$this->login = $login;
        $this->password = $password;
        $this->email = $email;
        $this->firstname = $firstname;
        $this->lastname = $lastname;*/

        $user1 = "SELECT * FROM utilisateurs WHERE login = '$login'";
        $result= $this->db -> query($user1);
        $userinfo = $result ->fetch_assoc();
        $id = $_SESSION['id'];
        echo $login;

        $bdd1 = "UPDATE `utilisateurs` SET `login`='$login' WHERE`id` = '$id'" ;
        $this -> db->query($bdd1);







    }
}
