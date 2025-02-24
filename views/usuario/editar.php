<h2>Editar Usuario</h2>

<form action="<?php echo URL_BASE; ?>index.php?action=actualizar" method="POST">
    <input type="hidden" name="id" value="<?php echo $this->usuario->id; ?>">
    
    <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" value="<?php echo $this->usuario->nombre; ?>" required>
    </div>
    
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="<?php echo $this->usuario->email; ?>" required>
    </div>
    
    <button type="submit">Actualizar</button>
</form>

<p><a href="<?php echo URL_BASE; ?>index.php?action=listar">Volver a la lista</a></p>
