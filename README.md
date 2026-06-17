<div align="center">

# 📦 Inventory — Sistema de Gestión de Inventario

### CRUD backend en PHP puro con conexión segura a MySQL

<img src="https://skillicons.dev/icons?i=php,mysql&theme=dark" />

</div>

---

## 📋 Descripción

Sistema backend de gestión de inventario construido en **PHP puro** con conexión a **MySQL** mediante PDO. Permite agregar, consultar, actualizar y eliminar productos de forma segura, usando prepared statements para prevenir inyección SQL.

## ✨ Características

- ➕ **Agregar productos** — nombre, cantidad, precio, imagen y categoría
- 📋 **Listado de productos** con filtro opcional por categoría
- ✏️ **Actualizar cantidad y precio** de productos existentes
- 🗑️ **Eliminar productos**
- 🔒 **Conexión segura vía PDO** con prepared statements (prevención de SQL injection)

## 🛠️ Stack Tecnológico

| Categoría | Tecnología |
|---|---|
| Lenguaje | PHP 7+ |
| Base de datos | MySQL |
| Acceso a datos | PDO (Prepared Statements) |

## 🚀 Instalación

```bash
git clone https://github.com/PabloHenao19/inventory.git
cd inventory
```

1. Crea una base de datos MySQL
2. Configura las credenciales de conexión en `database.php`
3. Sirve los archivos con un servidor PHP (Apache, Nginx o `php -S localhost:8000`)

## 📁 Estructura del proyecto

| Archivo | Función |
|---|---|
| `database.php` | Conexión PDO a la base de datos |
| `inventory_functions.php` | Funciones CRUD principales |
| `add_product.php` | Agregar un nuevo producto |
| `update_quantity.php` | Actualizar cantidad/precio |
| `delete_product.php` | Eliminar un producto |

## 👤 Autor

**Pablo Henao** — [GitHub](https://github.com/PabloHenao19) · [henaopablo16@gmail.com](mailto:henaopablo16@gmail.com)
