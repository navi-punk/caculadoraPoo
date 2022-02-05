function readRecords() {
        $.get("ajax/listaResultados.php", {}, function (data, status) {
            $("#records_content").html(data);
        });
    }
        
   // Add Record
function addRecord() {
       alert('enviar datos');
    var variable1 = $("#variable1").val();
    var variable2 = $("#variable2").val();
    var operador = $("#operador").val();
    var resp = $("#resp").val();


    // Add record
    $.post("ajax/agregarDatos.php", {
        variable1: variable1,
        variable2: variable2,
        operador: operador,
        resp:resp
    }, function (data, status) {

        // read records again
        readRecords();

        // clear fields from the popup
        $("#variable1").val("");
        $("#variable2").val("");
        $("#operador").val("");
        $("#resp").val("");

    });
}   

$(document).on('ready',function(){
        readRecords();

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
