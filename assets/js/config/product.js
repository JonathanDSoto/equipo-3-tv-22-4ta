var form = document.getElementById('form')
var inputs = document.querySelectorAll('#form input')

const expresiones = {
    //usuario: /^[a-zA-Z0-9\_\-]{8,16}$/, // MIN 8 MAX 16 Letras, numeros, guion y guion_bajo
    texto: /^[a-zA-ZÀ-ÿ\s]{2,200}$/, // MIN 2 MAX 120 Letras y espacios, pueden llevar acentos.
    desc: /^[a-z0-9A-ZÀ-ÿ\s]{2,200}$/, // MIN 2 MAX 120 Letras y espacios, pueden llevar acentos.
    code: /^.{1,18}$/, // 8 a 12 digitos.
    correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
    numero: /^\d{1,18}$/ 
}
const campos = {
    name: false,
    description: false,
    features: false,
    imagen: false
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

const validarFoto = () => {
    const input1 = document.getElementById('imagen')
    const ruta = input1.value.toLowerCase()

    const exts = /(.jpg|.png|.jpeg|.svg)$/i

    if (!exts.exec(ruta)) {
        document.querySelector('#grupo_imagen').classList.add('formulario__input-error-activo')
        campos['imagen'] = false
    } else {
        document.querySelector('#grupo_imagen').classList.remove('formulario__input-error-activo')
        campos['imagen'] = true
    }
}

var validarForm = (e) => {
    switch (e.target.name) {
        case "description":
            validarCampo(expresiones.desc, e.target, 'description')
            break;
        case "name":
            validarCampo(expresiones.texto, e.target, 'name')
            break;
        case "features":
            validarCampo(expresiones.texto, e.target, 'features')
            break;
        case "imagen":
            validarFoto()
            break;
    }

}

inputs.forEach((input) => {
    input.addEventListener('keyup', validarForm)
    input.addEventListener('blur', validarForm)
})


document.addEventListener('mousemove', e => {
    if (campos.description && campos.name && campos.features && campos.imagen) {
        document.getElementById('send').disabled = false
    } else {
        document.getElementById('send').disabled = true
    }
})