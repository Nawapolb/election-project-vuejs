## Blockchain For Election

Project Blockchain for Election

## Install Project

Step 1 : Install node_modules

```
    npm install
```

Step 2 : Duplicate file ".env.example" and rename it as ".env" 
<br/><br/>
Step 3 : As follows config Database in line 9 - 14
```
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=electiondb
    DB_USERNAME=root
    DB_PASSWORD=
```

Step 4 : Update composer
```
    composer update
```

Step 5 : go to MySQL DB and create DB name is "electiondb" and set type language is "utf8-general-ci"
<br/> your should run xampp or wampserver for run MySQL DB before use command.
<br/><br/>
How to go to phpmyadmin
```
    http://localhost/phpmyadmin
```

Step 6 : Migration DB

```
    php artisan migrate
```

Step 7 : Generate encryption key
```
    php artisan key:generate
```

your should run API and Blockchain for complete work.

## Run Project
```
    php artisan serve
```