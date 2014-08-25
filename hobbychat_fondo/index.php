<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="jquery.js"> alert('no cargo el jquery');</script>
        <style>
            
            .body {
                
                transition-duration: 10s;
                transition-property: background;
                transition-delay: 0s;
                background-repeat: no-repeat;
                background-attachment: scroll;
                -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
                
            }
            
            
            form {
                
                border-radius: 10px;
                overflow: hidden;
                box-shadow: 0px 0px 20px whitesmoke;
                margin: 0px auto;
                position: absolute;
                top: 50%;
                left: 50%;
                width: 350px;
                height: 200px;
                margin-top: -100px;
                margin-left: -150px;
                background: black;
                opacity: 0.7;
                padding: 10px;
                text-align: left;
                
            }
            
            form input {
                
                border-radius: 5px;
                border: 1px aqua solid;
                height: 30px;
                width: 100%;
                opacity: 1;
            }
            
            form button {
                
                //text-align: right;
                background: deepskyblue;
                border-radius: 5px;
                height: 30px;
                width: 25%;
                float: right;
                
            }
            
            form div {
                 //display: table-caption;
                 width: 100%;
                 
            }
        </style>
        <script>
            var imagen = 1;
            function cambiarfondo(){
                if (imagen == 3)
                    imagen = 0;
                imagen++;
                 $('.body').css('background-image', 'url(\''+imagen+'.jpg\')');
                
            }
            
          $(document).ready(function(){  
              
           $('.body').css('background-image', 'url(\''+imagen+'.jpg\')');
         //  setInterval('contador()',1000);
           setInterval("cambiarfondo();", 15000);
           
           
           $('#login').attr('action', 'c_login.php');
           $('#login').attr('method', 'post');
           
          });
        </script>
        
    </head>
    <body class="body">
        <form id='login'>
            <div>
                Clave:
                <input type="text" name="valor"/><br>
                Nombre:
                <input type="text" name="txtname"/><br>
                Contraseña:
                <input type="password" name="txtpass"/><br><br>
                <button>Entrar</button>
            </div>
        </form>
    </body>
</html>
