# Agenda Eletrônica - Desafio ADS

Sistema multiusuário com autenticação segura e CRUD de atividades. Inclui controle de status, isolamento de dados por usuário e visualização dinâmica via FullCalendar. Desenvolvido com PHP (CodeIgniter 4), MySQL, Bootstrap e jQuery.

## 🚀 Como executar o projeto:
1. Clone o repositório.
2. Execute `composer install` para baixar as dependências.
3. Importe o arquivo SQL (na pasta /database ou raiz) no seu MySQL.
4. Configure o arquivo `.env` com suas credenciais do banco.
5. Rode `php spark serve`.

##💡 Dica de Implementação: Migrations vs. SQL
Neste projeto, utilizei as Migrations do CodeIgniter 4 para estruturar o banco de dados. Isso significa que você tem duas formas de preparar o ambiente:

1. A forma automatizada (Recomendada): Após configurar o seu arquivo .env, você não precisa importar nada manualmente. Basta abrir o terminal na raiz do projeto e executar:
   ´ php spark migrate ´
Isso criará automaticamente todas as tabelas, colunas e chaves estrangeiras com as configurações exatas que utilizei no desenvolvimento.

A forma tradicional: Caso prefira, também deixei disponível o arquivo sistema_web.sql na raiz (ou na pasta /database). Você pode importá-lo diretamente via phpMyAdmin ou terminal MySQL para garantir que a estrutura suba exatamente como planejado.
