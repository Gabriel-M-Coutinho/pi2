async function fetchLeadData(cnpj) {
    const URL = `https://publica.cnpj.ws/cnpj/${cnpj}`;
    
    try {
        const response = await fetch(URL);
        if (!response.ok) throw new Error('Erro na requisição: ' + response.status);
        return await response.json();
    } catch (error) {
        console.error('Erro ao buscar dados:', error);
        return null;
    }
}

function formatDate(dateString) {
    if (!dateString) return 'Não informado';
    try {
        const date = new Date(dateString);
        return date.toLocaleDateString('pt-BR');
    } catch (error) {
        return 'Não informado';
    }
}

function formatCurrency(value) {
    if (!value || value === 0) return 'Não informado';
    try {
        return new Intl.NumberFormat('pt-BR', {
            style: 'currency',
            currency: 'BRL'
        }).format(Number(value));
    } catch (error) {
        return 'Não informado';
    }
}

function safeGet(obj, path, defaultValue = 'Não informado') {
    try {
        const keys = path.split('.');
        let current = obj;
        
        for (const key of keys) {
            if (current === null || current === undefined || !(key in current)) {
                return defaultValue;
            }
            current = current[key];
        }
        
        return current || defaultValue;
    } catch (error) {
        return defaultValue;
    }
}

function displayLeadData(data) {
    if (!data) {
        document.getElementById('lead-container').innerHTML = `
            <div class="p-4 bg-red-100 text-red-700 rounded">
                Não foi possível carregar os dados do CNPJ.
            </div>
        `;
        return;
    }



 
    document.getElementById('cnpj').textContent = safeGet(data, 'estabelecimento.cnpj');
    document.getElementById('razao-social').textContent = safeGet(data, 'razao_social');
    document.getElementById('nome-fantasia').textContent = safeGet(data, 'estabelecimento.nome_fantasia');
    document.getElementById('data-abertura').textContent = formatDate(safeGet(data, 'estabelecimento.data_inicio_atividade', null));
    document.getElementById('situacao-cadastral').textContent = safeGet(data, 'estabelecimento.situacao_cadastral');
    document.getElementById('porte').textContent = safeGet(data, 'porte.descricao');
    document.getElementById('natureza-juridica').textContent = safeGet(data, 'natureza_juridica.descricao');
    document.getElementById('capital-social').textContent = formatCurrency(safeGet(data, 'capital_social', null));


    const enderecoPartes = [
        safeGet(data, 'estabelecimento.tipo_logradouro', ''),
        safeGet(data, 'estabelecimento.logradouro', ''),
        safeGet(data, 'estabelecimento.numero', 'S/N'),
        safeGet(data, 'estabelecimento.bairro', ''),
        safeGet(data, 'estabelecimento.cidade.nome', ''),
        safeGet(data, 'estabelecimento.estado.sigla', ''),
        `CEP: ${safeGet(data, 'estabelecimento.cep', '')}`
    ].filter(parte => parte && parte.trim() !== '');
    
    const endereco = enderecoPartes.join(', ').replace(/\s+/g, ' ').trim();
    document.getElementById('endereco').textContent = endereco || 'Endereço não informado';

    // Contato
    const ddd = safeGet(data, 'estabelecimento.ddd1', null);
    const telefone = safeGet(data, 'estabelecimento.telefone1', null);
    const telefoneFormatado = (ddd && telefone) ? `(${ddd}) ${telefone}` : 'Não informado';
    document.getElementById('telefone').textContent = telefoneFormatado;
    document.getElementById('email').textContent = safeGet(data, 'estabelecimento.email');

    // Cnae Principal
    const atividadePrincipal = data?.estabelecimento?.atividade_principal;
    if (atividadePrincipal) {
        document.getElementById('cnae-principal').textContent = 
            `${safeGet(atividadePrincipal, 'descricao')} (${safeGet(atividadePrincipal, 'id')})`;
    } else {
        document.getElementById('cnae-principal').textContent = 'Não informado';
    }

    // Atividades 
    const cnaesSecundarios = document.getElementById('cnaes-secundarios');
    cnaesSecundarios.innerHTML = '';
    
    const atividadesSecundarias = data?.estabelecimento?.atividades_secundarias;
    if (atividadesSecundarias && Array.isArray(atividadesSecundarias) && atividadesSecundarias.length > 0) {
        atividadesSecundarias.forEach(cnae => {
            const li = document.createElement('li');
            li.className = 'py-1';
            li.textContent = `${safeGet(cnae, 'descricao')} (${safeGet(cnae, 'id')})`;
            cnaesSecundarios.appendChild(li);
        });
    } else {
        cnaesSecundarios.innerHTML = '<li>Não há atividades secundárias</li>';
    }

    // Simples Nacional
    document.getElementById('simples').textContent = 
        safeGet(data, 'simples.simples') === 'Sim' ? 'Sim' : 'Não';
    document.getElementById('mei').textContent = 
        safeGet(data, 'simples.mei') === 'Sim' ? 'Sim' : 'Não';

    // Sócios
    const sociosList = document.getElementById('socios-list');
    sociosList.innerHTML = '';
    
    const socios = data?.socios;
    if (socios && Array.isArray(socios) && socios.length > 0) {
        socios.forEach(socio => {
            const li = document.createElement('li');
            li.className = 'py-2 border-b';
            li.innerHTML = `
                <p class="font-semibold">${safeGet(socio, 'nome')}</p>
                <p class="text-sm">${safeGet(socio, 'qualificacao_socio.descricao')}</p>
                <p class="text-xs text-gray-500">Entrada: ${formatDate(safeGet(socio, 'data_entrada', null))}</p>
            `;
            sociosList.appendChild(li);
        });
    } else {
        sociosList.innerHTML = '<li>Não há sócios cadastrados</li>';
    }
}

// Função para mostrar loading
function showLoading() {
    const loadingElements = [
        'cnpj', 'razao-social', 'nome-fantasia', 'data-abertura', 
        'situacao-cadastral', 'porte', 'natureza-juridica', 'capital-social',
        'endereco', 'telefone', 'email', 'cnae-principal', 'simples', 'mei'
    ];
    
    loadingElements.forEach(id => {
        const element = document.getElementById(id);
        if (element) {
            element.textContent = 'Carregando...';
        }
    });
    
    document.getElementById('cnaes-secundarios').innerHTML = '<li>Carregando...</li>';
    document.getElementById('socios-list').innerHTML = '<li>Carregando...</li>';
}


const urlParams = new URLSearchParams(window.location.search);
const cnpj = urlParams.get('cnpj');

if (cnpj) {
    showLoading();
    fetchLeadData(cnpj)
        .then(data => {
            console.log('Dados recebidos:', data); 
            displayLeadData(data);
        })
        .catch(error => {
            console.error('Error:', error);
            document.getElementById('lead-container').innerHTML = `
                <div class="p-4 bg-red-100 text-red-700 rounded">
                    Erro ao carregar dados: ${error.message}
                </div>
            `;
        });
} else {
    document.getElementById('lead-container').innerHTML = `
        <div class="p-4 bg-yellow-100 text-yellow-700 rounded">
            CNPJ não especificado na URL
        </div>
    `;
}