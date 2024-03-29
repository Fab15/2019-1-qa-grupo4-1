<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        
        <link href="<?php echo e(asset('css/Botones.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('css/Cuerpo.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('css/Inputs/Inputs.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('css/Inputs/normalizarInputs.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('fonts/font-awesome-4.2.0/css/font-awesome.min.css')); ?>" rel="stylesheet">

        <title>App Social</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <?php if(Route::has('login')): ?>
                <div class="top-right links">
                    <?php if(auth()->guard()->check()): ?>
                        <a href="<?php echo e(url('/home')); ?>">Home</a>
                    <?php else: ?>
                        <a href="<?php echo e(route('login')); ?>">Login</a>

                        <?php if(Route::has('register')): ?>
                            <a href="<?php echo e(route('register')); ?>">Register</a>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <div class="container">
            <section class="content">
                <img src="img/Logo-Imagen.png" class="img-responsive" width="30%" height="30%">
                <br>
                <span class="input" id="inputLogin">
                    <input id="inputFieldLogin" class="inputField" type="text" id="correo" placeholder="Correo" />
                    <label class="inputLabel inputLabelAzul" for="email">
                        <i class="fa fa-fw fa-envelope icono iconoInput"></i>
                        <span class="inputLabelContenido"></span>
                    </label>
                </span>
                <br>
                <span class="input" id="inputLogin">
                    <input class="inputField" type="password" id="pass" placeholder="Contraseña" />
                    <label class="inputLabel inputLabelAzul" for="contrasena">
                        <i class="fa fa-fw fa-lock icono iconoInput"></i>
                        <span class="inputLabelContenido"></span>
                    </label>
                </span>
                <br><br>
                <button onclick="location.href='menu.html';" class="boton botonAzul">Entrar</button>
            </section>
        </div>
        </div>
    </body>
</html>

<?php /* C:\xampp\htdocs\proyectos\laravel\appsocial\resources\views/welcome.blade.php */ ?>