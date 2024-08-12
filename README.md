Health Update
    Github Repository

Setting Up
Clone Repo:

    git clone git@github.com:netflams10/laboratory-test.git
    cd laboratory-test

Docker Setup

    docker-compose up -d
    docker compose exec php bash
        composer install
        php artisan migrate --seed
        php artisan tinker
            -> User::latest()->first() // choose any user to get token

------------------------------------------------------------------------------------------------

Remove Docker File

    docker compose down -v

Notes

    nginx connects to the application with default on port: 3050
    use /api on base url
    if you are using docker-compose please docker compose might give error response, Please know which you are using.
