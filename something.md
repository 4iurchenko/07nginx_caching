
--Docker uses old images 
docker-compose down
docker system prune -f
docker rmi $(docker images -q)
docker-compose pull
docker-compose up -d

docker-compose build --no-cache nginx