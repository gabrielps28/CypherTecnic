# 🧪 Laravel Products API

API RESTful construida en Laravel que permite gestionar productos y sus precios en distintas monedas. Utiliza una arquitectura limpia (hexagonal) basada en Domain, Application, Infrastructure y Controllers.

---

## 🚀 Requisitos

- PHP >= 8.1
- Composer
- Laravel >= 10
- MySQL u otra base de datos compatible
- Node.js (solo si usas frontend o compilas assets)

---

## ⚙️ Instalación

1. Clona el repositorio:

```bash
git clone https://github.com/gabrielps28/CypherTecnic.git
cd CypherTecnic

```bash
composer install

```bash
php artisan key:generate

```bash
php artisan migrate
php artisan serve


1. Clona el repositorio:
La API estará disponible en:
📍 http://localhost:8000/api

| Método | Ruta                      | Descripción                             |
| ------ | ------------------------- | ------------------------------          |
| GET    | /api/products             | Listar todos los productos              |
| GET    | /api/products/{id}        | Mostrar un producto específico          |
| POST   | /api/products             | Crear un nuevo producto                 |
| PUT    | /api/products/{id}        | Actualizar un producto                  |
| DELETE | /api/products/{id}        | Eliminar un producto                    |
| GET    | /api/products/{id}/prices | Obtener precios del producto            |
| POST   | /api/products/{id}/prices | Registrar un nuevo precio a un producto |

