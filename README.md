<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

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

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).


# 📞 Agenda Telefónica - Aplicación CRUD

Una aplicación web completa para la gestión de contactos telefónicos, implementando las operaciones CRUD (Crear, Leer, Actualizar, Eliminar) utilizando Laravel en el backend y Vue.js en el frontend. Las interacciones entre el frontend y el backend se realizan a través de una API RESTful con llamadas asíncronas usando Axios.

## ✨ Características

* **Crear Contacto:** Añade nuevos contactos con nombre, teléfono y fecha de nacimiento.
* **Listar Contactos:** Visualiza todos los contactos existentes en una tabla.
* **Editar Contacto:** Modifica la información de un contacto existente.
* **Eliminar Contacto:** Borra contactos de la agenda.
* **Validación de Datos:** Validación de los campos del formulario en el lado del servidor.
* **Interfaz Responsiva:** Diseñada con Bootstrap 5 para una buena experiencia en diferentes dispositivos.
* **Mensajes de Alerta:** Feedback visual al usuario sobre el éxito o el error de las operaciones.

## 🚀 Tecnologías Utilizadas

* **Backend:**
    * Laravel (PHP Framework)
    * PHP
    * MySQL / SQLite (o cualquier base de datos compatible con Laravel)
* **Frontend:**
    * Vue.js 3
    * Axios (para llamadas HTTP asíncronas)
    * JavaScript
    * Bootstrap 5 (CSS Framework)
* **Desarrollo:**
    * Vite (Bundler de frontend)
    * Composer (Manejador de dependencias de PHP)
    * NPM / Yarn (Manejador de paquetes de Node.js)

## 📦 Instalación

Sigue estos pasos para poner en marcha el proyecto en tu máquina local.

### Requisitos Previos

Asegúrate de tener instalado lo siguiente:

* PHP >= 8.1
* Composer
* Node.js >= 16 y NPM >= 8 (o Yarn)
* Un servidor web como Apache o Nginx (o puedes usar el servidor de desarrollo de PHP de Laravel)
* MySQL (o el sistema de base de datos de tu elección)

### Pasos de Instalación

1.  **Clonar el repositorio:**
    ```bash
    git clone [https://github.com/tu-usuario/nombre-de-tu-repositorio.git](https://github.com/tu-usuario/nombre-de-tu-repositorio.git)
    cd nombre-de-tu-repositorio
    ```
    (Reemplaza `tu-usuario/nombre-de-tu-repositorio` con la URL real de tu repositorio Git).

2.  **Instalar dependencias de Composer (Backend):**
    ```bash
    composer install
    ```

3.  **Configurar el archivo `.env`:**
    * Copia el archivo de entorno de ejemplo:
        ```bash
        cp .env.example .env
        ```
    * Genera la clave de la aplicación:
        ```bash
        php artisan key:generate
        ```
    * Abre el archivo `.env` y configura tus credenciales de base de datos:
        ```dotenv
        DB_CONNECTION=mysql
        DB_HOST=127.0.0.1
        DB_PORT=3306
        DB_DATABASE=nombre_de_tu_base_de_datos # Por ejemplo: agenda_db
        DB_USERNAME=tu_usuario_db
        DB_PASSWORD=tu_password_db
        ```
    * Asegúrate de crear la base de datos en tu servidor de MySQL (por ejemplo, `agenda_db`).

4.  **Ejecutar migraciones de la base de datos:**
    ```bash
    php artisan migrate
    ```
    Esto creará la tabla `contacts` (o `contactos` si has cambiado el nombre de la tabla en el modelo) en tu base de datos.

5.  **Instalar dependencias de NPM (Frontend):**
    ```bash
    npm install
    # o si usas yarn
    # yarn install
    ```

## 🏃 Uso

Para ejecutar la aplicación, necesitarás dos terminales: una para el servidor de Laravel y otra para el servidor de desarrollo de Vite.

1.  **Iniciar el servidor de Laravel (Backend):**
    Abre la primera terminal en la raíz de tu proyecto y ejecuta:
    ```bash
    php artisan serve
    ```
    Esto iniciará el servidor de Laravel en `http://127.0.0.1:8000`.

2.  **Iniciar el servidor de desarrollo de Vite (Frontend):**
    Abre la segunda terminal en la raíz de tu proyecto y ejecuta:
    ```bash
    npm run dev
    # o si usas yarn
    # yarn dev
    ```
    Esto iniciará el servidor de Vite y compilará tus assets de frontend.

3.  **Acceder a la aplicación:**
    Abre tu navegador web y visita:
    ```
    [http://127.0.0.1:8000](http://127.0.0.1:8000)
    ```
    Deberías ver la interfaz de la agenda telefónica lista para usar.

### Para Compilar para Producción

Si deseas compilar los assets de frontend para un entorno de producción (sin necesidad de ejecutar `npm run dev`), ejecuta:
```bash
npm run build
# o si usas yarn
# yarn build