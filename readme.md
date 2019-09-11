## Example project with using Laravel & Docker

### Install

Install local: git, docker, docker-compoose

1) Run `git clone <this repo>` and `cd` dir 

2) See & configure (if need) `docker-compose.yml` in root path

3) Run `docker-compose up --build`

4) Enter to container `docker-compose exec app  bash`

5) Run in container `composer install`

6) Edit `.env` for Laravel

7) Run migrate & seeder`php artisan migrate --seed`

Go to URL: 
 - Site: `http://localhost:8080` (for login: admin@app.com, password)
 - Adminer: `http://localhost:6080` (for login: root, password)
 - PhpMyAdmin: `http://localhost:6081` (for login: root, password)

 ### Links
 - https://docs.docker.com/install/linux/docker-ce/ubuntu
 - https://docs.docker.com/compose/install