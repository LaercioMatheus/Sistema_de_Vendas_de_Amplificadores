/*SCRIPT DE VALIDAÇÃO DOS CAMPOS PARA VER SE ESTÃO VAZIO OU TEM VALOR*/

const form = document.getElementById('form');
const valuename = document.getElementById('nome');
const address = document.getElementById('endereco');
const tel = document.getElementById('telefone');
const namecarreg = document.getElementById('nome_enc');
const nameimpre = document.getElementById('nome_emp');

form.addEventListener('submit', (e) => {
    if (!checkInputs()) {
        e.preventDefault(); // Impede o envio do formulário se houver erros
    }
});

function checkInputs() {
    let isValid = true; // Variável para verificar se todos os campos são válidos

    const nameValue = valuename.value.trim();
    const addressValue = address.value.trim();
    const telValue = tel.value.trim();
    const namecarregValue = namecarreg.value.trim();
    const nameimpreValue = nameimpre.value.trim();

    if (nameValue === '') {
        setErrorFor(valuename, "O nome é obrogatório.");
        isValid = false;
    } else {
        setSuccessFor(valuename);
    }

    if (addressValue === '') {
        setErrorFor(address, "O endereço é obrigatório.");
        isValid = false;
    } else {
        setSuccessFor(address);
    }

    if (telValue === '') {
        setErrorFor(tel, "O telefone é obrigatório.");
        isValid = false;
    } else {
        setSuccessFor(tel);
    }
    
    if (namecarregValue === '') {
        setErrorFor(namecarreg, "O nome do encarregado é obrigatório.");
        isValid = false;
    } else {
        setSuccessFor(namecarreg);
    }
    
    if (nameimpreValue === '') {
        setErrorFor(nameimpre, "O nome da empresa é obrigatório.");
        isValid = false;
    } else {
        setSuccessFor(nameimpre);
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