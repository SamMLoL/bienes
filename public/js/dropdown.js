//REGISTRAR BIENES

$("#codMarca").change(function(event){

	$.get("dropdown/"+event.target.value+"",function(response,codMarca){
  //recorrer respuentas e incluir en el select las areas
  $('#codModel').removeAttr('disabled');
  
   $("#codModel").empty();
    $("#codModel").append("<option value='0' disabled selected>Seleccione... </option>");
     for(i=0; i<response.length; i++){
     	$("#codModel").append("<option value='"+response[i].id+ "'> "+response[i].codModel+"</option>");

      }
	 });
 });

//MODIFICAR BIENES

    $("#codMarca2").change(function(event){
    	var rut = $('#rut').val();
    $.get(rut+'/'+event.target.value+"",function(response,codMarca){
  //recorrer respuentas e incluir en el select las areas
  $('#codModel2').removeAttr('disabled');
  
   $("#codModel2").empty();
    $("#codModel2").append("<option value='0' disabled selected>Seleccione... </option>");
     for(i=0; i<response.length; i++){
        $("#codModel2").append("<option value='"+response[i].id+ "'> "+response[i].codModel+"</option>");

      }
     });
    });

