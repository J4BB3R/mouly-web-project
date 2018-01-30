#!/bin/bash
name="mouly-web-project"

if [ "$1" == "-h" ]; then
  echo "HELP : v0.1"
  echo
  echo "-r to rebuild the docker images"
  echo
elif [ "$1" == "-r" ] || [ -z "$(docker images | grep $name)" ]; then
  echo
  echo "#######--------    IMAGE IS BUILDING    --------########"
  echo
  docker build -t $name deploy/ &&
  echo
  echo "#######--------    IMAGE BUILD    --------########"
  echo
fi
docker container prune
docker run --name mwp -d -p80:80 -v$(pwd):/var/www/project $name
echo
echo "#######--------   CONTAINER IS RUNNING    --------########"
