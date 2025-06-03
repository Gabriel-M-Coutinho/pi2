<?php

// Inclui as classes necessárias
require_once 'models/User.Class.php';
require_once 'models/UserCommon.class.php';
require_once 'daos/user.dao.php';

class UserController
{




   public function login()
    {
        if($_POST){
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
            }
            else
            {
                echo "Email ou senha inválido.";
            }
        }else{
            require_once 'views/login_form.php';
        }
        
    }

   
    public function register()
    {
        if ($_POST) {

            $type_user = $_POST["type_user"];
            $email = $_POST['email'];
            $password = $_POST['password'];

            switch ($type_user) {
                case 'user_common':
                    $name = $_POST['name'];
                    $cpf = $_POST["cpf"];
                    //$user = new UserCommon($name,$cpf,$email,$password);
                    break;
                
                case 'user_company':
                    $cpf = $_POST["cnpj"];
                    $corporate_name = $_POST["corporate_name"];
                    break;
            }
         
            $cpf = $_POST["cpf"];
       


            //$user = new User($name, $age, $email, $password);

            //$userDAO = new UserDAO();
            //echo $userDAO->register($user);
        }else{
            require_once 'views/register_form2.php';
        }
    }
}
?>
