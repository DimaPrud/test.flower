#название образа
FROM php

#куда сохранить образ
WORKDIR /test.flower-bottle

#запуск приложения
RUN npm install

#что сохранить в образ
COPY . test.flower-bottle

#выберает порт для запуска образа
EXPOSE 80

#что именно запускать
CMD ["php", "docker_test.php"]
