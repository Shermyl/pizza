document.addEventListener("DOMContentLoaded", () => {
    const buscarIcono = document.querySelector(".buscar-icono"); // Icono de búsqueda
    const buscarBar = document.querySelector(".buscar-bar");     // Cuadro de búsqueda

    // Mostrar el cuadro al hacer hover o clic en el ícono
    buscarIcono.addEventListener("mouseenter", () => {
        buscarBar.style.transform = "scaleY(1)";
    });

    buscarIcono.addEventListener("click", () => {
        buscarBar.style.transform = "scaleY(1)";
    });

    // Ocultar el cuadro si el cursor sale del cuadro de búsqueda
    buscarBar.addEventListener("mouseleave", () => {
        buscarBar.style.transform = "scaleY(0)";
    });

    // Opcional: Ocultar si se hace clic fuera del cuadro
    document.addEventListener("click", (e) => {
        if (!buscarBar.contains(e.target) && !buscarIcono.contains(e.target)) {
            buscarBar.style.transform = "scaleY(0)";
        }
    });
});


