const themeButton = document.querySelector("#button-theme-handler");
const imgButton = document.querySelector("#img-button");

const savedTheme = localStorage.getItem("theme") || "light";
document.documentElement.setAttribute("data-theme", savedTheme);

if (savedTheme === "light") {
  imgButton.src = "../img/bedtime.svg";
} else {
  imgButton.src = "../img/daytime.svg";
}

themeButton.addEventListener("click", () => {
  const html = document.documentElement;

  const currentTheme = html.getAttribute("data-theme") || "light";
  const newTheme = currentTheme === "dark" ? "light" : "dark";

  html.setAttribute("data-theme", newTheme);
  localStorage.setItem("theme", newTheme);

  imgButton.src =
    newTheme === "light" ? "../img/daytime.svg" : "../img/bedtime.svg";
});
