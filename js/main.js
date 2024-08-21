document.addEventListener("DOMContentLoaded", function () {
  const colorListItems = document.querySelectorAll(".colors li");
  colorListItems.forEach((li) => {
    li.addEventListener("click", function () {
      const colorVar = this.dataset.colorvar;
      if (colorVar) {
        navigator.clipboard
          .writeText(`var(${colorVar})`)
          .then(() => {
            Toastify({
              text: "Variable copiada!",
              duration: 3000,
              gravity: "bottom", // `top` or `bottom`
              position: "center", // `left`, `center` or `right`
              stopOnFocus: true, // Prevents dismissing of toast on hover
              style: {
                background: "#140a4c",
              },
            }).showToast();
          })
          .catch((err) =>
            console.error("Failed to copy text to clipboard", err)
          );
      }
    });
  });
  const iconListItems = document.querySelectorAll(".iconos i");
  iconListItems.forEach((icon) => {
    icon.addEventListener("click", function () {
      const html = icon.outerHTML;
      navigator.clipboard
        .writeText(html)
        .then(() => {
          Toastify({
            text: "Icono copiado!",
            duration: 3000,
            gravity: "bottom", // `top` or `bottom`
            position: "center", // `left`, `center` or `right`
            stopOnFocus: true, // Prevents dismissing of toast on hover
            style: {
              background: "#140a4c",
            },
          }).showToast();
        })
        .catch((err) => console.error("Failed to copy text to clipboard", err));
    });
  });
});
