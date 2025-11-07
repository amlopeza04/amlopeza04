function validar (event){
    event.preventDefault()

    let enviar = true;

    let banco = document.getElementById ("banco")
    if (banco.value == ""){
        banco.classList.add("error")
        enviar = false
    }
    let nombre = document.getElementById ("nombre")
    if (nombre.value == ""){
        nombre.classList.add("error")
        enviar = false
    }
    let cuenta_bancaria = document.getElementById ("cuenta_bancaria")
    if (cuenta_bancaria.value == ""){
        cuenta_bancaria.classList.add("error")
        enviar = false
    }
    let deudas = document.getElementById ("deudas")
    if (deudas.value == ""){
        deudas.classList.add("error")
        enviar = false
    }
    
    if (enviar){
        let formulario = document.getElementById ("formcrear")
        formulario.submit ()
    }
}
