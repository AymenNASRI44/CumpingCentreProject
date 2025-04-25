# Utilise l'image officielle Jenkins LTS
FROM jenkins/jenkins:lts

# Passe en root pour installer des paquets
USER root

# Mise à jour et installation de Docker CLI + docker-compose
RUN apt-get update && \
    apt-get install -y --no-install-recommends \
      docker.io \
      docker-compose && \
    rm -rf /var/lib/apt/lists/*

# Ajoute le groupe docker (s'il n'existe pas) et ajoute Jenkins au groupe
RUN groupadd -f docker && \
    usermod -aG docker jenkins

# Rétablit l'utilisateur Jenkins
USER jenkins

# Point Docker vers le socket monté depuis l'hôte
ENV DOCKER_HOST=unix:///var/run/docker.sock

# (Facultatif) Installe des plugins Jenkins par défaut via le script d'installation
# COPY plugins.txt /usr/share/jenkins/ref/plugins.txt
# RUN /usr/local/bin/install-plugins.sh < /usr/share/jenkins/ref/plugins.txt

# Expose les ports (déjà exposés par docker-compose)
EXPOSE 9090 50000

# Commande par défaut : démarrage de Jenkins
