<div class="container d-flex align-items-center justify-content-center min-vh-100">
        <div class="card p-4 shadow rounded" style="max-width: 500px; width: 100%;">
            <h3 class="text-center mb-4">Crear una cuenta</h3>
            <form action="form_registro" method="POST">
                <input type="hidden" name="perfil_id" value="2">
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                </div>
                <div class="mb-3">
                    <label for="apellido" class="form-label">Apellido</label>
                    <input type="text" class="form-control" id="apellido" name="apellido" required>
                </div>
                <div class="mb-3">
                    <label for="usuario" class="form-label">Nombre de Usuario</label>
                    <input type="text" class="form-control" id="usuario" name="usuario" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Correo electrónico</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="ejemplo@correo.com" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="pass" name="pass" required>
                </div>
                <div class="mb-3">
                    <label for="confirmar" class="form-label">Confirmar contraseña</label>
                    <input type="password" class="form-control" id="confirmar_pass" name="confirmar_pass" required>
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-dark">Registrarse</button>
                </div>
                <div class="text-center mt-3">
                    <small>¿Ya tenés una cuenta? <a class= "linkPersonalizado" href="login">Iniciar sesión</a></small>
                </div>
            </form>
        </div>
    </div>