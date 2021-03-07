# microFrameWork
El repositorio incluye la estructura base de un proyecto web para su desarrollo con PHP y la arquitectura de software MVC. Al utilizar microFramework es muy facil comenzar tus proyectos ya que la estructura de archivos esta pensada para que solo edites unas cuantas lineas de código y de inmediato tengas lista una conexion a tu base de datos, además, los controladores, vistas y modelos altamente personalizados.

El microFramework incluye bootstrap 5 para que puedas construir vistas hermosas de forma facil y dinamica, ademas de una licencia gratuita de font awesome, para así incluir también un gran listado de iconos.

# Estructura de ficheros
# Directorio app

Este directorio se centra en el core de la aplicación ya que se encuentran los archivos base así como el archivo app.php

# Archivo app/app.php

Este es el punto de entrada de nuestro proyecto, todas las peticiones que se manejan por medio de la URL son administradas por este archivo el cual se gestiona los controladores, vistas y modelos creados por el usuario.

# Archivo app/controller.php

El controlador base se encarga de gestionar todas aquellas funcionalidades necesarias para todos tus controladores personalizados, por defecto este, administra el renderizado de las vistas y la carga del modelo, sin embargo, sientete con la confianza de añadir nuevos metodos para tu aplicación.

