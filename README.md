<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>


## Sobre Laravel

Laravel es un framework web con una sintaxis elegante y expresiva. Creemos que el desarrollo debe ser una experiencia agradable y creativa para que sea verdaderamente satisfactorio. Laravel elimina las complicaciones del desarrollo al facilitar las tareas comunes utilizadas en muchos proyectos web, como por ejemplo:

- Motor de enrutamiento simple y rápido.
- Potente contenedor de inyección de dependencia.
- Múltiples back-ends para almacenamiento de sesión y caché.
- ORM de base de datos expresivo e intuitivo.
- Migraciones de esquemas independientes de la base de datos.
- Sólido procesamiento de trabajos en segundo plano.
- Transmisión de eventos en tiempo real.

Laravel es accesible, potente y proporciona las herramientas necesarias para aplicaciones grandes y sólidas.




## Aprendiendo Laravel

Laravel tiene la biblioteca de documentación y tutoriales en vídeo más extensa y completa de todos los marcos de aplicaciones web modernos, lo que hace que sea muy fácil comenzar con el marco.
https://laravel.com/docs

También se puedes probar el Laravel Bootcamp, donde se te guiará en la creación de una aplicación Laravel moderna desde cero.
https://bootcamp.laravel.com/

Si no tienes ganas de leer, Laracasts puede ayudarte. Laracasts contiene miles de tutoriales en vídeo sobre una variedad de temas que incluyen Laravel, PHP moderno, pruebas unitarias y JavaScript. Mejore sus habilidades investigando nuestra completa biblioteca de videos.
https://laracasts.com/



## Contribuyendo
La guía de contribución se puede encontrar en la documentación de Laravel.
https://laravel.com/docs/contributions



### Código de conducta
Para garantizar que la comunidad de Laravel sea acogedora para todos, revise y respete el Código de conducta.
https://laravel.com/docs/contributions#code-of-conduct



## Vulnerabilidades de seguridad
Si descubre una vulnerabilidad de seguridad dentro de Laravel, envíe un correo electrónico a Taylor Otwell a través de taylor@laravel.com. Todas las vulnerabilidades de seguridad se abordarán de inmediato.


## Licencia de uso

El framework de Laravel  es software de codigo abierto bajo la licencia de [MIT license](https://opensource.org/licenses/MIT).



# Creating Content



### Antecedentes.
Laravel es una de las herramientas con las que los desarrolladores se sienten muy entusiastas de trabajar.

No existe sólo un motivo, son muchas las cualidades de Laravel para conseguir ser la opción preferida por tantos y tantos desarrolladores para llevar a cabo sus proyectos, así que vamos a ver qué es Laravel y cómo funciona.



### Qué es Laravel

Si nos ceñimos a la definición estándar,Laravel es un framework de PHPy es utilizado para desarrollar aplicaciones web.

PHP es el lenguaje de programación más utilizado en mundo para desarrollar sitios web, aplicaciones web y los populares CMS, como WordPress o Joomla.

Laravel crea un entorno de trabajo y proporciona herramientas a los desarrolladores para ayudarles a desarrollar en PHP sus aplicaciones web.

Lo que se busca con Laravel es construir aplicaciones sólidas y estables, que sean fáciles de desarrollar y la utilización de parte del código preprogramada, para que pueda aprovecharse y reutilizarse, evitando así la reescritura del código en la misma aplicación.

Gracias a esto se consiguen aplicaciones con un código estable, sencillo de actualizar y con la posibilidad de añadir nuevas funcionalidades sin necesidad de modificar el código base, por medio de un sistema de paquetes modulares.

Laravel es un sistema de código abierto, por lo que no hay que pagar por usarlo.



### Qué es un Framework

Un framework es unentorno de trabajo, que sigue un patrón o esquema estandarizado que se utiliza para desarrollar aplicaciones o cualquier tipo de software.

Los framework facilitan la vida a los desarrolladores la creación de sus proyectos al facilitar un conjunto de herramientas para automatizar las tareas más comunes en la programación, aumentando así la velocidad cuando se está programando y facilitando la colaboración entre desarrolladores, al usar todas las mismas herramientas dentro del mismo framework.



### Por qué usar Laravel

Como hemos comentado antes, Laravel se ha convertido en poco tiempo en la principal opción a la hora de desarrollar proyectos web en PHP.

Esto no suele ser casualidad, así que vamos a ver cuáles son las ventajas y desventajas de usar Laravel, para que puedas decidir si es el framework PHP que necesitas para tus proyectos.



## Ventajas de usar Laravel

Laravel no es el único framework PHP que existe hay mucho otros, pero hay miles de programadores que han decidido utilizarlo en lugar de otros `por las ventas que aporta, veamos algunas de ellas.


    Laravel es sencillo de utilizar y aprender: Una de las cualidades más apreciadas de Laravel es que resulta sencillo de aprender, respecto a otros frameworks.
    No por esto significa que sea menos potente que otras opciones, pero sí que es más fácil de aprender, así que muchos desarrolladores elijen Laravel como su principal opción a la hora de crear sus proyectos.

    Extensa documentación y comunidad enorme: Otro punto a favor de Laravel es la extensa documentación que el desarrollador tiene disponible en la red. También existen tutoriales para todo tipo de usuarios, ya sean principiantes como más avanzados. Si tienes alguna duda o problema con algo, posiblemente ya le habrá pasado antes a alguien y muy posiblemente ya esté documentado.

    Librerías y paquetes disponibles: Laravel dispone de una gran cantidad de librerías y paquetes, ya sean los oficiales, como los que aporta la comunidad, que puedes aprovechar para añadir en tus distintos proyectos. Esto simplifica el tiempo que se tarda en el proceso de desarrollo de una

    Seguridad y fortaleza La seguridad es muy importante en cualquier proyecto web y Laravel es muy sólido en este aspecto. Todas las aplicaciones web desarrolladas con Laravel tienen una defensa muy alta frente a las amenazas más comunes, como el malware o las inyecciones de SQL maliciosas.




<p align="center"><b> <h2>Proyecto TaskCrud</h2></b></p>

Para la Generación de Este CRUD trabajaremos con un pequeño ejercicio que se pretande aplicar con una funcionalidad en el area de Trabajo, al agregar un atarea pendiente, esta permanecera instanta, el objetivo posterior, es medir los tiempos medianta la hora de inicio de la tarea y al registrar el tiempo de termina del mismo, se podra generar unabitacora de servicios, complementando a este proyecto con una segunda parte futura.



### Objetivo:
Contar con una pequeña herramienta que permita registrar las tareas a realizar en el ambito laboral, como un ejercicio practico del quehacer tecnologico, en algunas ocaciones, se tendran que realizar tareas que no fueron concluidas durante la jornada laboral, por ello quedaran registradas para atenderse al día inmediato siguiente.

El objegtivo es establecer nuevamente las bases de trabajo con Laravel en su forma más basica




### Creando el repositorio para el control de versiones


Para poder trabajar en un alinea de tiempo con cualquier proyecto de desarrollo es importante asegurar que algun cambio o caracteristica adicional a mi proyecto, este quede plasmado en una versión de trabajo.

Par ello puedo utilizar un sistema de control de versiones que me ayudan en caso necesario poder regresar en el tiempo si asi se requiere, o bien simplemenete poder crear una rama para agrregar alguna caracteristica adicional sin afectar al proyecto principal. 

Es por ello que como parte del entorno de trabajo estaremos empleando git para controlar los cambios de nuestro proyecto.

Creamos nuestro proyecto en Github por que es el sistema de control de versiones con el que me siento mas comodo, mas sin embargo no es el unico.

Creamis nuestro respositorio y creamos nuestro proyecto, para nuestro caso nombraremos a nuestro proyecto en Github como TaskCrud debido a que sera un sistema de Create, Read, Update y Delete como principales tareas a realizar.

Es el objetivo de este pequeño sistema.

Posterior a la creación de nuestro proyecto y si deseamos simplemente clonarno en otro equipo de computo distinto del oigen podemos simplemente ejecutar, desde la carpeta de trabajo:
     git@github.com:Klvst3r/TaskCrud.git
    
O también podemos crear un nuevo repositorio en la linea de comandos con las siguientes instrucciones:
    
    echo "# TaskCrud" >> README.md
    git init
    git add README.md
    git commit -m "first commit"
    git branch -M main
    git remote add origin git@github.com:Klvst3r/TaskCrud.git
    git push -u origin main   

Toda esta sección fue la que empleamos para subir el contenido creado en local y depositado en Github.


O bien si ya tenemos un repositorio existente ejecutamos desde la linea de comandos:

    git remote add origin git@github.com:Klvst3r/TaskCrud.git
    git branch -M main
    git push -u origin main




### Instalación de Herramientas de Trabajo:



Para trabajar con Laravel necesitamos una serie de dependencias y paquetes porpios de Laravel, para ello vamos a necesitar el administrador de dependencias Composer

Asi entonces tenemos que:



#### Instalar composer

Necesitamos un editor para poder trabajar nuestro codigo, para esta ocación vamos a trabajar con Visual Studio Code como option alternativa



#### Instalar Visual Studio Code

Al terminal de Instalar podremos abrir una terminal de comandos desde el menu Herramientas>Nueva terminal

Para dar continuidad a nuetra instalación vamos a instalar Laravel de manera global para ello desde la carpeta contenedora

/TaskCrud

Ejecutamos:



#### Instalar Composer para Laravel de manera Global

    # composer require laravel/installer
    
    
Ahora ya podemos crear nuestro poryecto Laravel

Tenemos dos opciones:

a) Primera Opción
    
    laravel new TaskCrud


Podemos tambien Instalar Laravel mediante composer
    
b) Instalando Laravel meadiante composer
    
    composer create-project laravel/laravel TaskCrud
 


## Codificando

### Plugins de Visual Studio Code

Para el trabajo agil con Visual Studio Code y Laravel, agregaremos los siguientes Plugins

- 


### Levandando servicio de Laravel

Para arrancar nuestro proyecto lo realizaremos con el siguiente comando:
    php artisan serve


Artisan es una interfaz que nos permite con la linea de ocmando hacer mas rapido el trabajo con laravel, con artisan podemos levantar el servidor, crar controladores, crear modelos, migrar las base de datos.

