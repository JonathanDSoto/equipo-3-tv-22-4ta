var form = document.getElementById('form')
var inputs = document.querySelectorAll('#form input')

const expresiones = {
    //usuario: /^[a-zA-Z0-9\_\-]{8,16}$/, // MIN 8 MAX 16 Letras, numeros, guion y guion_bajo
    texto: /^[a-zA-ZÀ-ÿ\s]{2,200}$/, // MIN 2 MAX 120 Letras y espacios, pueden llevar acentos.
}
const campos = {
    name: true,
    description: true,
}

const validarCampo = (expresion, input, campo) => {
    if (expresion.test(input.value)) {
        document.querySelector(`#grupo_${campo}`).classList.remove('formulario__input-error-activo')
        campos[campo] = true
    } else {
        document.querySelector(`#grupo_${campo}`).classList.add('formulario__input-error-activo')
        campos[campo] = false
    }
}

var validarForm = (e) => {
    switch (e.target.name) {
        case "name":
            validarCampo(expresiones.texto, e.target, 'name')
            break;
        case "description":
            validarCampo(expresiones.texto, e.target, 'description')
            break;
    }

}
var validarFormLleno = (e) => {
    switch (e.target.name) {
        case "name":
        case "description":
            if(e.target.value===null || e.target.value===''){
                // alert('The '+e.target.input+' is necesary')
            }else{
                campos[e.target.name] = true
            }
            break;
    }
}
inputs.forEach((input) => {
    input.addEventListener('keyup', validarForm)
    input.addEventListener('blur', validarForm)
    input.addEventListener('mouseenter', validarFormLleno)

})


document.addEventListener('mousemove', e => {
    if (campos.description && campos.name) {
        document.getElementById('send').disabled = false
    } else {
        document.getElementById('send').disabled = true
    }
})