# LuvArts
Branch para presentação e avaliação por parte dos professores...

## Ferramentas necessárias

* Node.js: https://nodejs.org/en/
* xamp: https://www.apachefriends.org/download.html 
* Composer: https://getcomposer.org/
* Laravel: https://laravel.com/docs/7.x/installation
* IDE recomendada: https://code.visualstudio.com/

Observe que o projeto foi desenvolvido em php 7.2.x e 7.3.x, usando windows e node 12.16.x por tanto se faz necessário que você use o mesmo ambiente para que tudo funcione corretamente. Não nos responsabilizamos por erros em ambientes ou configurações diferentes.

## Instalação do Projeto

Passos: 

* Baixar o projeto
* Iniciar Apache e Mysql
* Acessar a url localhost/phpmyadmin/
* Criar um banco de dados com o nome "laravel"
* Ir para a Branch 'Apresentação'

rodar o seguinte comando dentro da pasta src:

```sh
php install
```
E por fim mover a pasta src/images para src/storage/app/public isso se faz necessário para que você possa ver o site funcionar com exemplos de produtos já cadastrados. O processo de instalação pode demorar um pouco.

## Modo de uso

* Ligar Apache e Mysql no Xampp
* ir dentro da pasta src e rodar o comando "php artisan serve"
* Abrir a url que aparecer no terminal

## Informações auxiliares

Informações tecnicas:
* O projeto foi desenvolvido usando o padrão mvc
* Os controllers ficam em src/app/Http/Controllers
* Os models ficam em src/app/Model
* As views ficam em src/resources/views
* As rotas ficam em src/routes/web.php
* As migrations ficam em src/database/migrations

para mais informações contate: +55 19 99848-9607

## Considerações
* O projeto pode ter um peso médio de 300 mb, isso ocorre pela necessidade de portar imagens para os produtos de exemplo, porém sem elas o projeto pesa muito menos.

* Nas primeiras visitas a uma pagina o sistema ainda esta montando caches então pode ser um pouco lento variando de computador para computador, mexa com calma...

* Esse não é um projeto que esta em desenvolvimento unica exclusivamente para a PA, é algo que pretendemos levar para frente e necessita de muito mais tempo para ser terminado então você pode ver algumas partes incompletas.

* Como se trata de um site de comercialização de artes impressas, as imagens tem o tamanho de uma folha A4 isso pode e provavelmente vai implicar em um carregamento mais lento das imagens em determinadas partes do site onde a resolução delas não pode ou não deve ser restringida.


## Créditos
* Bruna Timoteo  73389
* Higor Freitas 104481
* Thiago P. Bonfogo 103750 
* Mateus Meira 103849 
* Bruno César  102473
