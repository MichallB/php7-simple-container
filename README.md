## Simple PHP 7 container with Xdebug
A simple container for PHP projects with Xdebug.

## Run command
`docker-compose up -d` or `podman-compose up -d`

## Notes
- Current Xdebug version: 3.0.2 (2020-01-16),
- HTTP server: Apache,
- Set the IP address for the debugging computer (`xdebug.client_host`) in the `php/php.ini-development`,
- If you want to change PHP version edit the `php/Dockerfile` (current PHP version: 7.2.31), 
- If you want to change directory for PHP project change `volumes` value in `docker-compose.yml` file. 
