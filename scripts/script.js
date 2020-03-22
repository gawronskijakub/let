// DOM elements
const footer__time = document.querySelector('.footer__time');
const deleteUser = document.querySelector("#deleteUser");


// functions
const tick = () => {
  let xTime = new Date();
  footer__time.innerHTML = xTime.toLocaleTimeString();
}

const deleteConfirmation = () => {
  let ask = window.confirm("Czy na pewno chcesz usunąć konto?");
  if(ask) {
    window.alert("Twoje konto zostało pomyślnie usunięte.");
    window.location.href = "./scripts/del-user.php";
  } else {
    window.location.href = "./my-account.php";
  }
}


deleteUser.addEventListener("click", deleteConfirmation);

setInterval(tick,1000);