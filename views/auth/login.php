<div class="contenedor login">
    <h1 class="uptask">UpTask</h1>
    <p class="tagline">Crea y administra tus proyectos</p>

    <div class="contenedor-sm">
        <p class="descripcion-pagina">Iniciar sesión</p>

        <form action="/" method="POST" class="formulario">
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
            <input type="submit" value="Iniciar sesión" class="boton">
        </form>

        <div class="acciones">
            <a href="/crear">¿Aún no posees una cuenta? <span>Regístrate gratis</span></a>
            <a href="/olvide">¿Olvidaste tu contraseña?</a>
        </div>
    </div> <!-- .contenedor-sm
</div>