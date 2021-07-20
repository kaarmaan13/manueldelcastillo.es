const menuItem = document.querySelectorAll(".items-menu");

const inicio = document.getElementById('aInicio')
const servicios = document.getElementById('aServicios')
const sobreMi = document.getElementById('aSobremi')

// Get the parent DIV, add click listener...
document.getElementById('menuId').addEventListener("click", function (e) {
    // e.target was the clicked element
    if (e.target && e.target.matches("a#aInicio")) {
      console.log("Anchor element clicked!");
      inicio.classList.add('active')
    } else {
      inicio.classList.remove('active')
    }

    if (e.target && e.target.matches("a#aServicios")) {
      console.log("Anchor element clicked!");
      servicios.classList.add('active')
    } else {
      servicios.classList.remove('active')
    }
    
  });
