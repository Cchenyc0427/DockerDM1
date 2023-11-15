#
1. Tout d'abord, nous devons exécuter la commande  `docker composer up -d`
Cette commande nous aidera à démarrer le service dans docker
2. Ensuit, nous pouvons eexécuter la commande `docker ps` pour trouver tous les container
3. On peut utiliser la commande `docker exec -it 96b5 bash` pour entrer le container. 
Ici vous devez changer  `96b5 ` à votre container ID
4. Utiliser la commande `96b5 ` pour regarder tous les doissers dans ce container
5. S'il n'y a pas la dossier `vendor `, vous pouvez uiliser la commande `composer install` pour installer manuellement.
S'il y a Warning après cette commande, vous devez utiliser la commande `composer update` pour mise à jour composer. Ensuite utiliser la commande  `composer install`.
Maintenant, cela devrait faire apparaître un fichier appelé "vendor".
6. Nous pouvons ensuite ouvrir un navigateur et modifier l'URL en `localhost:8081/client.php`. En bas de la page, si nous voyons "Sent Video To Server !", cela prouve que notre vidéo a été envoyée à la file d'attente RabbitMQ !
7. Enfin, on change la URL en `localhost:8081/server.php`. Et nous pouvons recevoir la vidéo par la file d'attente RabbitMQ

## Source
<https://github.com/ProdigyView-Toolkit/Microservices-Examples-PHP>