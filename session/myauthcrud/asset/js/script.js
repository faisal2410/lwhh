document.addEventListener("DOMContentLoaded", function () {
  console.log("loaded");
  let links = document.querySelectorAll(".delete");
  for (i = 0; i < links.length; i++) {
    links[i].addEventListener("click", function (e) {
      if (!confirm("Are you sure?")) {
        e.preventDefault();
      }
    });
  }
});


