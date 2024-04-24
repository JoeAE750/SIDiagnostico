document.addEventListener("DOMContentLoaded", function() {
    const form = document.querySelector('form');
    form.addEventListener('submit', function(event) {
        event.preventDefault();
        
        // Recoge las opciones seleccionadas.
        const opciones = {
            reinicioContinuo: document.querySelector('input[name="reinicioContinuo"]:checked').value,
            pantallazosAzules: document.querySelector('input[name="pantallazosAzules"]:checked').value,
            errorAlGuardarInformacion: document.querySelector('input[name="errorAlGuardarInformacion"]:checked').value,
            lento: document.querySelector('input[name="lento"]:checked').value,
            malRendimiento: document.querySelector('input[name="malRendimiento"]:checked').value,
            temperaturaAltaProcesador: document.querySelector('input[name="temperaturaAltaProcesador"]:checked').value,
            pitidoLargoAlArrancar: document.querySelector('input[name="pitidoLargoAlArrancar"]:checked').value,
            sobrecalentamiento: document.querySelector('input[name="sobrecalentamiento"]:checked').value,
            noArranca: document.querySelector('input[name="noArranca"]:checked').value,
            cortocircuitos: document.querySelector('input[name="cortocircuitos"]:checked').value
        };

        // Hacer la solicitud a la API PHP
        //AQUI PONER URL API
        fetch('/assets/api/controlForm.php', {
            method: 'POST', // O el método correcto para tu API
            headers: {
                'Content-Type': 'application/json' // Especifica el tipo de contenido que estás enviando
            },
            body: JSON.stringify(opciones) // Convierte el objeto opciones a JSON y envíalo en el cuerpo de la solicitud
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Hubo un problema al obtener los datos.');
            }
            return response.json();
        })
        .then(data => {
            // Aquí deberías procesar los datos recibidos de la API y mostrarlos en la página HTML
            // Por ejemplo, puedes actualizar el contenido de un div con el resultado
            const resultadoDiv = document.getElementById('resultado');
            resultadoDiv.textContent = `Diagnóstico: ${data.diagnosis}`;
        })
        .catch(error => {
            console.error('Error:', error);
        });
    });
});
