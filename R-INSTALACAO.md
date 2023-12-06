# Docker with sail + Laravel + Breze + Lirewire

## Procedimento na instalação deste projeto

<code>git clone https://github.com/wadyntecno/LaravelBreezeLirewire.git "renomearoprojeto" && "renomearoprojeto"  </code>

#### Generate application key:
<code> cp .env.example .env </code>

#### trocar o nome do BANCO DE DADOS no projeto 
<p>DB_DATABASE="mesmoNomeDoProjeto"</p>

#### Setup configuration:
<code>  composer install </code>

### Caso  o primeiro comando não funcione
#### RODAR o abaixo
<code> docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php82-composer:latest \
    composer install --ignore-platform-reqs </code>


####
##### exemplo escrito dentro no BD condicionar para esta configuração
<code> DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=olw-1dep
DB_USERNAME=sail
DB_PASSWORD=password </code>

#### VITE - não funciona (colocar no vite.config.js)
<code> server: {
        hmr: {
            host: "localhost"
        }
    }, </code>

#### colocar no package.json
<code>   "dev": "vite --host localhost", </code>

#### INSTALAR O NPM
<code> npm install </code>

#### ativar pacotes
<code> sail up -d </code>

#### pra finalizar::: em outro terminal
<code> npm run dev </code>

