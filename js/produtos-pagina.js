var inputTamanho = document.querySelector('[name=tamanho]');
var outputTamanho = document.querySelector('[name=valortamanho]');

function mostratamanho() {
    outputTamanho.value = inputTamanho.value
}

inputTamanho.oninput = mostratamanho
