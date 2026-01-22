#!/bin/bash

# Скрипт для удаления Docker томов проекта

docker volume rm auth_api_pg_data auth_api_caddy_data
