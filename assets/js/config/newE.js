var form = document.getElementById('form')
var inputs = document.querySelectorAll('#form input')

const expresiones = {
    //usuario: /^[a-zA-Z0-9\_\-]{8,16}$/, // MIN 8 MAX 16 Letras, numeros, guion y guion_bajo
    texto: /^[a-zA-ZÀ-ÿ\s]{2,20}$/, // MIN 2 MAX 120 Letras y espacios, pueden llevar acentos.
    code: /^.{1,18}$/, // 8 a 12 digitos.
    correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
    numero: /^\d{1,18}$/ 
}
const campos = {
    description: false,
    weight_in_grams: false,
    code: false,
    stock: false,
    stock_min: false,
    stock_max: false,
    amount: false
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
        case "description":
            validarCampo(expresiones.texto, e.target, 'description')
            break;
        case "weight_in_grams":
            validarCampo(expresiones.numero, e.target, 'weight_in_grams')
            break;
        case "code":
            validarCampo(expresiones.code, e.target, 'code')
            break;
        case "stock":
            validarCampo(expresiones.numero, e.target, 'stock')
            break;
        case "stock_min":
            validarCampo(expresiones.numero, e.target, 'stock_min')
            break;
        case "stock_max":
            validarCampo(expresiones.numero, e.target, 'stock_max')
            break;
        case "amount":
            validarCampo(expresiones.numero, e.target, 'amount')
            break;
    }

}

var validarFormLleno = (e) => {
    switch (e.target.name) {
        case "description":
        case "weight_in_grams":
        case "code":
        case "stock":
        case "stock_min":
        case "stock_max":
        case "amount":
            if(e.target.value===null || e.target.value===''){
                //alert('The '+e.target.input+' is necesary')
            }else{
                campos[e.target.name] = true
            }
            break;
    }

}

inputs.forEach((input) => {
    input.addEventListener('blur', validarForm)
    input.addEventListener('mouseenter', validarFormLleno)
    input.addEventListener('keyup', validarForm)
})


document.addEventListener('mousemove', e => {
    if (campos.description && campos.weight_in_grams && campos.code && campos.stock && campos.stock_max && campos.stock_min && campos.amount) {
        document.getElementById('send').disabled = false
    } else {
        document.getElementById('send').disabled = true
    }
})