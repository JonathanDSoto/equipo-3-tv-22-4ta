var form = document.getElementById('form')
var inputs = document.querySelectorAll('#form input')

const expresiones = {
    //usuario: /^[a-zA-Z0-9\_\-]{8,16}$/, // MIN 8 MAX 16 Letras, numeros, guion y guion_bajo
    texto: /^[a-zA-ZÀ-ÿ\s]{2,20}$/, // MIN 2 MAX 120 Letras y espacios, pueden llevar acentos.
    password: /^.{8,12}$/, // 8 a 12 digitos.
    correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
    telefono: /^\d{10,14}$/ // 10 a 14 numeros.
}
const campos = {
    name: false,
    lastname: false,
    useremail: false,
    phone_number: false,
    password: false
}

const validarCampo = (expresion, input, campo) => {
    if (expresion.test(input.value)) {
        document.querySelector(`#data_${campo}`).classList.remove('formulario__input-error-activo')
        campos[campo] = true
    } else {
        document.querySelector(`#data_${campo}`).classList.add('formulario__input-error-activo')
        campos[campo] = false
    }
}

const validarPass = () => {
    const input1 = document.getElementById('password')
    const input2 = document.getElementById('password2')

    if (input1.value !== input2.value) {
        document.querySelector(`#data_password2`).classList.add('formulario__input-error-activo')
        campos['password'] = false
    } else {
        document.querySelector(`#data_password2`).classList.remove('formulario__input-error-activo')
        campos['password'] = true
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
        case "useremail":
            validarCampo(expresiones.correo, e.target, 'useremail')
            break;
        case "phone_number":
            validarCampo(expresiones.telefono, e.target, 'phone_number')
            break;
        case "password":
            validarCampo(expresiones.password, e.target, 'password')
            break;
        case "password2":
            validarPass()
            break;
    }

}

inputs.forEach((input) => {
    input.addEventListener('keyup', validarForm)
    input.addEventListener('blur', validarForm)
})


form.addEventListener('submit', e => {
    e.preventDefault()
})


document.addEventListener('mousemove', e => {
    if (campos.name && campos.useremail && campos.password && campos.phone_number && campos.lastname) {
        document.getElementById('send').disabled = false
    } else {
        document.getElementById('send').disabled = true
    }
})


// <p class="formulario__input-error text-danger">El nombre solo puede contener letras.</p>

// .formulario__input-error {
//     font-size: 12px;
//     margin-bottom: 0;
//     display: none;
// }

// .formulario__input-error-activo {
//     display: block;
// }