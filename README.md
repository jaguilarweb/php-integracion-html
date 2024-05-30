# Curso de PHP: Integración con HTML

Este proyecto corresponde a notas tomadas del **Curso de PHP: Integración de HTML** impartido por Platzi.


## Envío de correo

PHP tiene una función para enviar correos mail(), no obstante, usarla ya no es tan recomendable.
La alternativa es usar una librería de terceros como PHPMailer o Swiftmailer.
[Documentación phpmailer](https://packagist.org/packages/phpmailer/phpmailer)


## Manejo de dependencias

Composer es un manejador de dependencias para PHP, que facilita la instalación de librerías de terceros.
[Composer:](https://getcomposer.org/download/)

Antes de instalar, si estamos en un entorno de desarrollo local, es necesario tener instalado PHP y Composer. 

Si nuestro entorno de desarrollo local está configurado con Docker, podemos instalar Composer en un contenedor de PHP. En este caso, estamos trabajando con un contenedor que tiene apache y php instalado. Para trabajar con composer debemos tenerlo instalado en el contenedor.

Para instalar Composer en un contenedor de PHP, ejecutamos los siguientes comandos en la terminal:

```bash
docker exec -it <id-contenedor> bash
```

Instalación usada en este proyecto (la instalación es global).
```bash
curl -sS https://getcomposer.org/installer | php
mv composer.phar /usr/local/bin/composer
```

Para verificar que Composer se ha instalado correctamente, ejecutamos el siguiente comando en la terminal:

```bash
composer --version
```


Instalar composer en el proyecto, si tenemos instalado php en nuestro entorno local, ejecutamos el siguiente comando en la terminal (instalación local):

```bash
  php -r "copy('https://getcomposer.org/installer','composer-setup.php');"
  php -r "if (hash_file('sha384', 'composer-setup.php') === 'dac665fdc30fdd8ec78b38b9800061b4150413ff2e3b6f88543c636f7cd84f6db9189d43a81e5503cda447da73c7e5b6') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
  php composer-setup.php
  php -r "unlink('composer-setup.php');"
```

## Instalación de PHPMailer

Para instalar PHPMailer con Composer, ejecutamos el siguiente comando en la terminal:

```bash
$ composer require phpmailer/phpmailer
```