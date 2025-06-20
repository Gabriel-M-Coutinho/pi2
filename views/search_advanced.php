<?php
  require_once "header.php";
?>

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