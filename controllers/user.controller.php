<?php

// Inclui as classes necessárias
require_once 'models/User.Class.php';
require_once 'daos/user.dao.php';

class UserController
{




   public function login()
{
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $userDAO = new UserDAO();
        $user = $userDAO->login($email, $password); 

        if ($user) {
      
            $_SESSION['user'] = [
                'id' => $user['id'],       
                'name' => $user['name'],
                'email' => $user['email']
            ];


            header('Location: /home');
            exit;
        } else {
            echo "Invalid email or password.";
        }
    }
}



        public function showLoginForm()
    {
       
        require_once 'views/login_form.php';
    }


    public function showRegisterForm()
    {

        require_once 'views/register_form.php';
    }

    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $name = $_POST['name'];
            $age = $_POST['age'];
            $email = $_POST['email'];
            $password = $_POST['password'];


            $user = new User($name, $age, $email, $password);


            $userDAO = new UserDAO();
            echo $userDAO->register($user);
        }
    }
}
?>
