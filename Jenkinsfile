pipeline {
    agent any
    stages {
        stage ('Run Docker Compose') {
            steps {
                withCredentials([string(credentialsId: 'docker-token', variable: 'DOCKER_TOKEN')]) {
                    sh 'echo $DOCKER_TOKEN | sudo docker login --username hoangb2013534 --password-stdin'  // Đăng nhập vào Docker
                    sh 'sudo docker-compose up -d'  // Chạy Docker Compose
                }
            }
        }
    }
}
