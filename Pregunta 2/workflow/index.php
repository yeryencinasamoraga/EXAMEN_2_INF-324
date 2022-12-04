<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pregunta 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="js/jquery-1.12.4-jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <style type="text/css">
	.login-form {
		width: 340px;
    	margin: 20px auto;
	}
    .login-form form {
    	margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .login-form h2 {
        margin: 0 0 15px;
    }
    .form-control, .btn {
        min-height: 38px;
        border-radius: 2px;
    }
    .btn {        
        font-size: 15px;
        font-weight: bold;
    }
</style>
  </head>
  <body background="fondo.jpg">
    <br><br><br><br><br><br><br><br>
   <div class="login-form">         
            <form method="get" class="form-horizontal" action="indexcontrol.php">
            <h2>INICIO DE SESION</h2>
              <div class="form-group">
              <label class="col-sm-6 text-left">Usuario</label>
              <div class="col-sm-12">
              <input type="text" name="usuario" id = "usuario" class="form-control" placeholder="Ingrese Usuario" />
              </div>
              </div>
                  
              <div class="form-group">
              <label class="col-sm-6 text-left">Password</label>
              <div class="col-sm-10">
              <input type="password" id="password" name="password" class="form-control" placeholder="Ingrese passowrd" />
              </div>
              <div class="col-md-2">
              <button type="button" onclick="mostrarContrasena()"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16" >
              <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
              <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
              </svg></button>
                <i class="bi bi-eye" type="button" onclick="mostrarContrasena()"></i>
            </div>
              <script>
              function mostrarContrasena(){
                  var tipo = document.getElementById("txt_contra");
                  if(tipo.type == "password"){
                      tipo.type = "text";
                  }else{
                      tipo.type = "password";
                  }
              }
            </script>
              </div>
              
              <div class="form-group">
              <div class="col-sm-12">
              <input type="submit" class="btn btn-success btn-block" value="Iniciar Sesion">
              </div>
              </div>
              
              <div class="form-group">
              <div class="col-sm-12">
              ¿No tienes una cuenta? <a href="#"><p class="text-info">Registrar Cuenta</p></a>		
              </div>
              </div>
              <div class="form-group">
              <div class="col-sm-12">
              <a href="#"><p class="text-info">¿Olvidaste tu contraseña?</p></a>		
              </div>
              </div>
                
          </form>
  </div> 
  </body>
</html>