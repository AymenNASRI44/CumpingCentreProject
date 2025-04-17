FROM jenkins/jenkins:lts

USER root

# Permet à Jenkins d’utiliser Docker
RUN apt-get update && apt-get install -y docker.io


COPY infra/jenkins/plugins.txt /usr/share/jenkins/ref/plugins.txt


USER jenkins
