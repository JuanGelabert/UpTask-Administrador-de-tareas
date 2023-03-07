<div class="contenedor crear">

    <?php include_once __DIR__ . '/../templates/nombre-sitio.php'; ?>

    <div class="contenedor-sm">
        <p class="descripcion-pagina">Crea tu cuenta en UpTask</p>

        <form action="/" method="POST" class="formulario">
            <div class="campo">
                <label for="nombre">Nombre</label>
                <input
                    type="nombre"
                    name="nombre"
                    id="nombre"
                    placeholder="Tu nombre"
                />
            </div>

            <div class="campo">
                <label for="email">Email</label>
                <input
                    type="email"
                    name="email"
                    id="email"
                    placeholder="ejemplo@mailbox.com"
                />
            </div>

            <div class="campo">
                <label for="password">Password</label>
                <input
                    type="password"
                    name="password"
                    id="password"
                    placeholder="Ingrese su contraseña"
                />
            </div>

            <div class="campo">
                <label for="password2">Repite tu password</label>
                <input
                    type="password"
                    name="password2"
                    id="password2"
                    placeholder="Repite tu password"
                />
            </div>
            <input type="submit" value="Crear cuenta" class="boton">
        </form>

        <div class="acciones">
            <a href="/">¿Ya posees una cuenta? <span>Inicia sesión</span></a>
            <a href="/olvide">¿Olvidaste tu contraseña?</a>
        </div>
    </div> <!-- .contenedor-sm -->
</div>