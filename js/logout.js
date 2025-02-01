// Selecionando elementos
const logoutButton = document.getElementById("logout-overlay");
const spinnerOverlay = document.getElementById("spinner");
const body = document.body;

// Função para iniciar o logout com efeito
function handleLogout(event) {
  event.preventDefault(); // Impede o redirecionamento imediato

  // Ativar o spinner
  spinnerOverlay.style.display = "flex"; // Usa flex para centralizar

  // Prevenir múltiplos cliques
  logoutButton.disabled = true;

  // Aguarda a animação antes de redirecionar
  setTimeout(() => {
    window.location.href = "index.php";
  }, 2000); // 2 segundos para efeito
}

// Adiciona o evento de clique
logoutButton.addEventListener("click", handleLogout);
