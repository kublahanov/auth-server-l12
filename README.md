# Шаблон JWT-auth REST API на базе Laravel 12 + API Platform

## О проекте

Шаблон REST API на базе Laravel 12 + API Platform с предустановленной аутентификацией пользователя на основе JWT.

**Он включает в себя:**

- Чистую реализацию REST API.
- Аутентификацию клиента (SPA и пр.) через JWT-токен со всеми необходимыми опциями: аутентификация с получением токена на предъявителя, обновление токена и т. д.
- Функционал для работы с пользователем: регистрация (с подтверждением электронной почты), аутентификация (вход в систему, выход из системы), смена пароля и т. д.

## Начало работы

Эти инструкции помогут вам клонировать и запустить шаблон с предустановленной аутентификацией на вашем локальном компьютере для дальнейшей разработки на его основе вашего собственного проекта.

### Необходимые приложения

- [Git](https://git-scm.com/)
- [Docker](https://docs.docker.com/engine/install/)

### Установка в один шаг

1. Склонируйте репозиторий, и перейдите в полученную папку:

```bash
git clone git@github.com:kublahanov/jat-server-l12_ap.git
cd jat-server-l12_ap
```

2. Запустите этот shell-скрипт в корне проекта:

`./setup.sh`

3. После того как работа скрипта завершится, приложение должно быть доступно по ссылке `http://localhost:8000`.

### Примеры использования

...

#### Регистрация пользователя

`POST /api/auth/register`

```json
{
  "name": "John Doe",
  "email": "john.doe@example.com",
  "password": "password",
  "password_confirmation": "password"
}
```

Ответ:

```json
{
  "message": "User registered successfully, please check your email for verification link",
  "user": {
    "name": "John Doe",
    "email": "john.doe@example.com",
    "updated_at": "2024-06-26T18:03:49.000000Z",
    "created_at": "2024-06-26T18:03:49.000000Z",
    "id": 1
  }
}
```

#### Аутентификация пользователя

`POST /api/auth/login`

```json
{
  "email": "john.doe@example.com",
  "password": "password"
}
```

Ответ:

```json
{
  "access_token": "your-jwt-token",
  "token_type": "bearer",
  "expires_in": 3600
}
```

### Внесение вклада

Если у вас есть предложения по улучшению этого проекта или вы хотите сообщить об ошибке, воспользуйтесь этими средствами:
- https://github.com/kublahanov/.../issues,
- https://github.com/kublahanov/.../pulls.

### Лицензия

Данный проект лицензирован в соответствии с [MIT license](https://opensource.org/licenses/MIT).
