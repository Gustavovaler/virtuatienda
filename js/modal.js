
 function ventanaModal() {
    $( "#dialog-message" ).dialog({modal: true, buttons: { Ok: function() {
          $( this ).dialog( "close" );
        }
      }
    });
  
};

