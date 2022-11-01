var form = document.getElementById('form')
var inputs = document.querySelectorAll('#form input')

const expresiones = {
    texto: /^[a-z0-9A-ZÀ-ÿ\s]{2,60}$/, // MIN 2 MAX 30 Letras y espacios, pueden llevar acentos.
    multiple: /^.{2,18}$/, 
    code: /^[a-zA-Z0-9_.\s+-]+$/,
    date: /^[0-9-]+$/,
    num: /^\d{1,9}$/, // 4 a 6 numeros.
    numPo: /^\d{1,2}$/, // 4 a 6 numeros.
}
const campos = {
    name: false,
    code: false,
    percentage_discount: false,
    min_amount_required: false,
    min_product_required: false,
    max_uses: false,
    count_uses: true,
    end_date: false,
    start_date: false
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
            validarCampo(expresiones.texto, e.target, e.target.name)
            break;
        case "code":
            validarCampo(expresiones.code, e.target, e.target.name)
            break;
        case "percentage_discount":
            validarCampo(expresiones.numPo, e.target, e.target.name)
            break;
        case "min_amount_required":
        case "min_product_required":
        case "max_uses":
        case "count_uses":
            validarCampo(expresiones.num, e.target, e.target.name)
            break;
        case "end_date":
        case "start_date":
            validarCampo(expresiones.date, e.target, e.target.name)
            break;
    }

}

inputs.forEach((input) => {
    input.addEventListener('keyup', validarForm)
    input.addEventListener('blur', validarForm)
})

document.addEventListener('mousemove', e => {
    if (
    campos.code &&
    campos.percentage_discount &&
    campos.min_amount_required &&
    campos.min_product_required &&
    campos.max_uses &&
    campos.count_uses &&
    campos.end_date &&
    campos.start_date
    ) {
        document.getElementById('send').disabled = false
    } else {
        document.getElementById('send').disabled = true
    }
})