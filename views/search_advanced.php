<?php require_once "header.php"; ?>

<div class="flex flex-col justify-center p-24">
    <h1 class="text-2xl mb-4">Busca Avançada</h1>
    <h2 class="text-xl mb-2">Filtros:</h2>
    <form class="bg-[var(--secondary-color)] p-6 rounded shadow-md " action="#" method="POST">

        <label class="block text-[var(--text-color)] font-medium mb-1">Cnae Principal:</label>
        <select class="w-full p-2 border rounded mb-4 text-[var(--primary-color)]" name="cnae_code" id="cnae">
            <option value="" selected></option>
            <?php foreach ($cnaes as $cnae):
                $selected = (!empty($searchResults['filters']['cnae_code']) && $searchResults['filters']['cnae_code'] == $cnae['codigo']) ? 'selected' : '';
            ?>
                <option value="<?= htmlspecialchars($cnae['codigo']) ?>" <?= $selected ?>>
                    <?= htmlspecialchars($cnae['codigo']) ?> - <?= htmlspecialchars($cnae['descricao']) ?>
                </option>
            <?php endforeach; ?>
        </select>

        <label class="block text-[var(--text-color)] font-medium mb-1">Estado:</label>
        <select class="w-full p-2 border rounded mb-4 text-[var(--primary-color)]" name="state" id="state">
            <option value="" selected></option>
            <?php
            $states = [ 'AC'=>'Acre', 'AL'=>'Alagoas', 'AP'=>'Amapá', 'AM'=>'Amazonas', 'BA'=>'Bahia', 
                        'CE'=>'Ceará', 'DF'=>'Distrito Federal', 'ES'=>'Espírito Santo', 'GO'=>'Goiás', 
                        'MA'=>'Maranhão', 'MT'=>'Mato Grosso', 'MS'=>'Mato Grosso do Sul', 'MG'=>'Minas Gerais', 
                        'PA'=>'Pará', 'PB'=>'Paraíba', 'PR'=>'Paraná', 'PE'=>'Pernambuco', 'PI'=>'Piauí', 
                        'RJ'=>'Rio de Janeiro', 'RN'=>'Rio Grande do Norte', 'RS'=>'Rio Grande do Sul', 
                        'RO'=>'Rondônia', 'RR'=>'Roraima', 'SC'=>'Santa Catarina', 'SP'=>'São Paulo', 
                        'SE'=>'Sergipe', 'TO'=>'Tocantins'];
            
            foreach ($states as $sigla => $nome):
                $selected = (!empty($searchResults['filters']['state']) && $searchResults['filters']['state'] == $sigla) ? 'selected' : '';
            ?>
                <option value="<?= $sigla ?>" <?= $selected ?>><?= $nome ?></option>
            <?php endforeach; ?>
        </select>

        <label class="block text-[var(--text-color)] font-medium mb-1">Município:</label>
        <select class="w-full p-2 border rounded mb-4 text-[var(--primary-color)]" name="municipality" id="municipality">
            <option value="" selected></option>
            <?php foreach ($municipios as $municipio):
                $selected = (!empty($searchResults['filters']['municipality']) && $searchResults['filters']['municipality'] == $municipio['codigo']) ? 'selected' : '';
            ?>
                <option value="<?= htmlspecialchars($municipio['codigo']) ?>" <?= $selected ?>>
                    <?= htmlspecialchars($municipio['descricao']) ?>
                </option>
            <?php endforeach; ?>
        </select>

        <button type="submit" class="py-2 px-8 bg-blue-500 hover:bg-blue-600 text-white rounded transition duration-200">
            Buscar
        </button>
    </form>
</div>

<?php if (!empty($searchResults['results'])): ?>
<div class="relative overflow-x-auto p-4">
    <div class="mb-4 p-4 bg-blue-50 rounded-lg">
        <p class="font-semibold text-gray-700">
            Total de leads encontrados: <?= number_format($searchResults['pagination']['total_results'], 0, ',', '.') ?>
        </p>

        <?php if ($searchResults['pagination']['total_results'] > 10): ?>
            <form action="/payment" method="POST">
                <input type="hidden" name="cnae_code" value="<?= htmlspecialchars($searchResults['filters']['cnae_code'] ?? '') ?>">
                <input type="hidden" name="state" value="<?= htmlspecialchars($searchResults['filters']['state'] ?? '') ?>">
                <input type="hidden" name="municipality" value="<?= htmlspecialchars($searchResults['filters']['municipality'] ?? '') ?>">
                <input type="hidden" name="total_results" value="<?= htmlspecialchars($searchResults['pagination']['total_results']) ?>">
                
                <button type="submit" class="mt-2 bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded transition duration-200">
                    Comprar Leads (<?= number_format($searchResults['pagination']['total_results'], 0, ',', '.') ?>)
                </button>
            </form>
        <?php endif; ?>
    </div>

    <div class="bg-white shadow-md rounded-lg overflow-hidden">
        <table class="w-full text-sm text-left text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-100">
                <tr>
                    <th class="px-6 py-3">CNPJ</th>
                    <th class="px-6 py-3">CNAE</th>
                    <th class="px-6 py-3">Código CNAE</th>
                    <th class="px-6 py-3">Município</th>
                    <th class="px-6 py-3">Situação</th>
                    <th class="px-6 py-3">Matriz/Filial</th>
                    <th class="px-6 py-3">CNAEs Secundários</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($searchResults['results'] as $row): 
                    $cnpjClean = preg_replace('/\D/', '', $row['CNPJ'] ?? '');
                ?>
                <tr class="bg-white border-b border-gray-200 hover:bg-gray-50 transition duration-150">
                    <td class="px-6 py-4 font-medium text-gray-900">
                        <a href="views/lead.php?cnpj=<?= urlencode($cnpjClean) ?>" 
                           class="text-blue-600 hover:text-blue-800 hover:underline transition duration-200"
                           title="Ver detalhes do lead">
                            <?= htmlspecialchars($row['CNPJ'] ?? '') ?>
                        </a>
                    </td>
                    <td class="px-6 py-4"><?= htmlspecialchars($row['CNAE'] ?? '') ?></td>
                    <td class="px-6 py-4"><?= htmlspecialchars($row['CNAE_CODE'] ?? '') ?></td>
                    <td class="px-6 py-4"><?= htmlspecialchars($row['MUNICIPIO'] ?? '') ?></td>
                    <td class="px-6 py-4">
                        <span class="<?= ($row['SITUACAO'] ?? '') === 'ATIVA' ? 'text-green-600' : 'text-red-600' ?>">
                            <?= htmlspecialchars($row['SITUACAO'] ?? '') ?>
                        </span>
                    </td>
                    <td class="px-6 py-4"><?= htmlspecialchars($row['MATRIZ_FILIAL'] ?? '') ?></td>
                    <td class="px-6 py-4 text-xs"><?= htmlspecialchars($row['CNAE_SECUNDARIO'] ?? '') ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</div>
<?php endif; ?>

<?php require_once "footer.php"; ?>