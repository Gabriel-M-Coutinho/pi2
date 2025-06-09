<?php

// Inclui as classes necessárias
require_once 'models/User.class.php';
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
                    'id' => $user['id_user'],       
                    'name' => $user['name_user'],
                    'email' => $user['email_user']
                ];

                header('Location: /');
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
            $password_confirm = $_POST['password_confirm'];
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

            if (empty($email) || empty($password) || empty($password_confirm) || empty($name) || empty($document) || empty($type_user))
            {
                echo "Preencha todos os campos.";
                return;
            }

            if($password !== $password_confirm)
            {
                echo "Senha e confirmar senha não correspondem.";
                return;
            }

            $user = new User($email, $password, $name, $document, $user_type);

            $userDAO = new UserDAO();
            $userDAO->register($user);
            
            header('Location: /login');
        }else{
            require_once 'views/register_form.php';
        }
    }
}
?>
