// DOM elements
const footer__time = document.querySelector('.footer__time');


// functions
const tick = () => {
  let xTime = new Date();
  footer__time.innerHTML = xTime.toLocaleTimeString();
}

setInterval(tick,1000);