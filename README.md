## You need to install these programs:
- install https://getcomposer.org/
- isntall https://nodejs.org/en

- Once installed open the project.
- create ".env" in MSI folder
- Copy from ".env.example" and paste to ".env"

## in terminal write the command:

1.    composer install
2.    npm install

## composer install doesn't work
- then type:  
- composer install --ignore-platform-reqs

## Open Project in local server
- Create 2 terminals and in the first one enter:
-     npm run dev
- in the second terminal:
-     php artisan serve
- and press CTR + left button to addresss
- if the page does not open, click "generate api key" and refresh