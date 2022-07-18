# inception

## ⚠️ Disclaimer ⚠️

this code was written as part of a school project. The main focus was to learn, the code quality may be uneven and there are definitely some rough edges. Given the nature of the projects, and the diminishing returns of polishing up a project when it comes to learning opportunities, I do not intend to go back over this code.

## Subject:

The aim of this project is to deploy a simple php app with docker compose, using docker volumes and networks.

The stack consists of three containers, with an nginx server as an entrypoint, a php-fpm server to serve the php app and a database container for persistent data. It comes with a simple makefile to build and deploy the cluster using
"make up"
