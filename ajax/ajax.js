    $(document).on('ready',function(){

      $('#btn-ingresar').click(function(){
        var url = "controlador/calculadora.php";  

        $.ajax({                        
           type: "POST",                 
           url: url,                    
           data: $("#formulario").serialize(),
           success: function(data)            
           {
             //$('#resp').html(data);
             document.getElementById("resp").value = data;
             console.log('Datos'.data);
           }
         });
      });
    });
