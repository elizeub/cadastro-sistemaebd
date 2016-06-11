<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Create Sala</title>
    </head>
    <body>
        <div class = 'container'>
            <h1>Create Sala</h1>
            <form method = 'get' action = 'http://localhost:8000/sala'>
                <button class = 'btn blue'>Sala Index</button>
            </form>
            <br>
            <form method = 'POST' action = 'http://localhost:8000/sala'>
                <input type = 'hidden' name = '_token' value = '<?php echo e(Session::token()); ?>'>
                
                <div class="input-field col s6">
                    <input id="sala" name = "sala" type="text" class="validate">
                    <label for="sala">sala</label>
                </div>
                
                
                <button class = 'btn red' type ='submit'>Create</button>
            </form>
        </div>
    </body>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>
    <script>
    $('select').material_select();
    </script>
</html>
