<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

 Sistema de Gestión de Citas Médicas con Web Semántica

Aplicación web desarrollada con Laravel que implementa Web Semántica usando Schema.org y JSON-LD para mejorar el SEO y la interoperabilidad con motores de búsqueda y asistentes de IA.

## 🎯 Características

- ✅ Gestión de perfiles de médicos
- ✅ Implementación de JSON-LD con vocabulario Schema.org
- ✅ Metadatos estructurados semánticamente
- ✅ Validación exitosa con Schema.org Validator
- ✅ Factory y Seeders para datos de prueba
- ✅ Arquitectura MVC con Laravel
- ✅ Interfaz responsive

## 🛠️ Tecnologías

- **Backend:** Laravel 12.x
- **Frontend:** Blade Templates, HTML5, CSS3
- **Base de datos:** MySQL
- **Web Semántica:** Schema.org, JSON-LD
- **PHP:** 8.2+
- **Control de versiones:** Git

## 📋 Requisitos Previos

- PHP >= 8.2
- Composer
- MySQL o MariaDB
- Servidor web (Apache/Nginx) o XAMPP
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
DB_PORT=3306
DB_DATABASE=nombre_de_tu_base_de_datos
DB_USERNAME=tu_usuario
DB_PASSWORD=tu_contraseña
5. Crear base de datos
Crear una base de datos MySQL con el nombre especificado en .env
6. Ejecutar migraciones y seeders
bash


php artisan migrate:fresh --seed
7. Levantar servidor de desarrollo
bash


php artisan serve
8. Acceder a la aplicación
Abrir navegador en: http://localhost:8000
🌐 Estructura de Web Semántica
Cada perfil de médico incluye metadatos estructurados con JSON-LD:
json


{
  "@context": "https://schema.org",
  "@type": "Physician",
  "name": "Nombre del Médico",
  "email": "email@ejemplo.com",
  "telephone": "+593-XXX-XXX-XXX",
  "medicalSpecialty": "http://schema.org/Cardiovascular",
  "hospitalAffiliation": {
    "@type": "Hospital",
    "name": "Nombre del Hospital"
  }
}
✅ Validación Schema.org
Los metadatos están validados con:
0 errores
0 advertencias
Herramienta: https://validator.schema.org/
📂 Estructura del Proyecto
text


proyecto_web_semantica/
├── app/
│   ├── Http/Controllers/
│   │   └── MedicoController.php
│   └── Models/
│       └── User.php
├── database/
│   ├── factories/
│   │   └── UserFactory.php
│   ├── migrations/
│   └── seeders/
│       └── DatabaseSeeder.php
├── resources/
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php
│       └── medicos/
│           ├── index.blade.php
│           └── show.blade.php
├── routes/
│   └── web.php
└── README.md
🎓 Contexto Académico
Proyecto desarrollado como parte de la materia de Arquitectura de Software, demostrando la implementación de:
- Patrones de diseño MVC
- Web Semántica con estándares W3C
- APIs RESTful
- Buenas prácticas de desarrollo
📖 Conceptos Implementados
Web Semántica
Uso de metadatos estructurados que permiten a máquinas entender el contenido:
- Schema.org: Vocabulario estándar para web semántica
- JSON-LD: Formato de serialización de datos enlazados
- SEO: Mejora en resultados de búsqueda (Rich Snippets)
Especialidades Médicas
Mapeo de especialidades a valores válidos de Schema.org:
- Cardiología → http://schema.org/Cardiovascular
- Pediatría → http://schema.org/Pediatric
- Dermatología → http://schema.org/Dermatology
[Ver mapeo completo en código fuente]
🔒 Seguridad
⚠️ IMPORTANTE:
- NO subir el archivo .env a repositorios públicos
- Cambiar credenciales por defecto en producción
- Usar HTTPS en ambientes productivos
- Implementar autenticación y autorización
🚧 Funcionalidades por Implementar
⏳ Sistema de autenticación
⏳ Gestión de citas
⏳ API REST completa
⏳ Panel administrativo
⏳ Frontend con framework moderno
