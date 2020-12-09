# SortTheWorld

Symfony Project with the goal to Sort every type of Data. (currently only for textbased integer data)


# 🐳 Docker + PHP 7.4 + Nginx + Symfony 5

## Description

This Project is created to sort every type of data as fast and easy as possible.

1. It is created with the `symfony` framework to make changes easy.
2. It runs on the `nginx` server enviroment to ensure the best performance.
3. It gets deployed with `docker` to minimise the setup time. 


## Installation

1. Clone this rep!

2. Run `docker-compose up -d` in the sort-the-world directory.

3. The 2 containers are deployed: 

```
Creating symfony-docker_php_1   ... done
Creating symfony-docker_nginx_1 ... done
```

4. Open your Browser and type: `localhost` and press `ENTER`.

5. To stop the containers go to your terminal and type `strg+c`.

## Contents

1. **docker** directory contains the `php` and `nginx` config files and dockerfiles.

2. **mysql** directory contains all `mysql` data (for futre application).

3. **symfony** directory contains the `symfony` project.


## Docker manuals

- [Quickstart](https://docs.docker.com/get-started/)
- [Container](https://www.thegeekdiary.com/how-to-list-start-stop-delete-docker-containers/)

## Error fixes 

* `ERROR: port ... occupied`. If something like this comes up:
    * Check which process occupies the port
    * If possible shut it down.
