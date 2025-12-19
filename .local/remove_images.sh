#!/bin/bash

# Скрипт для удаления Docker образов проекта

docker rmi jwt_auth_api-php83:latest jwt_auth_api-caddy:latest jwt_auth_api-postgres:latest
