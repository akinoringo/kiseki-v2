FROM node:14.2-alpine as node
FROM nginx:1.18-alpine
SHELL ["/bin/ash", "-oeux", "pipefail", "-c"]

ENV TZ=Asia/Tokyo

RUN apk update && \
  apk add --update --no-cache --virtual=.build-dependencies g++

# nginx config file
COPY ./infra/nginx/default.conf /etc/nginx/conf.d/default.conf
COPY ./backend/public /work/backend/public

WORKDIR /work/backend