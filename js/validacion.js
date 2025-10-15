function validar_seleccion_figura() {
    let select = document.getElementById("figura");

    if (select.selectedIndex === 0 || select.value === "") {
        document.getElementById("error").textContent = "Selecciona una figura";
        return false;
    } else {
        document.getElementById("error").textContent = "";
        return true;
    }
}

function validar_base_triangulo(){
    let base = document.getElementById("base_triangulo").value;
    let errorElement = document.getElementById("error_base");

    if (base === ""){
        errorElement.innerText = "Por favor, introduzca la base.";
    } else if (base <= 0){
        errorElement.innerText = "El número tiene que ser más grande que 0.";
    } else{
        errorElement.innerText = "";        
    }
}

function validar_altura_triangulo(){
    let altura = document.getElementById("altura_triangulo").value;
    let errorElement = document.getElementById("error_altura");

    if (altura === ""){
        errorElement.innerText = "Por favor, introduzca la altura.";
    } else if (altura <= 0){
        errorElement.innerText = "El número tiene que ser más grande que 0.";
    }else {
        errorElement.innerText = "";
    }
}

function validar_primer_lado_triangulo() {
    let lado_1 = document.getElementById("lado_1_triangulo").value;
    let errorElement = document.getElementById("error_lado1");
    
    if (lado_1 === ""){
        errorElement.innerText = "Por favor, introduzca los datos del primer lado.";
    } else if (lado_1 <= 0){
        errorElement.innerText = "El número tiene que ser más grande que 0.";
    }else {
        errorElement.innerText = "";
    }
}

function validar_segundo_lado_triangulo(){
    let lado_2 = document.getElementById("lado_2_triangulo").value;
    let errorElement = document.getElementById("error_lado2");

    if (lado_2 === ""){
        errorElement.innerText = "Por favor, introduzca los datos del segundo lado.";
    } else if (lado_2 <= 0){
        errorElement.innerText = "El número tiene que ser más grande que 0.";
    }else {
        errorElement.innerText = "";
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