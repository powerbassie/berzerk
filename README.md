# Berzerk-events
Underground music events management system

Vereisten
- PHP (versie 8.1+)
- Composer
- Node.js
- MySQL
- Git 

Instructies 

Stap 1: Repository Klonen
Kloon de repository naar je lokale machine:
git clone https://github.com/powerbassie/berzerk.git
cd berzerk

Stap 2: PHP Dependencies Installeren
Installeer alle benodigde PHP-packages met Composer:
composer install

Stap 3: Frontend Dependencies Installeren
Installeer Node.js:
npm install

Stap 4: .env Configureren
Maak een .env bestand aan:
cp .env.example .env

Pas het .env bestand aan met jouw databasegegevens:
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=DB_name
DB_USERNAME=DB_user
DB_PASSWORD=DB_pass

APP_URL=http://localhost (eventueel berzerk-events.test)

Stap 5: Applicatiesleutel Genereren
Genereer een unieke applicatiesleutel:
php artisan key:generate

Stap 6: Database Migraties Uitvoeren
Voer database migraties uit om de tabellen aan te maken:

php artisan migrate --seed

Applicatie Starten
Stap 1: Start de Laravel Development Server
Start de ingebouwde server van Laravel:
php artisan serve

De applicatie is nu toegankelijk via http://localhost:8000 (of berzerk-events.test).

npm run build
