# Clients
Administração e manutenção dos clientes de uma loja hipotética
<p align="center"></p>
<h3 align="left">
O ecommerce é um prototipo de um administrativo para uma loja conseguir manter seus clientes e funcionários

##### Ferramentas utilizadas e guia de instalação: 
* Laravel 8;
* JSON PHP Extension + Banco de dados (MySQL, SQLite) + Servidor web (Apache) - recomendado: download do ambiente de desenvolvimento php Xampp.
* Configuração correta das variáveis de ambiente (mysql e php).
Composer
* PHP: * Versão >= 8.2.6
* OpenSSL PHP Extension 
* PDO PHP Extension 
* Composer. 

##### Passo a passo:
1. Clone o repositório para seu computador;
2. Dentro da pasta principal do projeto crie um arquivo com o nome: .env; 
3. Copie o conteúdo do arquivo .env.example para o arquivo .env recém criado;
4. Acesse o repositório com um terminal e execute o comando: composer install;
5. Ainda no terminal, gere uma application key com o comando: php artisan key:generate;
6. Configure o arquivo .env com as configurações do banco de dados local;
7. No terminal, execute as migrations com o comando: php artisan migrate --seed (a flag --seed serve para rodar o seeder do laravel. Neste projeto, foi usado para gerar vendedores e clientes para testes automatizados do sistema, além de criar os tipos de pessoas do sistema (pessoa física e pessoa jurídica);
8. Para executar o projeto, use o comando: php artisan serve e acesse a url indicada no terminal.
9. Isso feito, o projeto abrirá em uma tela de login, onde um usuário é gerado automaticamente pelo sistema, e suas credenciais devem ser inseridas para acessar o sistema. (São elas: email => 'admin@gmail.com', senha => 'password')

#### Desenvolvimento 

* Este projeto foi desenvolvido usando como base o framework Laravel. O frontend foi feito em html, css e javascript, e com o uso do Bootstrap como base e auxilio para a estilização do projeto.

#### Desenvolvido por Larissa Rezende Fazza ####
