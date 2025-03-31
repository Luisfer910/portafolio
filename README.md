
 
Introducción
   Este proyecto consiste en el desarrollo de un portafolio personal dinámico, diseñado para mostrar habilidades, experiencias y permitir el contacto a través de un formulario funcional. El objetivo principal es proporcionar una herramienta que pueda ser utilizada por profesionales para destacar su perfil de manera digital.

Objetivo General 
   Desarrollar un portafolio web dinámico que permita la gestión y visualización de habilidades, experiencias y datos de contacto de manera eficiente.
 Características
-	Lenguajes: PHP, CSS, HTML.
-	Diseño responsivo utilizando **Bootstrap 5.3.3**.
-	Formulario de contacto funcional con envío a base de datos.
-	 Sección de habilidades y experiencias dinámicas.
-	Uso de PHP para la conexión con base de datos y procesamiento de formularios.
Requisitos Previos
-	Servidor web (por ejemplo, **XAMPP**, **WAMP**, o similar). En mi caso he usado XAMPP.
-	PHP 7.4 o superior.
-	Base de datos MySQL, he usado phpmyadmin.
-	Navegador web moderno.
Instalación
1.	Clonar el repositorio desde GitHub, este descargará todos los archivos del proyecto a la maquina local

2.	Instalar un servidor local (XAMPP o similar) necesita instalar  un servidor local, como XAMPP o wamp para correr el proyecto.
El servidor local debe contar con lo siguiente:
Apache: Para  los archivos PHP.
MySQL: Para la base de datos.

3.	Mover los archivos del proyecto a la carpeta del servidor mover los archivos de incepción a la carpeta del servidor local.  De la manera siguiente:
•	  ✔️Por xAMPP, copie los archivos de carpeta htdocs por ejemplo C: \ xampp \ hotdocs\mi_portafolio.
•	  ✔️Por WAMP, copie los archivos en carpeta www.

4.	crear la base de datos:
•	Importa el archivo base_de_datos.sql en tu gestor de base de datos MySQL.
•	Configura el archivo db_config.php con las credenciales de tu base de datos.

                                                  Estructura del Proyecto

Fases de Desarrollo 

I.	Análisis y Diseño:

-	Se definieron los requerimientos del portafolio, incluyendo las secciones de portafolio, habilidades, experiencias y formulario de contacto. 

II.	Implementación del Frontend:
-	Se utilizó Bootstrap para crear un diseño responsivo. 
-	Se incluyó un archivo CSS personalizado para ajustes adicionales. 

III.	Implementación del Backend:
-	Se desarrollaron scripts en PHP para procesar los datos del formulario de contacto.
-	Se configuró una base de datos MySQL para almacenar los mensajes enviados. 

IV.	Pruebas y Validación:
-	Se realizaron pruebas funcionales del formulario y la conexión con la base de datos.
-	Se verificó la compatibilidad en diferentes navegadores y dispositivos.
 
 Resultados 
   El proyecto resultó en un portafolio funcional con las siguientes características principales:
o	Diseño responsivo: El portafolio se adapta correctamente a dispositivos móviles, tablets y ordenadores. 
o	Formulario funcional: Los datos ingresados en el formulario de contacto se almacenan correctamente en la base de datos.
o	Presentación de habilidades y experiencias: La página principal muestra dinámicamente la información del usuario de manera clara y atractiva. 


Conclusion

1. El uso de tecnologías como PHP y MySQL permitió implementar un sistema funcional y eficiente para la gestión de datos de contacto. 
2. Bootstrap facilitó el diseño responsivo, ahorrando tiempo en la implementación y garantizando una buena experiencia de usuario. 
3. Este portafolio puede ser fácilmente ampliado o modificado para incluir nuevas funcionalidades, como una sección de proyectos o un panel de administración.
