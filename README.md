# API Catalogo para un Ecommerce

## Requisitos

```sh
- Php 7.4
- MariaDB 10
- Laravel 7
- Nodejs 18
```
## Instalación

- Clonamos el repositorio

```sh
git clone https://github.com/ccjuantrujillo/api-catalogo.git
```

- Instalamos las dependencias de PHP

```sh
composer install
```

- Instalamos dependencias NPM

```sh
npm ci
```

- Construimos el assets

```sh
npm run dev
```

- Instalamos el archivo de configuracion y configuramos la base de datos

```sh
cp .env.example .env
```

- Generamos una llave para la aplicacion

```sh
php artisan key:generate
```

- Ejecutamos las migraciones

```sh
php artisan migrate
```

- Ejecutamos los seeders

```sh
php artisan db:seed
```

- Ejecutamos el servidor

```sh
php artisan serve
```
## Comprobamos las rutas de la API

Esta es la documentación de la API para la gestión de un sistema de e-commerce.

## Rutas de la API

### 1. Autenticación (Usuarios y Administradores)

| Método | Endpoint          | Descripción                                 |
| :----- | :---------------- | :------------------------------------------ |
| `POST` | `/api/register`   | Registro de un nuevo usuario                |
| `POST` | `/api/login`      | Inicio de sesión de un usuario              |
| `POST` | `/api/logout`     | Cierre de sesión (requiere token de auth) |
| `GET`  | `/api/profile`    | Obtener perfil del usuario autenticado      |

### 2. Productos (Acceso Público)

| Método | Endpoint                   | Descripción                           |
| :----- | :------------------------- | :------------------------------------ |
| `GET`  | `/api/productos`           | Listar todos los productos            |
| `GET`  | `/api/productos/{id}`      | Ver detalles de un producto específico |
| `GET`  | `/api/categorias`          | Listar todas las categorías           |
| `GET`  | `/api/categorias/{id}/productos` | Listar productos por categoría      |

### 3. Carrito de Compras (Requiere Autenticación)

| Método   | Endpoint                  | Descripción                                   |
| :------- | :------------------------ | :-------------------------------------------- |
| `GET`    | `/api/carrito`            | Ver contenido del carrito de compras          |
| `POST`   | `/api/carrito/agregar`    | Agregar un producto al carrito                |
| `PUT`    | `/api/carrito/actualizar` | Actualizar la cantidad de un producto en el carrito |
| `DELETE` | `/api/carrito/eliminar`   | Eliminar un producto del carrito              |
| `DELETE` | `/api/carrito/vaciar`     | Vaciar todo el contenido del carrito          |

### 4. Pedidos (Requiere Autenticación)

| Método | Endpoint             | Descripción                              |
| :----- | :------------------- | :--------------------------------------- |
| `POST` | `/api/pedidos`       | Crear un nuevo pedido (proceso de checkout) |
| `GET`  | `/api/pedidos`       | Listar todos los pedidos del usuario autenticado |
| `GET`  | `/api/pedidos/{id}`  | Ver detalles de un pedido específico del usuario |

### 5. Panel Administrativo (Solo Administradores)

#### 📦 Gestión de Productos

| Método   | Endpoint                      | Descripción                           |
| :------- | :---------------------------- | :------------------------------------ |
| `GET`    | `/api/admin/productos`        | Listar todos los productos            |
| `POST`   | `/api/admin/productos`        | Crear un nuevo producto               |
| `PUT`    | `/api/admin/productos/{id}`   | Actualizar un producto existente      |
| `DELETE` | `/api/admin/productos/{id}`   | Eliminar un producto                  |

#### 🗂 Gestión de Categorías

| Método   | Endpoint                      | Descripción                           |
| :------- | :---------------------------- | :------------------------------------ |
| `GET`    | `/api/admin/categorias`       | Listar todas las categorías           |
| `POST`   | `/api/admin/categorias`       | Crear una nueva categoría             |
| `PUT`    | `/api/admin/categorias/{id}`  | Actualizar una categoría existente    |
| `DELETE` | `/api/admin/categorias/{id}`  | Eliminar una categoría                |

#### 📋 Gestión de Pedidos

| Método | Endpoint                          | Descripción                         |
| :----- | :-------------------------------- | :---------------------------------- |
| `GET`  | `/api/admin/pedidos`              | Ver todos los pedidos               |
| `GET`  | `/api/admin/pedidos/{id}`         | Ver detalles de un pedido específico |
| `PUT`  | `/api/admin/pedidos/{id}/estado`  | Cambiar el estado de un pedido      |

---

### Autenticación

Para las rutas que requieren autenticación, se debe incluir un token JWT en el encabezado `Authorization` con el prefijo `Bearer`.

Ejemplo:
`Authorization: Bearer YOUR_JWT_TOKEN`
