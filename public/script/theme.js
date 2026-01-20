const themeButton = document.querySelector("#button-theme-handler");
const imgButton = document.querySelector("#img-button");

const base = "/blog-the-mind/";

const savedTheme = localStorage.getItem("theme") || "light";
document.documentElement.setAttribute("data-theme", savedTheme);

imgButton.src =
  savedTheme === "light"
    ? `${base}public/img/bedtime.svg`
    : `${base}public/img/daytime.svg`;

themeButton.addEventListener("click", () => {
  const html = document.documentElement;

  const currentTheme = html.getAttribute("data-theme") || "light";
  const newTheme = currentTheme === "dark" ? "light" : "dark";

  html.setAttribute("data-theme", newTheme);
  localStorage.setItem("theme", newTheme);

  imgButton.src =
    newTheme === "light"
      ? `${base}public/img/bedtime.svg`
      : `${base}public/img/daytime.svg`;
});
