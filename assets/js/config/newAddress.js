var form = document.getElementById('form')
var inputs = document.querySelectorAll('#form input')

const expresiones = {
    texto: /^[a-zA-ZÀ-ÿ\s]{2,30}$/, // MIN 2 MAX 30 Letras y espacios, pueden llevar acentos.
    multiple: /^.{2,18}$/, 
    correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
    num: /^\d{4,6}$/, // 4 a 6 numeros.
    phone: /^\d{10,14}$/ // 4 a 6 numeros.
}
const campos = {
    name: false,
    lastname: false,
    street: false,
    postal_code: false,
    city: false,
    province: false,
    phone_number: false
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
        case "lastname":
            validarCampo(expresiones.texto, e.target, 'lastname')
            break;
        case "street":
            validarCampo(expresiones.multiple, e.target, 'street')
            break;
        case "postal_code":
            validarCampo(expresiones.num, e.target, 'postal_code')
            break;
        case "city":
            validarCampo(expresiones.texto, e.target, 'city')
            break;
        case "province":
            validarCampo(expresiones.texto, e.target, 'province')
            break;
        case "phone_number":
            validarCampo(expresiones.phone, e.target, 'phone_number')
            break;
    }

}

inputs.forEach((input) => {
    input.addEventListener('keyup', validarForm)
    input.addEventListener('blur', validarForm)
})

document.addEventListener('mousemove', e => {
    if (campos.lastname && campos.name && campos.street &&
        campos.postal_code && campos.city
         && campos.province && campos.phone_number) {
        document.getElementById('send').disabled = false
    } else {
        document.getElementById('send').disabled = true
    }
})