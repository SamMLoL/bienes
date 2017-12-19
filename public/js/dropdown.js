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

