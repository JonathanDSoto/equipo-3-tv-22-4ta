var form = document.getElementById('form')
var inputs = document.querySelectorAll('#form input')

const expresiones = {
    //usuario: /^[a-zA-Z0-9\_\-]{8,16}$/, // MIN 8 MAX 16 Letras, numeros, guion y guion_bajo
    texto: /^[a-zA-Z0-9À-ÿ\s]{2,20}$/, // MIN 2 MAX 120 Letras y espacios, pueden llevar acentos.
    code: /^.{1,18}$/, // 8 a 12 digitos.
    correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
    numero: /^\d{1,18}$/,
    price: /^[0-9.]{1,18}$/
}
const campos = {
    description: false,
    weight_in_grams: false,
    code: false,
    stock: false,
    stock_min: false,
    stock_max: false,
    amount: false,
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
            validarCampo(expresiones.price, e.target, 'amount')
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
    if (campos.description && campos.weight_in_grams && campos.code && campos.stock && campos.stock_max && campos.stock_min && campos.amount && campos.imagen) {
        document.getElementById('send').disabled = false
    } else {
        document.getElementById('send').disabled = true
    }
})