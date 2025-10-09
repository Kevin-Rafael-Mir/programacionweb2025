document.addEventListener("DOMContentLoaded", () => {
    document.getElementById("formRegistro").addEventListener("submit", (e) => {
        e.preventDefault(); // Previene el envío del formulario

        const nombre = document.getElementById("nombre").value;
        const correo = document.getElementById("correo").value;

        fetch('http://localhost/programacionweb2025/Clase07102025/Ejemplo.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                nombre: nombre, 
                correo: correo
            })
        }) 
        .then(response => response.json())
        .then(data => {
            console.log('Respuesta del servidor: ', data);
        })
        .catch(error => console.error('Error: ', error));
    });
});
