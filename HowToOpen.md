install https://getcomposer.org/
isntall https://nodejs.org/en

Open project

----------------------Step 1----------------------
create ".env" in MSI folder
Copy from ".env.example" and paste to ".env"

----------------------Step 2----------------------
in terminal write the command:

1.    composer install
then
2.    npm install

if composer install doesn't work, then:  
composer install --ignore-platform-reqs

----------------------Step 3----------------------
Open Project in local server
Create 2 terminals and in the first one enter:
        npm run dev
in the second terminal:
        php artisan serve
and press CTR + left button to address

