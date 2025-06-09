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
            $email = $_POST['email'];
            $password = $_POST['password'];
            $type_user = $_POST['type_user'];

            switch($type_user)
            {
                case 'user_common':
                    $user_type = "PF";
                    $name = $_POST['name'];  
                    $document = $_POST['cpf'];
                break;

                case 'user_company':
                    $user_type = "PJ";
                    $name = $_POST['corporate_name'];  
                    $document = $_POST['cnpj'];
                break;
            }

            if (empty($email) || empty($password) || empty($name) || empty($document) || empty($type_user)) {
                echo "Preencha todos os campos.";
                return;
            }

            $user = new User($email, $password, $name, $document, $user_type);

            $userDAO = new UserDAO();
            echo $userDAO->register($user);
            
            header('Location: /login');
        }else{
            require_once 'views/register_form2.php';
        }
    }
}
?>
