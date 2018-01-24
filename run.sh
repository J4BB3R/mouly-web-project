#!/bin/bash
docker build -t mouly-web-project deploy/
docker run --name mwp -d -p80:80 -v$(pwd):/var/www/project mouly-web-project
