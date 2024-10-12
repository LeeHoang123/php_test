pipeline {
    agent any

    stages {
        stage('Clone Repository') {
            steps {
                // Clone mã nguồn từ repository
                git 'https://github.com/your-repository-url.git'
            }
        }

        stage('Run PHP in Docker') {
            steps {
                // Sử dụng Docker để chạy container PHP
                script {
                    docker.image('php:8.0-cli').inside {
                        sh 'php index.php'
                    }
                }
            }
        }
    }

    post {
        always {
            // Clean up Docker container nếu cần
            echo 'Pipeline hoàn thành.'
        }
    }
}
