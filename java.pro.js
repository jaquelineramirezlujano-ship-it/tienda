// FUNCION PARA SUMAR
function sumar(boton) {
    // busca el span más cercano con la clase "contador"
    let contador = boton.parentElement.querySelector(".contador");

    // convierte el texto en número y suma
    let cantidad = parseInt(contador.textContent);
    contador.textContent = cantidad + 1;
}

// FUNCION PARA RESTAR
function restar(boton) {
    let contador = boton.parentElement.querySelector(".contador");
    let cantidad = parseInt(contador.textContent);

    if (cantidad > 0) {
        contador.textContent = cantidad - 1;
    }
}

// LISTA DEL CARRITO
let carrito = [];

// FUNCION PARA AGREGAR AL CARRITO
function agregarCarrito(nombre, precio) {
    // Busca la tarjeta donde se presionó el botón
    let productoDiv = event.target.closest(".producto");

    // Obtiene la cantidad actual de ese producto
    let cantidad = parseInt(productoDiv.querySelector(".contador").textContent);

    if (cantidad === 0) {
        alert("Debes seleccionar al menos 1 unidad.");
        return;
    }

    // Verifica si ya existe en el carrito
    let existente = carrito.find(item => item.nombre === nombre);

    if (existente) {
        existente.cantidad += cantidad;
    } else {
        carrito.push({
            nombre: nombre,
            precio: precio,
            cantidad: cantidad
        });
    }

    // Reinicia el contador a 0
    productoDiv.querySelector(".contador").textContent = "0";

    console.log("Carrito actualizado:", carrito);

    alert(nombre + " agregado(s) al carrito.");
}