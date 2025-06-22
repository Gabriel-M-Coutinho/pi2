<?php
require_once "daos/search_advanced.dao.php";

class SearchAdvancedController {
    public function cnaes() {
        $cnaes = new SearchAdvancedDAO();
        return $cnaes->getCnaes();
    }

    public function municipios() {
        $municipios = new SearchAdvancedDAO();
        return $municipios->getMunicipios();
    }

    public function searchDataBase() {

        $cnae_code = isset($_POST['cnae_code']) ? (int)$_POST['cnae_code'] : null;
        $municipality = isset($_POST['municipality']) ? (int)$_POST['municipality'] : null;
        $state = isset($_POST['state']) ? $_POST['state'] : null;
        

        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1; 
        $perPage = isset($_GET['per_page']) ? (int)$_GET['per_page'] : 10; 

  
        $page = max(1, $page); 

        $searchDAO = new SearchAdvancedDAO();


        $results = $searchDAO->searchDataBase(
            $cnae_code, 
            $municipality, 
            $state, 
            $page, 
            $perPage
        );


        $totalResults = $searchDAO->countFilteredResults(
            $cnae_code, 
            $municipality, 
            $state
        );


        $totalPages = ceil($totalResults / $perPage);


        return [
            'results' => $results,
            'pagination' => [
                'total_results' => $totalResults,
                'current_page' => $page,
                'per_page' => $perPage,
                'total_pages' => $totalPages,
                'has_previous' => $page > 1,
                'has_next' => $page < $totalPages
            ],
            'filters' => [
                'cnae_code' => $cnae_code,
                'municipality' => $municipality,
                'state' => $state
            ]
        ];
    }
}