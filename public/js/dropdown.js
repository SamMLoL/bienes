$("#codMarca").change(function(event){

	$.get("denCoMarcas/"+event.target.value+"",function(response,codMarca){
  //recorrer respuentas e incluir en el select las areas
  $('#denCoMar').removeAttr('disabled');
  
   $("#denCoMar").empty();
    $("#denCoMar").append("<option value='0' disabled selected>Seleccione... </option>");
     for(i=0; i<response.length; i++){
     	$("#denCoMar").append("<option value='"+response[i].id+ "'> "+response[i].opcion+"</option>");
         

      }
	 });
 });

  $("#denCoMar").change(function(event){
    
    $.get("nomFabricante/"+event.target.value+"",function(response,denCoMar){
  //recorrer respuentas e incluir en el select las areas
     $('#nomFabri').removeAttr('disabled');
  
       $("#nomFabri").empty();
        $("#nomFabri").append("<option value='0' disabled selected>Seleccione... </option>");
        for(i=0; i<response.length; i++){
          $("#nomFabri").append("<option value='"+response[i].id+ "'> "+response[i].opcion+"</option>");

         }
      });

   });