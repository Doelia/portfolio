docker build -t apache-portfolio .
docker run -p 80:80 -v $(pwd)/../../:/var/www/html/ apache-portfolio
