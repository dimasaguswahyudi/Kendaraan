Instalasi Laravel 8
1. Tentukan Lokasi File
2. Clone Project contoh: Git Clone "https://github.com/dimasaguswahyudi/Kendaraan.git"
3. Install Vendor pada project try: Composer Install
4. Setting ENV seperti yang sudah disediakan pada file .env.example
5. Generate JWT Auth try: php artisan jwt:secret
6. Migrate Database dan Seeder try: php artisan migrate --seed
7. Run Project try: Php artisan serv
8. Import Collection pada postman di file "TestBackendInosoft.postman_collection.json"
8. Good Job

Running Response CRUD

1. Login
    1.A. Http Request: http://localhost:8000/api/auth/login
    1.B. Method POST
    1.C. Run
2. Show Profile/Me
    2.A. Http Request: http://localhost:8000/api/auth/me
    2.B. Method POST
    2.C Run
3. Logout
    3.A. Http Request: http://localhost:8000/api/auth/logout
    3.B. Method POST
    3.C Run

Setting Token Terlebih dahulu
1. Copy Token pada hasil Respons saat Login
2. Pilih "Authorization"
3. Pilih Type "Bearer Token"
4. Paste Token

4. Lihat Semua Penjualan
    4.A. Http Request: http://localhost:8000/api/penjualan
    4.B. Method GET
    4.C. Run
5. Lihat Penjualan Per Kendaraan
    5.A Http Request: http://localhost:8000/api/getpenjualan/{kendaraan_id}
    5.B Method GET
    5.C Run
