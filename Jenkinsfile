pipeline {
  agent any
  stages {
    stage ('Run Docker Compose') {
      steps{
        withCredentials([string(credentialsId: '123', variable: 'PASS')]) {
          sh 'echo $PASS | sudo -S docker-compose up -d'
        }
      }
    }
  }
}
