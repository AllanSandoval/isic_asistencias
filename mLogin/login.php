<div class="login-box" >
    <div class="login-box-body bordeLogin">

        <p class="tituloLogin">Sistema Control de Accesos</p>
        
        <form action="verificar_login.php" method="post" id="frmLogin" style="border-color:#40739e">
            <div class="form-group has-feedback logoActivo">
                <label class="lblTitulo">Usuario:</label>
            <input type="usuario" id="loginUsuario" class="form-control" placeholder="Escribe el nombre de usuario" autofocus required>
            </div>
            <div class="form-group has-feedback">
                <label class="lblTitulo">Contraseña:</label>
            <input type="password" name="password" id="loginContra" class="form-control" placeholder="Escribe la contraseña" required>

            <button class="btn btn-secondary" type="button" onclick="MostrarContrasenaL()">Mostrar/Ocultar</button>
           
            </div>

                <div class="col text-center">
                    <button   type="submit" class="btn btn-outline-dark active" id="btnIngresar" disabled>
                        <i class="fas fa-lock" id="icoLogin"></i>
                        Ingresar al sistema
                    </button>
                </div>
                <br>
                <div class="col text-center">
                <input type="checkbox" checked data-toggle="toggle" data-size="sm" data-on="SI" data-off="NO"   id="camcon">
                        Actualizar contraseña
                        <i class="fas fa-user-lock" id="icoLogin"></i>
                    </button>
                </div>
        </form>
    </div>
</div>