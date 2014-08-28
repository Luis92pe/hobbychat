$(document).ready(function() {
      $('#g1').click(function(event) {
        $('#g1').css('width', '300');
        $('#chat1').css('display', 'block');
      });

      $('#chat1_close').click(function(event) {
        
        $('#chat1').css('display', 'none');
        $('#g1').css('width', 'auto');
        
      });

      $('#input123').keypress(function(event) {
        if(event.which == 13){
          $('#hei-content').append('<div class="from" ><div  >'+$('#input123').val()+'</div></div>');
          $('#content_chat').scrollTop($('#hei-content').height());
          $('#input123').val('');
        }

      });

    });