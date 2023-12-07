## 1. REGOLE GENERALI:

1. Nome Database = presto

2. Per clonare il progetto: 
    -lanciare git clone e avviare il progetto
    -lanciare composer install
    -lanciare npm i
    -lanciare php artisan storage:link
    -cp .env.example .env 
    -php artisan key:gen
    -creare database(se non già creato)
    -aggiornare .env con nome e pass del DB

3. DOPO AVER CLONATO IL PROGETTO 
    -entrare nel progetto
    -lanciare git pull
    -aprire progetto
    -composer update/install
    -php artisan migrate
