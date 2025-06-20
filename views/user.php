<?php
require_once 'header.php';
require_once 'daos/user.dao.php';

$userDAO = new UserDAO();
$user = $userDAO->getUserById($_SESSION['user']['id']);
?>

<body>
<h2 id="devs-titulo" class="justify-self-center pt-10">Conta</h2>
<form action="/user" id="form-register" method="POST" class="max-w-sm mx-auto py-4 pb-8">
    <div class="mb-5">
        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
        <input type="email" name="email" id="email" value="<?= $user->email_user ?>" required
               class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white" />
    </div>

    <div class="mb-5">
        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Senha</label>
        <input type="password" name="password" id="password"
               class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white"/>
    </div>

    <div class="mb-5">
        <label for="password_confirm" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirmar Senha</label>
        <input type="password" name="password_confirm" id="password_confirm"
               class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white"/>
    </div>

    <div class="max-w-[80%] w-full flex user_type mb-5 gap-2">
        <label for="user_type" class="text-sm font-medium text-gray-900 dark:text-white">Selecione o tipo de pessoa:</label>
        <label class="flex items-center gap-1">
            <input type="radio" name="user_type" value="user_common" class="form-input"
                <?= $user->user_type === 'PF' ? 'checked' : '' ?> onchange="selectThis()">
            PF
        </label>
        <label class="flex items-center gap-1">
            <input type="radio" name="user_type" value="user_company" class="form-input"
                <?= $user->user_type === 'PJ' ? 'checked' : '' ?> onchange="selectThis()">
            PJ
        </label>
    </div>

    <!-- PF FIELDS -->
    <div id="selectPF" class="">
        <div class="mb-5">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nome</label>
            <input type="text" name="name" id="name" value="<?= $user->user_type === 'PF' ? $user->name_user : '' ?>"
                   class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white" />
        </div>
        <div class="mb-5">
            <label for="cpf" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">CPF</label>
            <input type="text" name="cpf" id="cpf" placeholder="000.000.000-00"
                   value="<?= $user->user_type === 'PF' ? $user->document_user : '' ?>"
                   class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white" />
        </div>
    </div>

    <!-- PJ FIELDS -->
    <div id="selectPJ" class="">
        <div class="mb-5">
            <label for="corporate_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Razão Social</label>
            <input type="text" name="corporate_name" id="corporate_name"
                   value="<?= $user->user_type === 'PJ' ? $user->name_user : '' ?>"
                   class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white" />
        </div>
        <div class="mb-5">
            <label for="cnpj" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">CNPJ</label>
            <input type="text" name="cnpj" id="cnpj" placeholder="00.000.000/0000-00"
                   value="<?= $user->user_type === 'PJ' ? $user->document_user : '' ?>"
                   class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white" />
        </div>
    </div>

    <div class="flex flex-col items-start gap-3">
        <button type="submit" name="action" value="edit" id="botao-principal" class="py-2 px-7 rounded">Editar</button>
        <button type="submit" name="action" value="delete" id="botao-red" class="py-2 px-7 rounded">Excluir</button>
    </div>

    <input type="hidden" name="id" value="<?= $user->id_user ?>">
</form>
</body>

<script>
document.addEventListener("DOMContentLoaded", function () {
    hideField();
    selectThis();
});
</script>

<?php
require_once 'footer.php';
?>
