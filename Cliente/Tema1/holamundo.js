//alert('Saludos desde la clase');
console.log('Hola desdde la consola');
let i = 0;

//alert('Esto se muestra después');
let h2 = document.querySelector('h2');
h2.textContent="Hola otra vez";
h2.style.color = "#0000FF";   

function modificaH2(evento){
    i++;
    document.getElementById('prueba').innerHTML = 'Parrafo cambiado ' + i + ' veces!';
}
// Enlazar el botón con la acción (la función) correspondiente, al clickar se llama a modificarH2
// IMPORTANTE NO USAR PARÉNTESIS AQUI
// ('click', modificaH2)   -> Al clickar ejecuta "modifica2"
// ('click', modificaH2()) -> Al clickar ejecuta LO QUE DEVUELVA "modifica2", osea nada porque no hay return
document.getElementById('button2').addEventListener('click', modificaH2);

// Buscar por nombre de etiqueta
//document.getElementsByTagName('button')[0].addEventListener('click', modificaH2);

// Buscar el PRIMER elemento de ese tipo
//document.querySelector('button').addEventListener('click', modificaH2);


// Elevación de funciones y varables:
// Los elementos elevados  se considera como si estuvieran arriba del todo en el código (DENTRO DE SU ÁMBITO)
// "funtion" y varables declaradas (con y sin "var") SON ELEVADAS
// Varables declaradas con "let" y "const" NO SON ELEVADAS

// No es buena práctica usar "var"