<?php
require_once "header.php";
?>

<div style="display: flex; flex-direction: column; justify-content: center; padding: 100px 10px">
    <h1>Busca Avançada</h1>
    <h2>Filtros:</h2>
    <form style="//background-color: blue;" action="#" method="POST">
        <label>Cnae Principal:</label></br>
        <select style="w-64 p-2 border" size="" name="cnae_code" id="cnae">
            <option value="" selected></option>
            <?php
                foreach ($cnaes as $cnae) {
                    echo "<option value='{$cnae['codigo']}'>{$cnae['codigo']} - {$cnae['descricao']}</option>";
                }
            ?>
        </select></br>

        <label>Estado:</label></br>
        <select name="state" id="state">
            <option value="" selected></option>
            <option value="AC">Acre</option>
            <option value="AL">Alagoas</option>
            <option value="AP">Amapá</option>
            <option value="AM">Amazonas</option>
            <option value="BA">Bahia</option>
            <option value="CE">Ceará</option>
            <option value="DF">Distrito Federal</option>
            <option value="ES">Espírito Santo</option>
            <option value="GO">Goiás</option>
            <option value="MA">Maranhão</option>
            <option value="MT">Mato Grosso</option>
            <option value="MS">Mato Grosso do Sul</option>
            <option value="MG">Minas Gerais</option>
            <option value="PA">Pará</option>
            <option value="PB">Paraíba</option>
            <option value="PR">Paraná</option>
            <option value="PE">Pernambuco</option>
            <option value="PI">Piauí</option>
            <option value="RJ">Rio de Janeiro</option>
            <option value="RN">Rio Grande do Norte</option>
            <option value="RS">Rio Grande do Sul</option>
            <option value="RO">Rondônia</option>
            <option value="RR">Roraima</option>
            <option value="SC">Santa Catarina</option>
            <option value="SP">São Paulo</option>
            <option value="SE">Sergipe</option>
            <option value="TO">Tocantins</option>
        </select></br>

        <label>Municipio:</label></br>
        <select name="municipality" id="municipality">
            <option value="" selected></option>
            <?php foreach ($municipios as $municipio): ?>
                <option value="<?= $municipio['codigo'] ?>"><?= $municipio['descricao'] ?></option>
            <?php endforeach; ?>
        </select></br>
        
        <button type="submit" class="py-3 px-12 rounded">Buscar</button>
    </form>
</div>

<?php if (!empty($results)): ?>
<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    CNPJ
                </th>
                <th scope="col" class="px-6 py-3">
                    CNAE
                </th>
                <th scope="col" class="px-6 py-3">
                    Código CNAE
                </th>
                <th scope="col" class="px-6 py-3">
                    Município
                </th>
                <th scope="col" class="px-6 py-3">
                    Situação
                </th>
                <th scope="col" class="px-6 py-3">
                    Matriz/Filial
                </th>
                <th scope="col" class="px-6 py-3">
                    CNAEs Secundários
                </th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($results as $row): ?>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                <td class="px-6 py-4">
                    <?= htmlspecialchars($row['CNPJ'] ?? '') ?>
                </td>
                <td class="px-6 py-4">
                    <?= htmlspecialchars($row['CNAE'] ?? '') ?>
                </td>
                <td class="px-6 py-4">
                    <?= htmlspecialchars($row['CNAE_CODE'] ?? '') ?>
                </td>
                <td class="px-6 py-4">
                    <?= htmlspecialchars($row['MUNICIPIO'] ?? '') ?>
                </td>
                <td class="px-6 py-4">
                    <?= htmlspecialchars($row['SITUACAO'] ?? '') ?>
                </td>
                <td class="px-6 py-4">
                    <?= htmlspecialchars($row['MATRIZ_FILIAL'] ?? '') ?>
                </td>
                <td class="px-6 py-4">
                    <?= htmlspecialchars($row['CNAE_SECUNDARIO'] ?? '') ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?php endif; ?>

<?php
require_once "footer.php";
?>
<script src="views/teste.js"></script>