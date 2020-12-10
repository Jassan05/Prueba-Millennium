<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Millennium</title>
    <link rel="stylesheet" href="css/estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
    
</head>
<body class="text-center">
    
    <main class="form-signin">
    <form id="Formulario" method="POST">
        <img class="mb-4" src="icon/img.jpg" alt="" width="150" height="130">
        <h1 class="h3 mb-3 fw-normal">Por favor, complete los datos</h1>
        <label for="Nombre" class="visually-hidden"></label>
            <input type="text" id="Nombre" name="Nombre" class="form-control" placeholder="Nombres" required autofocus>
        <label for="Apellido" class="visually-hidden"></label>
            <input type="text" id="Apellido" name="Apellido" class="form-control" placeholder="Apellidos " required>
        <button class="w-100 btn btn-lg btn-primary" id="Enviar">Sign in</button>
        <p class="mt-5 mb-3 text-muted">&copy; Jassan Yuseff Maquiuth</p>
    </form>
    </main>
</body> 

<!--this is code of ajax -->
<script type="text/javascript">
    $(document).ready(function(){
        $('#Enviar').click(function(){
            var datos=$('#Formulario').serialize();
            $.ajax({
                url: 'datos.php',
                type: 'POST',
                data: datos,
                success: function(res){
                    if(res==1){
                        alert("Registro guardado exitosamente");
                    }else{
                        alert("Fallo al momento de guardar la informaciòn");
                    }
                }
            });

            return false;
        });
    });
</script>
</html>