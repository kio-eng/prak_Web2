# Inventory System API v1
Base URL: `http://localhost:8000/api/v1`

## Authentikasi 
* **POST /register** - mendaftarkan akun pengguna baru
* **POST /login** - masuk ke sistem dan mendapatkan token akses API 


## Categories barang
* **GET /categories** - menarik semua daftar kategori
* **POST /categories** - menambahkan kategori baru 
* **GET /categories/{id}** - melihat detail satu kategori
* **PUT /categories/{id}**  - memperbarui nama kategori
* **DELETE /categories/{id}** - menghapus kategori {khusus Admin}

## Item Barang
* **GET /items** - menarik semua daftar item kategori
* **POST /items** - menambahkan item barang baru 
* **GET /items/{id}** - melihat detail satu item kategori
* **PUT /items/{id}**  - memperbarui data spesifik item
* **DELETE /items/{id}** - menghapus item barang {khusus Admin}