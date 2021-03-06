<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Formularios en PHP y HTML</title>
    </head>
    <body>
        <h1>Formulario</h1>
        <form action="" method="POST" enctype="multipart/form-data">
            <!-- Nombre -->
            <label for="nombre">Nombre:</label>
            <p><input type="text" name="nombre" /></p>
            <!-- Apellido -->
            <label for="apellido">Apellido:</label>
            <p>
                <input type="text" name="apellido" />
            </p>
            <!-- Boton -->
            <label for="boton">Boton:</label>
            <p>
                <input type="button" name="boton" value="Presioname" />
            </p>
            <!-- Sexo -->
            <label for="sexo">Sexo:</label>
            <p>
                Hombre
                <input type="checkbox" name="sexo" value="Femenino" /> Mujer
                <input
                    type="checkbox"
                    name="sexo"
                    value="Masculino"
                    checked="checked"
                />
            </p>
            <!-- Color -->
            <label for="color">Color:</label>
            <p>
                <input type="color" name="color" />
            </p>
            <!-- Fecha -->
            <label for="fecha">Fecha:</label>
            <p>
                <input type="date" name="fecha" />
            </p>
            <!-- Correo -->
            <label for="correo">Correo:</label>
            <p>
                <input type="email" name="correo" />
            </p>
            <!-- Archivo -->
            <label for="archivo">Archivo:</label>
            <p>
                <input type="file" name="archivo" />
            </p>

            <!-- Numero -->
            <label for="numero">Numero:</label>
            <p>
                <input type="number" name="numero" />
            </p>
            <!-- Contraseña -->
            <label for="contrasena">Contraseña:</label>
            <p>
                <input type="password" name="contrasena" />
            </p>
            <!-- Radio -->
            <label for="continente">Continente [radio]:</label>
            <p>
                <input
                    type="radio"
                    name="continente"
                    value="América"
                />América<br />
                <input
                    type="radio"
                    name="continente"
                    value="Europa"
                />Europa<br />
                <input type="radio" name="continente" value="Asia" />Asia<br />
                <input
                    type="radio"
                    name="continente"
                    value="África"
                />África<br />
            </p>
            <!-- Pagina web -->
            <label for="web">GitHub:</label>
            <p>
                <input type="url" name="web" />
            </p>
            <!-- Text Area -->
            <label for="area">Texto:</label><br />
            <textarea name="area" id="" cols="50" rows="5"></textarea><br />
            <!-- Select -->
            <select name="peliculas" id="">
                <option value="spiderman">Spider-Man</option>
                <option value="batman">Batman</option>
                <option value="grantorino">Gran Torino</option>
            </select>
            <!-- 
                Atributos para INPUT
                autofocus="autofocus"
                disable="disable"
                minlength="5"
                maxlength="5"
                required="required"
                pattern="[A-Za-z ]+
                placeholder="Ingrese su apellido"
            -->
            <!-- type="hidden" -->
            <input type="submit" value="Enviar" />
        </form>
    </body>
</html>
