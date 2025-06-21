<?php

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
                $_SESSION['error'] = "Email ou senha inválido.";
                header("Location: /login");
                exit;
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
            $user_type = $_POST['user_type'];

            if($user_type)
            {
                switch($user_type)
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
            }

            if (empty($email) || empty($password) || empty($password_confirm) || empty($name) || empty($document) || empty($user_type))
            {
                $_SESSION['error_nulls'] = "Preencha todos os campos.";
                header("Location: /register");
                exit;
            }

            if($password !== $password_confirm)
            {
                $_SESSION['error'] = "Senhas não coincidem.";
                header("Location: /register");
                exit;
            }

            $user = new User($email, $password, $name, $document, $user_type);

            $userDAO = new UserDAO();
            $userDAO->register($user);
            
            header('Location: /login');
        }else{
            require_once 'views/register_form.php';
        }
    }


    public function update()
    {
        if ($_POST && $_POST['action'] === 'edit') {
            $id = $_POST['id'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $password_confirm = $_POST['password_confirm'];
            $user_type = $_POST['user_type'];

            if ($user_type == 'user_common') {
                $user_type = 'PF';
                $name = $_POST['name'];
                $document = $_POST['cpf'];
            } else {
                $user_type = 'PJ';
                $name = $_POST['corporate_name'];
                $document = $_POST['cnpj'];
            }

            $changePassword = false;

            $user = new User($email, "", $name, $document, $user_type);
            $user->setIdUser($id);

            if (!empty($password) || !empty($password_confirm)) {
                if ($password !== $password_confirm) {
                    $_SESSION['error'] = "Senhas não coincidem.";
                    header("Location: /user");
                    exit;
                }

                $user->setPassword($password);
                $changePassword = true;
            }

            $userDAO = new UserDAO();
            $userDAO->update($user, $changePassword);

            header('Location: /');
            exit;
        }
    }

    public function delete()
    {
        if ($_POST && $_POST['action'] === 'delete') {
            $id = $_POST['id'];

            if (empty($id)) {
                echo "Usuário não existe.";
                return;
            }

            $userDAO = new UserDAO();
            $userDAO->delete($id);

            $_SESSION = array();
            session_destroy();

            header('Location: /');
            exit;
        }
    }
}
?>
