window.addEventListener("load", function() {
fetch("https://restcountries.eu/")
    .then(function(response) {
      return response.json();
    })
    .then(function(json) {
      ul = document.querySelector("ul")
      tipos = json.results
    
      for (var i = 0; i < tipos.length; i++) {
        ul.innerHTML += "<li>" + tipos[i].name + "</li>"
      }
    })
}