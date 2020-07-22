FROM debian:latest
WORKDIR /usr/src/tracker
COPY . /usr/src/tracker
RUN apt-get update -y && apt-get install -y php composer
RUN composer require
CMD ["php", "tracker"]