/*SCRIPT DE VALIDAÇÃO DOS CAMPOS PARA VER SE ESTÃO VAZIO OU TEM VALOR*/

const form = document.getElementById('form');
const marc = document.getElementById('marca');
const model = document.getElementById('modelo');
const preco = document.getElementById('preco');
const photo = document.getElementById('foto');

form.addEventListener('submit', (e) => {
    if (!checkInputs()) {
        e.preventDefault(); // Impede o envio do formulário se houver erros
    }
});

function checkInputs() {
    let isValid = true; // Variável para verificar se todos os campos são válidos

    const marcValue = marc.value.trim();
    const modelValue = model.value.trim();
    const precoValue = preco.value.trim();
    const photoValue = photo.value.trim();

    if (marcValue === '') {
        setErrorFor(marc, "A marca do amplificador é obrogatório.");
        isValid = false;
    } else {
        setSuccessFor(marc);
    }

    if (modelValue === '') {
        setErrorFor(model, "O modelo do amplificador é obrigatório.");
        isValid = false;
    } else {
        setSuccessFor(model);
    }

    if (precoValue === '') {
        setErrorFor(preco, "O preço é obrigatório.");
        isValid = false;
    } else {
        setSuccessFor(preco);
    }
    
    if (photoValue === '') {
        setErrorFor(photo, "A foto é obrigatória.");
        isValid = false;
    } else {
        setSuccessFor(photo);
    }

    return isValid;
}

function setErrorFor(input, message) {
    const formControl = input.parentElement;
    const small = formControl.querySelector('small');

    // Adicionar a mensagem de erro
    small.innerText = message;

    // Adicionar a classe de erro
    formControl.className = "form-control error";
}

function setSuccessFor(input) {
    const formControl = input.parentElement;

    // Adicionar a classe de sucesso
    formControl.className = "form-control success";
}