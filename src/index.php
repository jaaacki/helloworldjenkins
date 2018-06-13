<?php
$welcome = "hello world 34";
echo $welcome;
?>

cd /
cd /helloworldjenkins
docker stop helloworld
docker rm helloworld
docker build -t hello-world /helloworldjenkins
docker run -d --name helloworld -5000:80 -v /home/te