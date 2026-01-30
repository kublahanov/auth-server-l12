#!/bin/bash

# Скрипт для удаления Docker образов проекта

docker rmi auth_api_php83:latest auth_api_caddy:latest auth_api_postgres:latest auth_api_mailpit:latest
