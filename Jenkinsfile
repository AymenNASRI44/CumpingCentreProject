pipeline {
    agent any

    environment {
        COMPOSE_CMD = 'docker compose' // ou 'docker-compose'
       
    }

    stages {
        stage('Run Conteneurs') {
            steps {
             
                    script {
                        echo "🚀 Lancement des conteneurs..."
                        sh "${COMPOSE_CMD} up -d"
                    }
                
            }
        }

        stage('Tests') {
            steps {
                
                    script {
                        echo "🧪 Lancement des tests Symfony..."
                        sh "${COMPOSE_CMD} exec -T app php bin/console doctrine:migrations:migrate --no-interaction"
                        sh "${COMPOSE_CMD} exec -T app php bin/phpunit"
                    }
                
            }
        }

        stage('Déploiement') {
            steps {
                
                    script {
                        echo "🔁 Reconstruction des conteneurs..."
                        sh "${COMPOSE_CMD} down"
                        sh "${COMPOSE_CMD} up -d --build"
                    }
                
            
        }
    }

    post {
        failure {
            echo "❌ Le déploiement a échoué."
        }
        success {
            echo "✅ Déploiement réussi !"
        }
    }
}
