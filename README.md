# Carousel

Este es un proyecto de prueba de funcionalidad de un carrusel en Tailwind CSS y Alpine Js. Este proyecto utiliza Laravel 11.

## Requisitos

-   PHP >= `8.2`
-   Composer
-   MySQL u otro sistema de base de datos compatible

## Instalación

Sigue estos pasos para configurar el proyecto en tu entorno local:

### 1. Clonar el repositorio

```bash
git clone https://github.com/DonMartinWorks/Carrousel
cd Carrousel
```

<p>Este comando clona el repositorio del proyecto y navega a la carpeta del proyecto.</p>

2. Instalar dependencias

```bash
composer install
```

<p>Este comando instala todas las dependencias de PHP necesarias para el proyecto, que están listadas en el archivo `composer.json.`</p>

3. Configurar el archivo `.env`
   Renombra el archivo `.env`.example a `.env` y configura tus variables de entorno. Asegúrate de que tus credenciales de base de datos estén correctas.

```bash
cp .env.example .env
```

#### Archivo `.env`

_El archivo `.env` en Laravel es un archivo de configuración que almacena variables de entorno para una aplicación. Estas variables se utilizan para configurar la aplicación en diferentes entornos, como desarrollo, pruebas y producción. El archivo `.env` se utiliza para almacenar información confidencial, como contraseñas de bases de datos, claves de API y credenciales de correo electrónico, que no deben ser compartidas en el código fuente de la aplicación. En su lugar, se almacenan en el archivo `.env` y se acceden a través de la función env en Laravel._

<p>Este comando copia el archivo `.env.example` a `.env` y permite que configures tus variables de entorno.</p>

4. Generar la clave de aplicación

```bash
php artisan key:generate
```

Este comando genera una nueva clave de aplicación en el archivo .env. Esta clave se utiliza para cifrar datos de sesión y otros datos sensibles.

5. Migrar la base de datos

```bash
php artisan migrate
```

Este comando ejecuta las migraciones y crea todas las tablas necesarias en tu base de datos según los archivos de migración en la carpeta database/migrations.

6. Poblar la base de datos
   Si tienes seeders configurados para poblar la base de datos con datos de prueba, ejecuta el siguiente comando:

```bash
php artisan db:seed
```

Este comando ejecuta los seeders y pobla la base de datos con los datos de ejemplo definidos.

7. Compilar los assets front-end

```bash
npm install
```

```bash
npm run dev
```

Estos comandos instalan las dependencias front-end y compilan los assets utilizando Vite.

8. Iniciar el servidor de desarrollo

```bash
php artisan serve
```

Este comando inicia un servidor de desarrollo local para que puedas acceder a tu aplicación en http://localhost:8000.

Comandos Útiles
Clear Cache: Limpia el caché de la aplicación

```bash
php artisan cache:clear
```

Config Cache: Recompila la caché de configuración

```bash
php artisan config:cache
```

Route Cache: Recompila la caché de rutas

```bash
php artisan route:cache
```

View Cache: Recompila la caché de vistas

```bash
php artisan view:cache
```
