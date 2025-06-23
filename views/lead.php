<?php require_once "header.php"; ?>

<div id="lead-container" class="container mx-auto p-6">
    <div class="bg-[var(--secondary-color)] rounded-lg shadow-md p-6">
        <h1 class="text-2xl font-bold mb-6">Detalhes da Empresa</h1>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Coluna 1 -->
            <div>
                <h2 class="text-xl font-semibold mb-4">Informações Básicas</h2>
                <div class="space-y-3">
                    <p><span class="font-medium">CNPJ:</span> <span id="cnpj">Carregando...</span></p>
                    <p><span class="font-medium">Razão Social:</span> <span id="razao-social">Carregando...</span></p>
                    <p><span class="font-medium">Nome Fantasia:</span> <span id="nome-fantasia">Carregando...</span></p>
                    <p><span class="font-medium">Data de Abertura:</span> <span id="data-abertura">Carregando...</span></p>
                    <p><span class="font-medium">Situação Cadastral:</span> <span id="situacao-cadastral">Carregando...</span></p>
                    <p><span class="font-medium">Porte:</span> <span id="porte">Carregando...</span></p>
                    <p><span class="font-medium">Natureza Jurídica:</span> <span id="natureza-juridica">Carregando...</span></p>
                    <p><span class="font-medium">Capital Social:</span> <span id="capital-social">Carregando...</span></p>
                </div>
                
                <h2 class="text-xl font-semibold mt-6 mb-4">Endereço</h2>
                <p id="endereco">Carregando...</p>
                
                <h2 class="text-xl font-semibold mt-6 mb-4">Contato</h2>
                <div class="space-y-3">
                    <p><span class="font-medium">Telefone:</span> <span id="telefone">Carregando...</span></p>
                    <p><span class="font-medium">Email:</span> <span id="email">Carregando...</span></p>
                </div>
            </div>
            
            <!-- Coluna 2 -->
            <div>
                <h2 class="text-xl font-semibold mb-4">Atividades Econômicas</h2>
                <div class="space-y-3">
                    <p><span class="font-medium">CNAE Principal:</span> <span id="cnae-principal">Carregando...</span></p>
                    
                    <div>
                        <p class="font-medium mb-2">CNAEs Secundários:</p>
                        <ul id="cnaes-secundarios" class="pl-4">
                            <li>Carregando...</li>
                        </ul>
                    </div>
                </div>
                
                <h2 class="text-xl font-semibold mt-6 mb-4">Simples Nacional</h2>
                <div class="space-y-3">
                    <p><span class="font-medium">Optante pelo Simples:</span> <span id="simples">Carregando...</span></p>
                    <p><span class="font-medium">MEI:</span> <span id="mei">Carregando...</span></p>
                </div>
                
                <h2 class="text-xl font-semibold mt-6 mb-4">Sócios</h2>
                <ul id="socios-list" class="divide-y">
                    <li>Carregando...</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="../js/cnpj.js" defer></script>

<?php require_once "footer.php"; ?>
