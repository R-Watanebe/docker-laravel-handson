FROM mysql/mysql-server:8.0

ENV MYSQL_DATABASE=laravel \
  MYSQL_USER=user \
  MYSQL_PASSWORD=mysql \
  MYSQL_ROOT_PASSWORD=mysql \
  TZ=Asia/Tokyo

COPY ./my.cnf /etc/my.cnf
RUN chmod 644 /etc/my.cnf
