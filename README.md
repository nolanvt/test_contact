
# test_contact


Pour activer la maquette, il faut télécharger le repo.


Premièrement allé dans le fichier .env est modifié l'accès a la basse de donner en remplaçant les codes d'accès db_usser et db_password

![Capture d’écran 2021-10-16 215926](https://user-images.githubusercontent.com/61974123/137601073-00de3fa0-ee2b-486c-9dbd-ac6fe23b27dc.png)


Troisièmement effectué la commande dans la console pour créer la base de donne automatiquement.
```
php bin/console doctrine:database:create
```
![Capture d’écran 2021-10-16 221943](https://user-images.githubusercontent.com/61974123/137601202-b34195a9-c9fe-456a-a097-a0f96ee31bee.png)



Quatrièmement utilisé la commande.
```
php bin/console doctrine:schema:update --force
```
![Capture d’écran 2021-10-16 215728](https://user-images.githubusercontent.com/61974123/137601052-6e3fa721-41f6-4d1c-8f46-cf2881f74866.png)


Qui mettra à jour la base de données en créant la table utilisateur ave les caractéristiques renseigner dans le fichier contact du dossier entity


Ensuite, il suffit d'utiliser la commande.
```
symfony server:start
```
![Capture d’écran 2021-10-16 222014](https://user-images.githubusercontent.com/61974123/137601197-d9c36901-ffd1-47f1-9a35-3f6aebbac4eb.png)

Pour lancer le serveur


Enfin, vous devriez avoir se résulta.

![Capture d’écran 2021-10-16 221731](https://user-images.githubusercontent.com/61974123/137601105-cef20d14-899e-4b6a-a41b-5a7272c71413.png)



Il fout suffi donc de marquer cette adresse.
```
http://127.0.0.1:8000
```
Dans la barre de recherche de votre navigateur pour accéder à la maquette
