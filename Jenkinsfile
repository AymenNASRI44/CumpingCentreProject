pipeline {
    agent any

    environment {
        COMPOSE_CMD = 'docker compose' // ou 'docker-compose' selon ta version
    }

    stages {

        stage('Démarrage des conteneurs') {
            steps {
                script {
                    echo "🚀 Lancement des conteneurs en mode détaché..."
                    sh "${COMPOSE_CMD} up -d"
                }
            }
        }

        stage('Tests Symfony') {
            steps {
                script {
                    echo "🧪 Exécution des tests Symfony..."
                    sh "${COMPOSE_CMD} exec -T app php bin/console doctrine:migrations:migrate --no-interaction"
                    sh "${COMPOSE_CMD} exec -T app php bin/phpunit"
                }
            }
        }

        stage('Déploiement') {
            steps {
                script {
                    echo "🔁 Redémarrage des conteneurs avec reconstruction..."
                    sh "${COMPOSE_CMD} down"
                    sh "${COMPOSE_CMD} up -d --build"
                }
            }
        }
    }

    post {
        failure {
            echo "❌ Le déploiement a échoué. Consultez les logs pour plus d'informations."
        }
        success {
            echo "✅ Déploiement terminé avec succès !"
        }
    }
}
