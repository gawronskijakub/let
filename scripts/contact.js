const contents = document.querySelectorAll(".home__content a");
const entrances = document.querySelectorAll(".home__entrance");
const colors = ["crimson", "#3b5998", "#0077b5", "#6e5494"];
const black = "black";
const size = 200;
for (let i = 0; i < contents.length; i++) {
  contents[i].addEventListener("mouseover", () => {
    entrances[i].style["color"] = colors[i];
    entrances[i].style["fontSize"] = `${size*1.25}%`;
    entrances[i].style["backgroundColor"] = "#ffffff50";
  });
  contents[i].addEventListener("mouseout", () => {
    entrances[i].style["color"] = black;
    entrances[i].style["fontSize"] = `${size}%`;
    entrances[i].style["backgroundColor"] = "inherit";
  });
}