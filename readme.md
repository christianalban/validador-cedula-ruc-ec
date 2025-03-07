Validador de Cédula y RUC de Ecuador
=============================
<p align="center"><img src="http://res.cloudinary.com/edwin/image/upload/v1496095463/cedulaLogo_lmct8r.png"/></p>

<p align="center">
<a href="https://packagist.org/packages/alban/validador-cedula-ruc-ec"><img src="https://img.shields.io/badge/Packagist-v1.0.0-orange.svg?style=flat-square"></a>
<a href="https://styleci.io/repos/92779185"><img src="https://styleci.io/repos/92779185/shield"></a>
<a href="https://packagist.org/packages/alban/validador-cedula-ruc-ec"><img src="https://img.shields.io/github/license/mashape/apistatus.svg?style=flat-square"></a>
<a href="https://packagist.org/packages/alban/validador-cedula-ruc-ec"><img src="https://poser.pugx.org/alban/validador-cedula-ruc-ec/downloads" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/alban/validador-cedula-ruc-ec"><img src="https://poser.pugx.org/alban/validador-cedula-ruc-ec/v/stable" alt="Total Downloads"></a>
</p>

-------------
**Descargo de responsabilidad**
Este proyecto no es de mi autoría, es un fork del proyecto [tavo1987/ec-laravel-validator](https://github.com/tavo1987/ec-laravel-validator), el cual busca continuar manteniendo el packete y corregir errores.

**Notas**
-  Se corrige el error conocido del tercér dígito menor a 6 para las cédulas
-------------
Este pequeño paquete ha sido desarrollado para validar fácilmente:

- Cédula
- RUC de persona natural
- RUC de sociedad privada
- RUC de sociedad pública

Introducción
-------------

Para el desarrollo de este paquete se ha tomado como base el siguiente repositorio [validacion-cedula-ruc-ecuador](https://github.com/diaspar/validacion-cedula-ruc-ecuador) creado por [diaspar](https://github.com/diaspar),
el cual ha sido modificado, para que sea mucho más fácil de instalar y usar en  cualquier proyecto PHP mediante composer.

Si quieres saber más sobre la lógica utilizada a este paquete puedes visitar el siguiente artículo [Cómo validar cédula y RUC en Ecuador](https://medium.com/@bryansuarez/c%C3%B3mo-validar-c%C3%A9dula-y-ruc-en-ecuador-b62c5666186f), donde se detalla el proceso manual.
 
Instalación
----
```bash
composer require alban/validador-cedula-ruc-ec
```

Uso
----

- Primero Asegúrese de requerir al archivo de carga automática de composer así:

```php
require 'vendor/autoload.php';
```

- Luego Instanciar la clase y llamar al método para validar la identificación

Ejemplo:

```php
//Cargar el autoload de composer
require 'vendor/autoload.php';

// Crear nuevo objeto
$validador = new Alban\ValidadorEc;

// validar CI
if ($validador->validarCedula('0926687856')) {
    echo 'Cédula válida';
} else {
    echo 'Cédula incorrecta: '.$validador->getError();
}

// validar RUC persona natural
if ($validador->validarRucPersonaNatural('0926687856001')) {
    echo 'RUC válido';
} else {
    echo 'RUC incorrecto: '.$validador->getError();
}

// validar RUC sociedad privada
if ($validador->validarRucSociedadPrivada('0992397535001')) {
    echo 'RUC válido';
} else {
    echo 'RUC incorrecto: '.$validador->getError();
}

// validar RUC sociedad pública
if ($validador->validarRucSociedadPublica('1760001550001')) {
    echo 'RUC válido';
} else {
    echo 'RUC incorrecto: '.$validador->getError();
}
```


Tests
-------

El paquete se encuentra con su respectiva suite de tests (phpunit) los cuales puedes encontrarlos 
en el siguiente directorio `tests`

Cómo contribuir
------------

Si encuentras algún error o quieres agregar más funcionalidad, por favor siéntete libre de abrir un issue o enviar un pull request, que
lo analizaremos y agregaremos a nuestro repositorio lo mas pronto posible, siempre y cuando cumpla con las siguientes reglas

- Todos los Test deben estar en verde, es decir pasar exitosamente
- Si escribes una nueva funcionalidad este debe tener su propio test, para probar la misma
