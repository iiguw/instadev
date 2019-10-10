# Instadev - Teste Técnico da UOTS

Projeto desenvolvido com base no modelo do [Instagram](https://www.instagram.com/), com feed infinito e atualização e upload de fotos e legendas.


## O desafio

_!"Seu desafio é criar uma página ao estilo Instagram com feed e CRUD de posts. [...] Para este projeto você deve possuir uma API e um front-end (Single Page Application)."_


## Tecnologias utilizadas

- [Laravel](https://laravel.com/) - Framework PhP (para o backend);
- [VueJS](https://vuejs.org/) - Framework Javascript (para o frontend);
- [Semantic UI](https://semantic-ui.com/) - Framework para estilização.


## Pré-requisitos de instalação

- Composer;
- MySQL;
- NPM;
- PhP.


## Instalação

Primeiramente cheque, por favor, o guia com os requisitos para a instalação do Laravel antes de começar. [Guia Oficial](https://laravel.com/docs/5.8/installation#installing-laravel)

Clone o repositório
```
git clone git@https://github.com/iiguw/instadev.git
```

Acesse a pasta em que o repositório foi instalado e instale as dependências com o composer
```
composer install
```

Agora instale através do npm
```
npm install
```
Copie o arquivo env de exemplo e faça as mudanças de configuração necessárias no seu novo arquivo .env
```
cp .env.example .env
```

Execute as migrations para do banco de dados (**Configure a conexão com o banco de dados no arquivo .env antes de migrar**)
```
php artisan migrate
```

Se desejar popular o banco de dados, utlize os seeders para tal
```
php artisan db:seed
```

Faça a integração dos módulos do frontend
```
npm run dev
```

Inicie o servidor de desenvolvimento
```
php artisan serve
```

Agora basta copiar o link que foi gerado e colá-lo em seu navegador, como no exemplo:
> http://127.0.0.1:8000


## Licença

MIT
