<?php
    require_once "daos/search_advanced.dao.php";

    class SearchAdvancedController {
        public function cnaes(){
            $cnaes = new SearchAdvancedDAO();
            return $cnaes->getCnaes();
        }
        public function searchDataBase(){
            $search = new SearchAdvancedDAO();
            $search->searchDataBase();
        }
    }
?>
