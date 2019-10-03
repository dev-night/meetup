#!make
include .env
export $(shell sed 's/=.*//' .env)

# Variables
NAME = "meetup-redirecter"

all: build run

build:
	docker build --pull -t $(NAME) .

run:
	docker run \
		-it --rm \
		-v $(PWD):/var/www/html \
		-p $(PORT):80 \
		$(NAME)

.PHONY: all build run