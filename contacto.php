<section class="contacto" id="contacto">  <!-- Sección de contacto con un formulario para que los usuarios puedan enviar mensajes -->
    <h2 class="titulo">Contáctame</h2>
    <hr class="hr">
    <div class="container formulario">
        <form action="procesar_contacto.php" method="POST"> <!-- incorporo el archivo en donde se enviaran los datos -->
            <!-- Campo para ingresar el nombre del usuario -->
            <div class="mb-3">
                <label for="name" class="form-label">Nombre:</label>
                <!-- Input de texto con validación para aceptar solo letras y espacios -->
                <input type="text" class="form-control" id="name" aria-describedby="names" 
                       required pattern="[A-Za-zÀ-ÿ\s]+" 
                       title="Ingresa solo letras y espacios">
            </div>
            
            <!-- Campo para ingresar el correo electrónico del usuario -->
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <!-- Input de tipo email con validación para un formato correcto -->
                <input type="email" class="form-control" id="exampleInputEmail1" 
                       aria-describedby="emailHelp" required>
            </div>
            
            <!-- Campo para ingresar el número de teléfono del usuario -->
            <div class="mb-3">
                <label for="number" class="form-label">Número de Teléfono</label>
                <!-- Input de tipo teléfono con validación para aceptar solo 9 dígitos -->
                <input type="tel" class="form-control" id="number" 
                       required pattern="\d{9}" 
                       title="Ingresa un número de 9 dígitos">
            </div>
            
            <!-- Campo para ingresar el mensaje del usuario -->
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Mensaje</label>
                <!-- Textarea con validación para un mínimo de 10 caracteres -->
                <textarea class="form-control" id="exampleFormControlTextarea1" 
                          rows="3" required minlength="10" 
                          title="El mensaje debe tener al menos 10 caracteres"></textarea>
            </div>
            
            <!-- Botón para enviar el formulario -->
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
</section>
