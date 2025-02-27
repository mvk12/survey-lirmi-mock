# Survey Mock
<a name="readme-top"></a>

For testing purposes

### Construido con

- [![Laravel][laravel-badge]][laravel-url]

<p align="right">(<a href="#readme-top">regresar arriba</a>)</p>


### Instalación

1. Clone repository
   ```sh
   git clone git@github.com:mvk12/survey-lirmi-mock.git
   ```

2. Instalar dependencias composer
   ```sh
   composer install
   ```

3. Create `.env` file
   ```sh
   cp .env.example .env
   ```

4. Generate app key
   ```sh
   php artisan key:generate
   ```

5. Create local database
   ```sh
   touch database/database.sqlite
   ```

6. Migrate tables
   ```sh
   php artisan migrate
   ```

7. Run app 

   ```sh
   php artisan serve
   ```

<p align="right">(<a href="#readme-top">regresar arriba</a>)</p>

<!-- MARKDOWN LINKS & IMAGES -->
<!-- https://www.markdownguide.org/basic-syntax/#reference-style-links -->

<!--
Para la generación de insignias puedes visitar https://shields.io/
Tambien puede ser util visitar https://simpleicons.org/ para obtener los iconos de las tecnologías
Otro enlace util es https://developer.mozilla.org/en-US/docs/Glossary/percent-encoding
-->

[laravel-badge]: https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white
[laravel-url]: https://laravel.com/
