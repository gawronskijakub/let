var spans = $('#slider1 ul li span');
var inputs = $('#slider2 form input');
var points = 0;
var pointsPlace = document.querySelector(".course__entitle p");
pointsPlace.innerHTML = `Liczba punktów (max ${slideCount}): 0`;

function checkWord(e) {
  if(e.key === "Enter") {
    [...spans].forEach(span => {
    if(span.classList.contains(this.classList)) {
      if(this.value === span.textContent) {
        this.style["background-color"] = "rgba(34, 153, 84, 0.5)";
        this.disabled = "disabled";
        points++;
      } else {
        this.style["background-color"] = "rgba(203, 67, 53, 0.5)";
      }
    }
    });
    pointsPlace.innerHTML = `Liczba punktów (max ${slideCount}): ${points}`;
  }
}

[...inputs].forEach(input =>{
  input.addEventListener("keypress", checkWord);
});