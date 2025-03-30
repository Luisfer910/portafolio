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
            <?php
            // Asignar proyectos a los divs correspondientes
            for ($i = 0; $i < 3; $i++): 
                if (isset($proyectos[$i])): // Verificar si el proyecto existe en la posición actual
                    $proyecto = $proyectos[$i];
            ?>
                <div class="col-sm-4 verde verde-<?php echo $i + 1; ?>"> 
                    <!-- Imagen y título del proyecto -->
                    <img class="img-portafolio" src="<?php echo htmlspecialchars($proyecto['imagen']); ?>" alt="<?php echo htmlspecialchars($proyecto['titulo']); ?>">
                    <h3><?php echo htmlspecialchars($proyecto['titulo']); ?></h3>
                    
                    <!-- Botón para mostrar/ocultar la descripción -->
                    <button class="btn-descripcion" onclick="toggleDescripcion(<?php echo $i; ?>)">Descripción</button>
                    
                    <!-- Descripción oculta por defecto -->
                    <p id="descripcion-<?php echo $i; ?>" class="descripcion" style="display: none;">
                        <?php echo htmlspecialchars($proyecto['descripcion']); ?>
                    </p>
                </div>
            <?php 
                endif;
            endfor; 
            ?>
        </div>
    </div>
</section>

<script>
    // Función para mostrar/ocultar la descripción
    function toggleDescripcion(index) {
        const descripcion = document.getElementById(`descripcion-${index}`);
        if (descripcion.style.display === "none") {
            descripcion.style.display = "block"; // Mostrar descripción
        } else {
            descripcion.style.display = "none"; // Ocultar descripción
        }
    }
</script>

