# Sistema de login com Slim 4 + Vue

Sistema simples de login com Slim Framework e Vue 3, com a separação de pastas backend e frontend.

# Levantando o backend

```sh
$ cd backend/ 
$ cp .env.example .env
$ composer install
$ npm i
$ php -S localhost:8585 -t public
```
### Configurando banco de dados `.env`
```sh
DATABASE_HOST=127.0.0.1
DATABASE_NAME=db_name
DATABASE_USER=root
DATABASE_PASSWORD=
```
### Acesse agora backend [http://localhost:8585](http://localhost:8585/) 
Se tudo ocorreu bem, irá surgir a seguinte mensagem: `Working...`

### Observação:
No arquivo `backend/public/index.php` atentar para restringir o Header `Access-Control-Allow-Origin` caso queria especificar um domínio. 

# Levantando o frontend

```sh
$ cd frontend/ 
$ npm i
$ npm run dev
```
Se tudo ocorreu bem, no terminal surgirá a url para clicar e abrir a tela de login: `http://localhost:porta`

### Referências:
[Sistema de Login com Vue 3](https://www.youtube.com/watch?v=He-TTa6Y3bo&list=PLyugqHiq-SKcDiCq0182RiqHQwX_wU9ou&t=3434s) - [Clube Full-Stack](https://www.youtube.com/@AlexandreCardoso)
