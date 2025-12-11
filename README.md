<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Sistema de Gestión de Citas Médicas con Web Semántica

Proyecto académico desarrollado con **Laravel 12** que implementa **Web Semántica** usando **Schema.org** y **JSON-LD** para mejorar el SEO y la interoperabilidad con motores de búsqueda.

## 🎯 Características

- ✅ CRUD de perfiles de médicos
- ✅ Implementación de JSON-LD con vocabulario Schema.org
- ✅ Validación exitosa con Schema.org Validator (0 errores)
- ✅ Factory y Seeders con datos de prueba (100 médicos)
- ✅ Arquitectura MVC con Laravel
- ✅ Base de datos MySQL

## 🛠️ Tecnologías

- **Backend:** Laravel 12.42.0
- **Frontend:** Blade Templates, HTML5, CSS3
- **Base de datos:** MySQL (XAMPP)
- **Web Semántica:** Schema.org, JSON-LD
- **PHP:** 8.2.12
- **Control de versiones:** Git + GitHub

## 📋 Requisitos Previos

- PHP >= 8.2
- Composer
- MySQL
- XAMPP (recomendado)
- Git

## 🚀 Instalación

### 1. Clonar el repositorio

```bash
git clone https://github.com/Wladyes/proyecto_web_semantica.git
cd proyecto_web_semantica
2. Instalar dependencias
bash


composer install
npm install
3. Configurar variables de entorno
bash


cp .env.example .env
php artisan key:generate
4. Configurar base de datos en .env
env


DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3307
DB_DATABASE=proyecto_web_semantica
DB_USERNAME=root
DB_PASSWORD=
5. Ejecutar migraciones y seeders
bash


php artisan migrate:fresh --seed
6. Levantar servidor
bash


php artisan serve --host=192.168.100.92 --port=8000
7. Acceder a la aplicación
text


http://192.168.100.92:8000
🌐 Estructura de Web Semántica
Cada perfil de médico incluye metadatos estructurados con JSON-LD:
json


{
  "@context": "https://schema.org",
  "@type": "Physician",
  "name": "Dr. Ejemplo",
  "email": "ejemplo@hospital.com",
  "telephone": "+593-999-999-999",
  "medicalSpecialty": "http://schema.org/Cardiovascular",
  "hospitalAffiliation": {
    "@type": "Hospital",
    "name": "Hospital Central"
  }
}
✅ Validación Schema.org
0 errores
0 advertencias
Validado con: https://validator.schema.org/
📂 Estructura del Proyecto
text


proyecto_web_semantica/
├── app/
│   └── Http/Controllers/
│       └── MedicoController.php
├── database/
│   ├── factories/UserFactory.php
│   ├── migrations/
│   └── seeders/DatabaseSeeder.php
├── resources/
│   └── views/
│       ├── layouts/app.blade.php
│       └── medicos/
│           ├── index.blade.php
│           └── show.blade.php
└── routes/
    └── web.php
🎓 Información Académica
Materia: Arquitectura de Software
Institución: [Tu Universidad]
Período: 2025
Estudiante: [Tu Nombre]
📝 Funcionalidades
Implementadas:
✅ Listado de médicos
✅ Perfil individual con JSON-LD
✅ Seeders automáticos
✅ Mapeo de especialidades a Schema.org
Por implementar:
⏳ Sistema de autenticación
⏳ API REST con JSON-LD
⏳ Frontend mejorado con Bootstrap
🤝 Contribuciones
Este es un proyecto académico. Las sugerencias son bienvenidas.
📄 Licencia
MIT License
The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
