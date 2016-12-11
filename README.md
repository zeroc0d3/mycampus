## MyCampus RestAPI

MyCampus is a simple restapi project for academic information system, using Dingo and JWT for authentication. Features cover:
* Campus profile
* Faculty (fakultas)
* Concentration (jurusan)
* Lecture (dosen)
* Student (mahasiswa)
* Courses (mata kuliah)
* Semester Courses (mata kuliah semester)
* Study Planing (rencana studi)
* Result Study (hasil studi) 

## Installation

### Step 1: Clone the repo
```
git clone https://github.com/zeroc0d3/mycampus
```

### Step 2: Prerequisites
```
cp .env.example .env
composer install
php artisan migrate
php artisan db:seed
php artisan key:generate
php artisan vendor:publish --provider="Tymon\JWTAuth\Providers\JWTAuthServiceProvider"
php artisan jwt:generate
```

### Step 3: Serve
```
php artisan serve
```

### Note about Apache
If you use Apache to serve this, you will need to add the following 2 lines to your .htaccess (or your virtualhost configuration):
```
RewriteCond %{HTTP:Authorization} ^(.*)
RewriteRule .* - [e=HTTP_AUTHORIZATION:%1]
```

### Step 4: Optimize & Clear cache
```
composer dumpautoload -o
php artisan cache:clear
php artisan view:clear
```

### Note about upgrade
If you have change from branch laravel 5.1 to laravel 5.2 you need to update the composer and run the step 4. 
```
composer update
```

### Login User
* username: admin@mycampus.app / user1@mycampus.app / user2@mycampus.app
* password: password

