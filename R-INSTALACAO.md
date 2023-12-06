
## Instalação

#### Setup configuration:
<p> 

composer install

</p>

#### Generate application key:
<p>

cp .env.example .env

</p>

####
##### exemplo escrito dentro no BD condicionar para esta configuração
<p>

DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=olw-1dep
DB_USERNAME=sail
DB_PASSWORD=password

</p>

#### VITE - não funciona (colocar no vite.config.js)
<p>

server: {
        hmr: {
            host: "localhost"
        }
    },


</p>

#### colocar no package.json
<p>  "dev": "vite --host localhost",  </p>


#### INSTALAR O NPM
<p> npm install </p>


####
<p>

</p>

####
<p>

</p>