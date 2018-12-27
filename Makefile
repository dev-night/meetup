#!make
include .env
export $(shell sed 's/=.*//' .env)

# Variables
NAME = "meetup-redirecter"
ROOT_DIR = $(shell dirname $(realpath $(lastword $(MAKEFILE_LIST))))

all: build run

build:
	docker build -t $(NAME) .

run:
	docker run \
		--env-file=$(ROOT_DIR)/.env \
		-it \
		-v $(ROOT_DIR):/app \
		-p $(PORT):$(PORT) \
		$(NAME)


.PHONY: all build run