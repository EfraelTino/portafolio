const  header = document.getElementById("header-icon-nav");
const cerrar =document.getElementById("ico-cerrar");
isOpen=false;
function abrirHeader(){
	if(isOpen){
		header.classList.remove("ver-header");
		header.classList.add("wrap-navint");
		header.style.pointerEvents="none";

		// remuevo el menu
		cerrar.classList.add("icon-menu");
		cerrar.classList.remove("icon-x");
		cerrar.style.background="rgba(255, 255, 255, 0.15)";
		cerrar.style.backdropFilter= 7 + "px";
	}else{
		// remuevo el header
		header.classList.remove("wrap-navint");
		header.classList.add("ver-header");
		header.style.pointerEvents="auto";

		// funcion icono
		cerrar.classList.add("icon-x");
		cerrar.style.background="none";
		cerrar.classList.remove("icon-menu");
		cerrar.style.backdropFilter= "none";
	}
	isOpen = !isOpen;
}