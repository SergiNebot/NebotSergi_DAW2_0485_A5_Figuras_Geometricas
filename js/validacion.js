function validar_seleccion_figura() {
    let figura = document.getElementById("figura");
    if (figura.selectedIndex === 0) {
        document.getElementById("error").innerText = "Por favor, selecciona una figura.";
    } else {
        document.getElementById("error").innerText = "";
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

