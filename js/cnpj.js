async function fetchData(cnpj) {
    const URL = `https://publica.cnpj.ws/cnpj/${cnpj}`; // Use o valor de CNPJ diretamente na URL

    try {
        const response = await fetch(URL); 
        if (response.ok) {
            const data = await response.json(); 
            return data; // Retorna os dados
        } else {
            throw new Error('Não foi possível carregar os dados');
        }
    } catch (error) {
        console.error('Erro ao buscar os dados:', error);
        return null;
    }
}


const url = new URL(window.location.href);
const cnpj = url.searchParams.get('cnpj');


(async () => {

    if (!cnpj) {
        console.error('CNPJ não foi fornecido na URL.');
        return;
    }

    const infos = await fetchData(cnpj);

    if (infos) {
        console.log(infos)
        const Htmlrazao = document.querySelector('.razao');
        Htmlrazao.innerHTML = infos.razao_social || 'Razão Social não encontrada';
        
        const Htmlcnpj = document.querySelector('.cnpj');
        Htmlcnpj.innerHTML = cnpj || 'CNPJ não encontrado';

        const Htmlporte = document.querySelector('.porte');
        Htmlporte.innerHTML = infos.porte.descricao || 'Porte não encontrado';

        const HtmlNaturezaJuriza = document.querySelector('.natureza_juridica')
        HtmlNaturezaJuriza.innerHTML = infos.natureza_juridica.descricao || 'Natureza Jurídica não encontrada';
        
        const HtmlTipo = document.querySelector('.tipo');
        HtmlTipo.innerHTML = infos.tipo || 'Tipo não encontrado';

        const HtmlSituacaoCadastral = document.querySelector('.situacao_cadastral')
        HtmlSituacaoCadastral.innerHTML = infos.estabelecimento.situacao_cadastral || 'Situação Cadastral não encontrada';
    } else {
        console.error('Erro ao carregar informações do CNPJ.');
    }
})();