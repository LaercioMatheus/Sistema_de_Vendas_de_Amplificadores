/*SCRIPT DE VALIDAÇÃO DOS CAMPOS PARA VER SE ESTÃO VAZIO OU TEM VALOR*/

const form = document.getElementById("form");
const username = document.getElementById("login");
const password = document.getElementById("senha");

form.addEventListener("submit", (e) => {
  if (!checkInputs()) {
    e.preventDefault(); // Impede o envio do formulário se houver erros
  }
});

function checkInputs() {
  let isValid = true; // Variável para verificar se todos os campos são válidos

  const usernameValue = username.value.trim();
  const passwordValue = password.value.trim();

  if (usernameValue === "") {
    setErrorFor(username, "O usuário do sistema é obrigatório.");
    isValid = false;
  } else {
    setSuccessFor(username);
  }

  if (passwordValue === "") {
    setErrorFor(password, "A senha de acesso é obrigatória.");
    isValid = false;
  } else {
    setSuccessFor(password);
  }

  return isValid;
}

function setErrorFor(input, message) {
  const formControl = input.parentElement;
  const small = formControl.querySelector("small");

  // Adicionar a mensagem de erro
  small.innerText = message;

  // Adicionar a classe de erro
  formControl.className = "form_control error";
}

function setSuccessFor(input) {
  const formControl = input.parentElement;

  // Adicionar a classe de sucesso
  formControl.className = "form_control success";
}
