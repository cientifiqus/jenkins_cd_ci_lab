FROM jenkins/jenkins:lts-jdk11
USER root
RUN apt-get update
RUN apt-get install -y nano sudo ca-certificates curl gnupg lsb-release 
RUN lsb_release -a
RUN mkdir -p /etc/apt/keyrings
RUN curl -fsSL https://download.docker.com/linux/debian/gpg | sudo gpg --dearmor -o /etc/apt/keyrings/docker.gpg
RUN echo "deb [arch=$(dpkg --print-architecture) signed-by=/etc/apt/keyrings/docker.gpg] https://download.docker.com/linux/debian $(lsb_release -cs) stable" | sudo tee /etc/apt/sources.list.d/docker.list > /dev/null
RUN apt-get update
RUN apt-get install -y docker-ce docker-ce-cli containerd.io docker-compose-plugin
RUN docker --version


# docker build -tjenkins/jenkins:lts-jdk11 .
# docker volume create jenkins
# docker run --name jenkins -p 50000:50000 -p 8080:8080 -v jenkins:/var/jenkins_home jenkins/jenkins:lts-jdk11



# https://docs.docker.com/engine/install/debian/