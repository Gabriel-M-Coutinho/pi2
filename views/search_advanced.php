<?php
  require_once "header.php";
?>
<!-- Cnae, Estado e Municipio -->
<div style="display: flex; flex-direction: column; justify-content: center; padding: 100px 10px">
    <h1>Busca Avançada</h1>
    <h2>Filtros:</h2>
    <form style="//background-color: blue;" action="#" method="POST">
        <label>Cnae Principal:</label></br>
        <select style="w-64 p-2 border" size="" name="cnae" id="cnae">
            <option value="" selected></option>
            <?php
                foreach ($cnaes as $cnae) {
                    echo "<option value='{$cnae['codigo']}'>{$cnae['codigo']} - {$cnae['descricao']}</option>";
                }
            ?>
        </select></br>

        <label>Estado:</label></br>
        <select name="state" id="state">
        </select></br>

        <label>Municipio:</label></br>
        <select name="municipality" id="municipality">

        </select></br>
        <label>Identificador:</label></br>
        <select name="identifier" id="identifier">
            <option value=""></option>
            <option value="MATRIZ">Matriz</option>
            <option value="FILIAL">Filial</option>
        </select></br>
        <label>Situação Cadastral:</label></br>
        <select name="situacao_cadastral" id="situacao_cadastral">
            <option value=""></option>
            <option value="NULA">Nula</option>
            <option value="ATIVA">Ativa</option>
            <option value="SUSPENSA">Suspensa</option>
            <option value="INAPTA">Inapta</option>
            <option value="BAIXA">Baixa</option>
        </select>
        <button type="submit" class="py-3 px-12 rounded">Buscar</button>
    </form>
</div>

<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Razão Social
                </th>
                <th scope="col" class="px-6 py-3">
                    CNPJ
                </th>
                <th scope="col" class="px-6 py-3">
                    CNAE
                </th>
                <th scope="col" class="px-6 py-3">
                    Matriz
                </th>
                <th scope="col" class="px-6 py-3">
                    Situação
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Apple MacBook Pro 17"
                </th>
                <td class="px-6 py-4">
                    Silver
                </td>
                <td class="px-6 py-4">
                    Laptop
                </td>
                <td class="px-6 py-4">
                    $2999
                </td>
                <td class="px-6 py-4">
                    Ativo
                </td>
            </tr>
        </tbody>
    </table>
</div>

<?php
require_once "footer.php";
?>
<script src="views/teste.js"></script>