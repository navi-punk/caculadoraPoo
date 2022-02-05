function readRecords() {
        $.get("ajax/listaResultados.php", {}, function (data, status) {
            $("#records_content").html(data);
        });
    }
        
  
$(document).on('ready',function(){
      readRecords();

      $('#btn-ingresar').click(function(){
        var url = "ajax/calculadora.php";  
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
