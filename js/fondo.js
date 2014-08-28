 var imagen = 1;
            function cambiarfondo(){
                if (imagen == 3)
                    imagen = 0;
                imagen++;
                 $('.body').css('background-image', 'url(\'img/'+imagen+'.jpg\')');
                
            }
            
          $(document).ready(function(){  
              
           $('.body').css('background-image', 'url(\'img/'+imagen+'.jpg\')');
         //  setInterval('contador()',1000);
           setInterval("cambiarfondo();", 15000);
           
           
           $('#login').attr('action', 'c_login.php');
           $('#login').attr('method', 'post');
           $('#ocultar div:first').click(function(){
              alert($('#fuera').width());
               if ($('#fuera').width() != 0){
               $('#fuera').css('width', '0px');
               $(this).attr('class', 'flecha-left');
           } else {
               $('#fuera').css('width', '350px');
               $(this).attr('class', 'flecha-right');
           }
           });
           
          });