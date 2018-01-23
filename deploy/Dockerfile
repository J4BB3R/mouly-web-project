FROM debian:stretch
MAINTAINER Johan Maurel # AKA Mamasita la Zoulette

# Install dependencies
COPY requirements.txt /opt
RUN apt-get update -q && apt-get install -yq --no-install-recommends $(cat /opt/requirements.txt | sed "/^[ \t]*$/d" | grep -v '#' )

# Cfg dump
COPY site.conf /etc/nginx/sites-available/default

# Project root
RUN mkdir -p /var/www/project

# Wrapper set
COPY wrapper /usr/local/bin
RUN chmod +x /usr/local/bin/wrapper

CMD ["/usr/local/bin/wrapper"]
