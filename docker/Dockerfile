#название образа
FROM iojs

#куда сохранить образ
WORKDIR /test.flower-bottle

#запуск приложения
#RUN npm install

#что сохранить в образ
COPY .. .

ENV PORT 80

#выберает порт для запуска образа
EXPOSE 80

VOLUME ["/test.flower-bottle"]

#что именно запускать
CMD ["iojs", "docker_test.php"]

