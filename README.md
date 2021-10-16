# test_contact


Pour activer la maquette, il faut télécharger le fichier.


Premièrement allé dans le fichier .env est modifié l'accès a la basse de donner en remplaçant les codes d'accès db_usser et db_password






Puis utiliser l'inviter de commande pour accéder a l'emplacement du projet


Troisièmement effectué la commande dans la console pour créer la base de donne automatiquement.
```
php bin/console doctrine:database:create
```


Quatrièmement utilisé la commande.
```
php bin/console doctrine:schema:update --force
```
![Screenshot](screenshot.png)


Qui mettra à jour la base de données en créant la table utilisateur ave les caractéristiques renseigner dans le fichier contact du dossier entity


Ensuite, il suffit d'utiliser la commande.
```
symfony server:start
```
Pour lancer le serveur


Enfin, vous devriez avoir se résulta.




Il fout suffi donc de marquer cette adresse.
```
http://127.0.0.1:8000
```
Dans la barre de recherche de votre navigateur pour accéder à la maquette
