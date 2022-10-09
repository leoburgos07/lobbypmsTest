

## Prueba técnica para lobbypms
Esta es una prueba para el cargo desarrollador web para la empresa LobbyPms.

## Comandos principales a ejecutar
composer install / composer update <br>
php artisan migrate --seed <br>
php artisan serve <br>

## FUNCIONAMIENTO
* Con los comandos anteriores se crea el esquema de la base de datos y se precargan algunos usuarios y los roles (Admin - usuario)
* Las credenciales son:  <br>
<strong> Administrador: </strong><br>
user: admin@gmail.com  <br>
pass: 12345678<br>
 <strong>Usuarios: </strong><br>
user: user1@gmail.com   <br>
pass: 12345678<br>
user: user2@gmail.com  <br> 
pass: 12345678<br>

* el usuario administrador puede ver todas las reservas de todos los usuarios, mientras que el usuario con rol user puede hacer reservas de los inmuebles que ya estan precargados y ver solo sus reservaciones.



