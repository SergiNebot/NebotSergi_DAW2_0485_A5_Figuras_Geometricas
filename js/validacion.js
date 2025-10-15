function validar_seleccion_figura() {
    let select = document.getElementById("figura");

    if (select.selectedIndex === 0 || select.value === "") {
        document.getElementById("error").textContent = "Tienes que seleccionar una figura";
        return false;
    } else {
        document.getElementById("error").textContent = "";
        return true;
    }
}

function validar_base_triangulo(){
    let base = document.getElementById("base_triangulo").value;

    if (base === ""){
        document.getElementById("error").innerText = "Por favor, introduzca la base.";
    } else if (base <= 0){
        document.getElementById("error").innerText = "El número tiene que ser más grande que 0.";
    } else{
        document.getElementById("error").innerText = "";        
    }
}
function validar_altura_triangulo(){
    let altura = document.getElementById("altura_triangulo").value;

    if (altura === ""){
        document.getElementById("error_2").innerText = "Por favor, introduzca la altura.";
    } else if (altura <= 0){
        document.getElementById("error_2").innerText = "El número tiene que ser más grande que 0.";
    }else {
        document.getElementById("error_2").innerText = "";
    }
}

function validar_primer_lado_triangulo() {
    let lado_1 = document.getElementById("lado_1_triangulo").value;
    
    if (lado_1 === ""){
        document.getElementById("error_3").innerText = "Por favor, introduzca los datos de este lado.";
    } else if (lado_1 <= 0){
        document.getElementById("error_3").innerText = "El número tiene que ser más grande que 0.";
    }else {
        document.getElementById("error_3").innerText = "";
    }
}

function validar_segundo_lado_triangulo(){
    let lado_2 = document.getElementById("lado_2_triangulo").value;

    if (lado_2 === ""){
        document.getElementById("error_4").innerText = "Por favor, introduzca los datos de este lado.";
    } else if (lado_2 <= 0){
        document.getElementById("error_4").innerText = "El número tiene que ser más grande que 0.";
    }else {
        document.getElementById("error_4").innerText = "";
    }
}

function validar_radio_circulo(){
    let radio = document.getElementById("radio").value;
    if (radio === ""){
        document.getElementById("error").innerText = "Por favor, introduzca el radio.";
    } else if (radio <= 0){
        document.getElementById("error").innerText = "El número tiene que ser más grande que 0.";
    } else{
        document.getElementById("error").innerText = "";        
    };
}

function validar_base_rectangulo(){
    let base = document.getElementById("base_rectangulo").value;
    if (base === ""){
        document.getElementById("error").innerText = "Por favor, introduzca la base.";
    } else if (base <= 0){
        document.getElementById("error").innerText = "El número tiene que ser más grande que 0.";
    } else{
        document.getElementById("error").innerText = "";        
    }
}

function validar_altura_rectangulo(){
    let altura = document.getElementById("altura_rectangulo").value;
    if (altura === ""){
        document.getElementById("error_2").innerText = "Por favor, introduzca la altura.";
    } else if (altura <= 0){
        document.getElementById("error_2").innerText = "El número tiene que ser más grande que 0.";
    } else{
        document.getElementById("error_2").innerText = "";        
    }
}

function validar_lado_cuadrado(){
    let lado = document.getElementById("lado_cuadrado").value;
    if (lado === ""){
        document.getElementById("error").innerText = "Por favor, introduzca el lado.";
    } else if (lado <= 0){
        document.getElementById("error").innerText = "El número tiene que ser más grande que 0.";
    } else{
        document.getElementById("error").innerText = "";        
    }
}