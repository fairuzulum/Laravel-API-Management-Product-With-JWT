# Management Product API


## Instalasi

1. Clone repositori:
    ```bash
    git clone https://github.com/fairuzulum/Laravel-API-Management-Product-With-JWT.git
    ```

2. Install dependencies:
    ```bash
    composer install
    ```

3. Salin file `.env.example` menjadi `.env` dan sesuaikan variabel:
    ```bash
    cp .env.example .env
    ```

4. Generate application key:
    ```bash
    php artisan key:generate
    ```

5. Konfigurasi pengaturan database di file `.env`.

6. konfigurasi JWT dan generate JWT secret:
    ```bash
    php artisan vendor:publish --provider="Tymon\JWTAuth\Providers\LaravelServiceProvider"
    php artisan jwt:secret
    ```

7. Jalankan migrasi:
    ```bash
    php artisan migrate
    ```

8. Jalankan UserSeeder:
    ```bash
    php artisan db:seed UserSeeder
    ```

9. Jalankan CategorySeeder:
    ```bash
    php artisan db:seed CategorySeeder
    ```

10. Jalankan ProductSeeder:
    ```bash
    php artisan db:seed ProductSeeder
    ```

11. Buat symbolic link untuk storage:
    ```bash
    php artisan storage:link
    ```

12. Jalankan laravel:
    ```bash
    php artisan serve
    ```

## Endpoint API

### Autentikasi

- **Register**
  - **URL:** `/api/register`
  - **Metode:** `POST`
  - **Request Body:**
    ```json
    {
        "email": "user@gmail.com",
        "password": "password"
    }
    ```

- **Login**
  - **URL:** `/api/login`
  - **Metode:** `POST`
  - **Request Body:**
    ```json
    {
        "email": "user@gmail.com",
        "password": "password"
    }
    ```

### Kategori

- **Get All Categories**
  - **URL:** `/api/category-products`
  - **Metode:** `GET`
  - **Headers:**
    - `Authorization: Bearer <token>`

- **Get Category by ID**
  - **URL:** `/api/category-products/{id}`
  - **Metode:** `GET`
  - **Headers:**
    - `Authorization: Bearer <token>`

- **Create Category**
  - **URL:** `/api/category-products`
  - **Metode:** `POST`
  - **Headers:**
    - `Authorization: Bearer <token>`
  - **Request Body:**
    ```json
    {
        "name": "New Category"
    }
    ```

- **Update Category**
  - **URL:** `/api/category-products/{id}`
  - **Metode:** `PUT`
  - **Headers:**
    - `Authorization: Bearer <token>`
  - **Request Body:**
    ```json
    {
        "name": "Updated Category"
    }
    ```

- **Delete Category**
  - **URL:** `/api/category-products/{id}`
  - **Metode:** `DELETE`
  - **Headers:**
    - `Authorization: Bearer <token>`

### Produk

- **Get All Products**
  - **URL:** `/api/products`
  - **Metode:** `GET`
  - **Headers:**
    - `Authorization: Bearer <token>`

- **Get Product by ID**
  - **URL:** `/api/products/{id}`
  - **Metode:** `GET`
  - **Headers:**
    - `Authorization: Bearer <token>`

- **Create Product**
  - **URL:** `/api/products`
  - **Metode:** `POST`
  - **Headers:**
    - `Authorization: Bearer <token>`
  - **Request Body (form-data):**
    - `product_category_id`: `1`
    - `name`: `New Product`
    - `price`: `100.00`
    - `image`: (file)

- **Update Product**
  - **URL:** `/api/products/{id}`
  - **Metode:** `PUT`
  - **Headers:**
    - `Authorization: Bearer <token>`
  - **Request Body (form-data):**
    - `product_category_id`: `1`
    - `name`: `Updated Product`
    - `price`: `150.00`
    - `image`: (file)

- **Delete Product**
  - **URL:** `/api/products/{id}`
  - **Metode:** `DELETE`
  - **Headers:**
    - `Authorization: Bearer <token>`


