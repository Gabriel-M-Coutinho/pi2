<?php

// Inclui as classes necessárias
require_once 'models/User.Class.php';
require_once 'daos/user.dao.php';

class HomeController
{


    public function showHome()
    {
       
        require_once 'views/home.php';
    }


    public function showRegisterForm()
    {

        require_once 'views/register_form';
    }


}
?>
