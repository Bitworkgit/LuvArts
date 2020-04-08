# LuvArts
Repositório de desenvolvimento da plataforma LuvArt's

## Ferramentas necessárias

* Node.js: https://nodejs.org/en/
* PHP: https://www.apachefriends.org/pt_br/index.html
* Composer: https://getcomposer.org/
* Laravel: https://laravel.com/docs/6.x/installation
* IDE recomendada: https://code.visualstudio.com/

## Instalação do Projeto

* Baixar o projeto
* Iniciar Apache e Mysql no xampp
* Acessar a url localhost/phpmyadmin/
* Criar um banco de dados com o nome "laravel"

rodar o seguinte comando dentro da pasta src:

```sh
php install.php
```

## Modo de uso

* Ligar Apache e Mysql no Xampp
* ir dentro da pasta src e rodar o comando "php artisan serve"
* Abrir a url que aparecer no terminal

## Atualizando sua Versão do projeto
rodar os seguintes comando dentro da pasta src:

```sh
git pull
```

```sh
php update.php
```

## Como publicar suas alterações

```sh
git add .
```

```sh
git commit -m "descrição da alteração feita"
```

```sh
git push origin master
```

## Desenvolvimento

Regras e dicas:
* Todo o template não implantado deve ser amarzenado em uma pasta ao lado de src chamada templates
* As paginas do projeto implantadas ficam em src/resources/views
* O js fica em src/resources/js
* O local de trabalho com css deve ser escolhido pelo Front-End podendo ser em src/resources/sass ou src/public

## Créditos
* Bruna Timoteo  73389
* Higor Freitas 104481
* Thiago P. Bonfogo 103750 Desenvolvedor Backend
* Mateus Meira 103849 
* Bruno César  102473 Desenvolvedor Backend
