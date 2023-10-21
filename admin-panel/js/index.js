// document.querySelector(".model").style.display = "none";
const modal = document.querySelector(".model");
const updateForm = document.querySelector(".update-form");
const modalCloseBtn = document.querySelector(".modal-close");

document.querySelectorAll("#modaltoggle").forEach((el) => {
  el.addEventListener("click", () => {
    updateForm.style.display = "block";
  });
});

modalCloseBtn.addEventListener("click", () => {
  updateForm.style.display = "none";
});

const liElements = document.querySelectorAll(".nav-item");

liElements.forEach((li, index) => {
  li.addEventListener("click", () => {
    liElements.forEach((li, i) => {
      if (i === index) {
        li.classList.add("active");
        li.style.backgroundColor = "red";
        console.log("adfasd");
      } else {
        console.log("adfasd");
        li.classList.remove("active");
      }
    });
  });
});
