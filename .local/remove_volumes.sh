#!/bin/bash

# Скрипт для удаления Docker томов проекта

docker volume rm jwt_auth_api_pg_data jwt_auth_api_caddy_data
