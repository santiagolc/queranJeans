
fetch("https://apis.datos.gob.ar/georef/api/provincias")

    .then(function(response) {

      return response.json();
      
    })
    .then(function(json) {

     var ul = document.getElementById("elUl");
     var tipos = json;
      console.log(tipos);
    
      for (var i = 0; i < tipos.provincias.length; i++) {
        ul.innerHTML += "<li>" + tipos.provincias[i].nombre + "</li>" 
      }

    }) .catch(function(error){
      console.log(error);
})

