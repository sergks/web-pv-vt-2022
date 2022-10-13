# Разработка web-приложения

## Frontend
Разработка приложения
```
npm run serve
```

Сборка приложения
```
npm run build
```
Далее вытащить файлы из директории `dist` в директорию `public`.

## Docker
Разворачивание приложения
```
docker-compose build
docker-compose up -d
```
Далее перейти по ссылке в браузере: http://localhost

Если возникает ошибка, что занят порт, то сначала выполняем команду ниже,
а затем команды по разворачиванию.
```
docker stop $(docker ps -q)
```