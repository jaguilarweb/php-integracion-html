# Docker y PHP

Este proyecto es un ejemplo de como crear un contenedor de Docker con PHP.


## Requisitos
Tener instalado Docker en tu computadora y tener un login para Docker-Hub.

## Crear contenedor con PHP

1.- Ir a la documentación oficial y escoger la imagen con php que se requiere:

[Documentación oficial Docker](https://hub.docker.com/_/php)

[Versiones de PHP compatibles](https://github.com/docker-library/docs/blob/master/php/README.md#supported-tags-and-respective-dockerfile-links)


2.- Creamos un archivo llamado Dockerfile en el directorio raíz del proyecto y lo configuramos con la imagen escogida:

```Dockerfile
# Use an official PHP image as the base
FROM php:8.3-apache

COPY /src /var/www/html

EXPOSE 80
```

3.- En la terminal creamos un contenedor en base a esta imagen.

```bash
docker build -t apache-php .
```

La tag -t nos permite darle nombre al contenedor (en este caso apache-php).
El punto es el directorio donde se crea, es decir, el prompt debe estar posicionado en la carpeta raiz para este ejemplo, con la carpeta src a nivel.

La estructura de directorios sería:

- src -> Contiene el código fuente del sitio web
- Dockerfile -> Contiene la configuración de la imagen


4.- Ejecutamos la imagen

Con el siguiente comando queda tomada la terminal hasta que termina el proceso:

```bash
docker run -p 8080:80 apache-php
```

Solo se ejecuta la imagen, no está permitiendo hacer cambios en el código.

Si queremos que el servidor quede abierto sin bloquear la terminal, usamos la tag -d para el modo detach:

```bash
docker run -p 8080:80 -d apache-php
```

Esto devuelve una id del proceso que se comienza a ejecutar.
Para usarlo en los comandos, solo requiero usar los 3 primeros dígitos de ese id.

Como ejemplo, tenemos los comandos que lo usan para terminar el proceso.

```bash
docker stop id_contenedor
```

y para eliminar el contenedor.

```bash
docker rm id_contenedor
```


Para eliminar todos los contenedores que se han creado, se puede usar el siguiente comando:

```bash
docker rm $(docker ps -aq)
```

5.- Luego, ya podemos ir al navegador del anfitrión y entramos con localhost:8080 para ver el sitio web.


6.- Crear Volumenes para el contenedor

Los Volumenes nos permitirán copiar contenido desde nuestro host (anfitrion) hacia nuestro contenedor y así poder modificar los archivos sin tener que volver a crear la imagen.

```bash
docker run -p 8080:80 -d -v $(pwd)/src:/var/www/html/ apache-php
```

**Explicación del comando anterior**

Para crear el volumen agregamos la tag -v, y luego identificamos el directorio actual (que es lo que se va a estar modificando). Para identificar el directorio actual tenemos que ver cual es la ruta absoluta, y para ello ejecutamos el comando:

```bash
pwd
```

El comando anterior, nos arroja la ruta absoluta, por ejemplo: `/cursophp/app/public/curso-integacion-html-php`

Adicionalmente a esta ruta le agregamos la carpeta `/src` que cree en la ruta raiz del proyecto.

Es decir, el directorio actual que contiene los archivos a modificar en el contenedor sería:

`cursophp/app/public/curso-integacion-html-php/src`

Lo que equivale a los parámetros `$(pwd)/src` del comando anterior.

Posteriormente, le agregamos dos puntos y luego le agregamos el directorio donde se encuentran los archivos en el contenedor `/var/www/html/`

Con lo anterior, ya tenemos un contenedor que ejecuta apache y php, y que además tiene la capacidad de modificar los archivos en tiempo real.

7.- Para acceder a la terminal del contenedor, usamos el siguiente comando:

```bash
docker exec -it <container_id> bash
```
