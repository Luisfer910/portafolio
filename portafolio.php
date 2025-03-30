<?php // Incluyo la configuración de la BD
require_once 'db_config.php';

// Consulta para obtener los proyectos del portafolio
$query = "SELECT * FROM portafolio";
$stmt = $pdo->prepare($query);
$stmt->execute();
$proyectos = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>


<section class="portafolio" id="portafolio">  <!-- Sección de portafolio donde se muestran los proyectos realizados -->
    <div class="titulo"> <h2>Portafolio</h2> </div>
    <hr class="hr">
    
    <div class="container">
        <!-- Contenedor principal para organizar los elementos del portafolio -->
        <div class="row">
              <?php foreach ($proyectos as $proyecto): ?>
                 <!-- Primera columna: Proyecto 1 -->
                <div class="col-sm-4 verde verde-1"> 
                          <!-- Cambio la imagen representativa por primer archivo obtenido de la base de datos con id=1 -->
                     <img class="img-portafolio" src="<?php echo htmlspecialchars($proyecto['imagen']); ?>" alt="<?php echo htmlspecialchars($proyecto['titulo']); ?>">
                     <h3><?php echo htmlspecialchars($proyecto['titulo']); ?></h3>
                     <p><?php echo htmlspecialchars($proyecto['descripcion']); ?></p>
                </div>
            
            <!-- Segunda columna: Proyecto 2 -->
            <div class="col-sm-4 verde verde-2">
                 <!-- Cambio la imagen representativa por primer archivo obtenido de la base de datos con id=2 -->
                <img class="img-portafolio" src="img/informatica.png" alt="">
            </div>
            
            <!-- Tercera columna: Proyecto 3 -->
            <div class="col-sm-4 verde verde-3">
                  <!-- Cambio la imagen representativa por primer archivo obtenido de la base de datos con id=3 -->
                <img class="img-portafolio" src="img/diseño.png" alt="Diseño">
            </div>
        </div>
    </div>
</section>
