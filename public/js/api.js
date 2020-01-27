
fetch("https://apis.datos.gob.ar/georef/api/provincias")

    .then(function(response) {

      return response.json();
      
    })
    .then(function(json) {

      var select = document.getElementById("locality-dropdown");

      var tipos = json;
    
      for (var i = 0; i < tipos.provincias.length; i++) {
        select.innerHTML += "<option style='text-align-last = center; text-akign = center;' value="+tipos.provincias[i].id+">"+tipos.provincias[i].nombre +"</option>" 
      }

    }) .catch(function(error){
      console.log(error);
})

