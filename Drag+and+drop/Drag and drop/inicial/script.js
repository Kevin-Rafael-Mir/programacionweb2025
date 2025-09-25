document.addEventListener("DOMContentLoaded", () => {
      const element = document.getElementById("elemento-arrastrable");
      const zona = document.getElementById("zona-drop");

      element.addEventListener("dragstart", (e) => {
        e.dataTransfer.setData("text/plain", element.id);
        e.dataTransfer.setDragImage(element, 0, 0);
      });

      zona.addEventListener("dragover", (e) => e.preventDefault());

      zona.addEventListener("drop", (e) => {
        e.preventDefault();
        const id = e.dataTransfer.getData("text/plain");
        const original = document.getElementById(id);
        const copia = original.cloneNode(true);
        copia.id = ""; // Evita duplicados de id
        copia.style.position = "static";
        zona.appendChild(copia);
      });
    });