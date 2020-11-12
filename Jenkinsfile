env.DOCKER_REGISTRY = 'irpank'
env.DOCKER_IMAGE_NAME = 'wordpress-bp'
pipeline {
    agent any
    stages {
        stage('docker build') {
            steps {
                sh "docker build --build-arg APP_NAME=$DOCKER_IMAGE_NAME -t $DOCKER_REGISTRY/$DOCKER_IMAGE_NAME:$BUILD_NUMBER ."
                }
           }
        stage('Docker push') {
            steps {                
                sh "docker push $DOCKER_REGISTRY/$DOCKER_IMAGE_NAME:$BUILD_NUMBER"
                }
           }
        stage('tagging') {
            steps {
                sh('sed -i "s/bild/$BUILD_NUMBER/g" deployment-wordpress.yml')
                }
           }
        //stage('locate namespace') {
            //steps {
               //sh('sed -i "s/default/production/g" deployment-wordpress.yml')
                 //}          
           //}
        //stage('add domain') {
            //steps {
                //sh('sed -i "s/blog.komarudins.online/blog-cilsy.komarudins.online/g" deployment-wordpress.yml')
                }
           }        
        stage('deploy') {
            steps {
                //sh('kubectl delete -f deployment-wordpress.yml')
                sh('kubectl apply -f deployment-wordpress.yml')
                sh('kubectl apply -f secret-wp.yml')
                }
           }
        stage('remove image docker') {
            steps {
                sh "docker rmi $DOCKER_REGISTRY/$DOCKER_IMAGE_NAME:$BUILD_NUMBER"
                }
           }
         stage('show ingress') {
            steps {
                sh('kubectl get ingress -n=production')
                }
           }        
      }
}
