# Proyecto de Gestión de Usuarios y Proyectos (Laravel + Vue + Inertia)

Este proyecto es una aplicación web desarrollada con Laravel en el backend y Vue mediante Inertia en el frontend. La aplicación permite gestionar usuarios y proyectos dentro de un mismo sistema, con control de roles y autenticación.

## Descripción general

La aplicación simula un pequeño panel de gestión donde existen usuarios con distintos roles y proyectos asociados a ellos. Está pensada como práctica de desarrollo full stack utilizando Laravel sin Blade tradicional, trabajando con Vue como interfaz.

Se ha utilizado Breeze con Inertia para la autenticación y la estructura base del frontend.

## Funcionalidades principales

### Autenticación
- Registro de usuarios
- Inicio de sesión
- Cierre de sesión
- Acceso protegido mediante middleware (solo usuarios logueados)

### Gestión de usuarios (CRUD)
- Listado de usuarios
- Creación de nuevos usuarios
- Edición de usuarios
- Eliminación de usuarios
- Asignación de rol (alumno o profesor)

### Sistema de roles
Existen dos tipos de usuarios:
- Profesor
- Alumno

Restricciones:
- Los profesores pueden crear, editar y borrar proyectos
- Los alumnos solo pueden ver los proyectos (no pueden modificarlos)

### Gestión de proyectos (CRUD)
- Listado de proyectos
- Crear proyectos (solo profesores)
- Ver detalles de un proyecto
- Editar proyectos (solo profesores)
- Eliminar proyectos (solo profesores)
- Cada proyecto queda asociado al usuario que lo crea
- En la tabla de proyectos se muestra el creador del proyecto

### Interfaz
- SPA con Vue + Inertia
- Navegación sin recargas completas
- Menú superior con acceso a:
  - Proyectos
  - Usuarios
  - Cerrar sesión
- Diseño sencillo con Tailwind CSS

## Tecnologías utilizadas
- Laravel (backend y API)
- Vue 3 (frontend)
- Inertia.js (conexión entre Laravel y Vue)
- Breeze (autenticación)
- SQLite (base de datos)
- Tailwind CSS (estilos)

## Base de datos
El proyecto utiliza SQLite y cuenta principalmente con:
- Tabla `users` (usuarios con rol)
- Tabla `proyectos` (proyectos vinculados a un usuario mediante `user_id`)

## Instalación y ejecución

1. Clonar el repositorio:
```bash
git clone <url-del-repositorio>
cd proyecto_vue_inertia