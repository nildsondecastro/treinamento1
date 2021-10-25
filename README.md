## Lista de Comandos Utilizados

- `laravel new treinamento` (cria um projeto de nome 'treinamento')

(appós entrar na pasta do projeto)

- `composer require lucascudo/laravel-pt-br-localization --dev` (passar o projeto para o português)
- `php artisan vendor:publish --tag=laravel-pt-br-localization`

- `php artisan list` (lista de comandos do laravel)

- `php artisan make:model Mensagem -m` (Cria model Mensagem junto com migration)
- `php artisan migrate:fresh` (Drop e recriação das tabelas do banco)
- `php artisan db:seed` (Executa o arquivo de população do banco)
- `php artisan migrate:fresh --seed` (drop das tabelas criadas, recria elas e depois popula o banco)
- `php artisan make:model Post -m` (Cria model Post junto com migration)
- `php artisan make:model Comentario -m` (Cria model Comentario junto com migration)
- `php artisan make:controller TesteController` (Cria controller TesteController)
- `php artisan serve` (inicia o serve)


## Conteúdo Completo

1- Primeira parte

- [X]   Explicação sobre o Laravel e sobre a estrutura de pastas do projeto (lembrando que a 
            estrutura pode ser personalizada criando pastas como por exemplo 'repositories' e 'requests')

- [x] Documentação do Laravel

- [X] .env e .env.example
- [x] Key
- [x] Conexão com banco de dados e com servidor de e-mail

- [x] Lista de Comandos do php artisan

- [x] Passar o projeto para pt-BR

- [x] Migrations
- [x] Prática que pode gerar otimização em momentos futuros: prefixo nos campos das tabelas
- [x] Estrutura das Migrations
- [x] Seeders
- [ ] Criptografia
- [x] Factories

- [x] O básico de Model
- [x] Eloquent (lembrar que não a suporte para relacionamento muitos para muitos, é necessário usar DB::)

- [x] O básico de Rotas
- [ ] Rotas nomeadas
- [ ] O básico de Controllers
- [ ] chamada de views passando variáveis
- [x] Debug (dd, ddd, ...)

- [ ] O básico das Views
- [ ] passando variáveis para a blade
- [ ] {{}},foreach, isset, coalescência (??, ou operador null-coalescing, ...)

- [ ] Adição do template adminlte

- [ ] Formulários (csrf, ...)
- [ ] Instalação de plugins

- [ ] Conexão com múltiplos bancos

- [ ] Instalação de plugins

- [ ] GIT

- [ ] Docker

## Links

https://laravel.com/docs/8.x/installation

https://laravelexamples.com/

https://laravel.initializer.dev/



## Exercício

- [ ] Importar este projeto ou criar um novo
- [ ] Configurar o .env para poder acessar o banco de dados

- [ ] Criar uma nova model e migration de Categorias (Apenas dados simples)
- [ ] Criar uma nova model e migration de Produtos (Apenas dados simples)

- [ ] Ajustar o relacionamento entre elas na model (Eloquent)
        Uma categoria representa diversos produtos, um produto tem apenas uma categoria


- [ ] Criar uma controller e as rotas necessárias para gerenciar as tarefas seguintes:

- [ ] Tela de Cadastro de Categoria
- [ ] Tela de exibição das categorias

- [ ] Tela de Cadastro de Produto
- [ ] Tela de exibição de Produtos, mostrando a categoria dele

- [ ] Modificar as rotas de cadastro para que apenas usuários logados possam acessar













## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[CMS Max](https://www.cmsmax.com/)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
