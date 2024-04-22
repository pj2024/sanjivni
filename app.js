const buttons = document.querySelectorAll(".product");
const containers = document.querySelectorAll(".list-lower");


buttons.forEach((button, index) => {
    containers.forEach(container => {
        container.style.display = "none";
      });
    button.addEventListener("click", () => {
        containers.forEach(container => {
        container.style.display = "none";
    });
    containers[index].style.display = "grid";
  });
});