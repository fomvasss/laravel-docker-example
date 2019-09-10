## Example project with using Laravel & Docker

### Install

Install: git, docker, docker-compoose

1) `git clone <this repo>`

2) See & configure (if need) `docker-compose.yml` in root path

3) `docker-compose up --build`

4) Run container `docker-compose exec app  bash`

4.1) `composer install`

4.2) Edit `.env`

4.3) `php artisan migrate --seed`

5) See URL: 
 - Site: `http://localhost:8080` (For login: admin@app.com, password)
 - Adminer: `http://localhost:6080` (For login: root, password)