<?php
    require_once "daos/search_advanced.dao.php";

    class SearchAdvancedController {
        public function cnaes(){
            $cnaes = new SearchAdvancedDAO();
            return $cnaes->getCnaes();
        }
        public function municipios(){
            $cnaes = new SearchAdvancedDAO();
            return $cnaes->getMunicipios();
        }

        public function searchDataBase() {

        $cnae_code = isset($_POST['cnae_code']) ? (int)$_POST['cnae_code'] : null;
        $municipality = isset($_POST['municipality']) ? (int)$_POST['municipality'] : null;
        $state = isset($_POST['state']) ? $_POST['state'] : null;
        $page = isset($_POST['page']) ? (int)$_POST['page'] : 0;


        $search = new SearchAdvancedDAO();

   
        $result = $search->searchDataBase($cnae_code, $municipality, $state, $page);

    
            return $result;
        }
    }
?>
