
# 📊 Sistema de Coleta de Leads via Receita Federal

Sistema desenvolvido em PHP com MySQL para coleta e estruturação de **leads empresariais** a partir de dados públicos da **Receita Federal**. O objetivo é extrair, processar e armazenar informações de empresas, transformando esses dados em **leads qualificados** para uso em campanhas, prospecção ou CRM.

## 🚀 Funcionalidades

- 🔍 Consulta automatizada a dados da Receita Federal (ex: CNPJ).
- 📥 Extração de dados como nome empresarial, CNPJ, natureza jurídica, CNAE, endereço, etc.
- 🧠 Processamento e padronização dos dados para estruturação no banco.
- 💾 Armazenamento dos dados em banco MySQL.
- 📈 Interface administrativa para visualizar e exportar leads.
- 🔐 Controle de acesso por autenticação básica.

## 🧰 Tecnologias Utilizadas

- **PHP** 8+
- **MySQL** 5.7+
- **cURL** para requisições HTTP
- **HTML/CSS/JS** (Bootstrap ou outro framework opcional)
- **Composer** (opcional, para organizar dependências)

## ⚙️ Instalação

1. Clone o repositório:
```bash
git clone https://github.com/seu-usuario/lead-coletor.git
```

2. Configure o banco de dados:
   - Crie um banco MySQL (ex: `leads_db`)
   - Importe o arquivo SQL da pasta `database/`

3. Configure o arquivo de conexão:
```php
// config/db.php
define('DB_HOST', 'localhost');
define('DB_NAME', 'leads_db');
define('DB_USER', 'seu_usuario');
define('DB_PASS', 'sua_senha');
```

4. Instale as dependências (se usar Composer):
```bash
composer install
```

5. Acesse via navegador:
```
http://localhost/lead-coletor/public/
```


## 🛡️ Aviso Legal

Este sistema utiliza dados públicos da Receita Federal. É de responsabilidade do **usuário final** respeitar a **LGPD** e demais legislações vigentes quanto ao uso e armazenamento dessas informações.


