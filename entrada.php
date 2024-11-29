<?php
    require "includes/app.php";
    $titulo = "BookSpot - Entrada";
    $descripcion = "Visita nuestras entradas de blog";
    use App\Categoria;
    $categorias = Categoria::all();
    incluirTemplate("header", false, $titulo, $descripcion, ['categorias' => $categorias]);
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Guía para el mantenimiento básico de tu vehículo</h1>
   
        <picture>
            <source srcset="build/img/destacada2.avif" type="image/avif">
            <source srcset="build/img/destacada2.webp" type="image/webp">
            <source srcset="build/img/destacada2.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada2.jpg" alt="Imagen Del Blog">
        </picture>

        <p class="informacion-meta">Escrito el: <span>23/10/2024</span> por: <span>Admin</span></p>

        <div class="resumen-entrada">
            <p>Proin consequat viverra sapien, malesuada tempor tortor feugiat vitae.
            In dictum felis et nunc aliquet molestie. Proin tristique commodo felis,
            sed auctor elit auctor pulvinar. Nunc porta, nibh quis convallis sollicitudin,
            arcu nisl semper mi, vitae sagittis lorem dolor non risus. Vivamus accumsan
            maximus est, eu mollis mi. Proin id nisl vel odio semper hendrerit. Nunc porta
            in justo finibus tempor. Suspendisse lobortis dolor quis elit suscipit molestie.
            Sed condimentum, erat at tempor finibus, urna nisi fermentum est, a dignissim
            nisi libero vel est. Donec et imperdiet augue. Curabitur malesuada sodales congue.
            Suspendisse potenti. Ut sit amet convallis nisi.</p>

            <p>Aliquam lectus magna, luctus vel gravida nec, iaculis ut augue. Praesent ac enim
            lorem. Quisque ac dignissim sem, non condimentum orci. Morbi a iaculis neque, ac euismod
            felis. Fusce augue quam, fermentum sed turpis nec, hendrerit dapibus ante. Cras mattis
            laoreet nibh, quis tincidunt odio fermentum vel. Nulla facilisi.</p>
        </div>
    </main>
    
<?php
    incluirTemplate("footer");
?>
