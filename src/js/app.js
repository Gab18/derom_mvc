document.addEventListener('DOMContentLoaded', function() {

    eventListeners();

    darkMode();
});

function darkMode() {

    const prefiereDarkMode = window.matchMedia('(prefers-color-scheme: dark)');

    // console.log(prefiereDarkMode.matches);

    if(prefiereDarkMode.matches) {
        document.body.classList.add('dark-mode');
    } else {
        document.body.classList.remove('dark-mode');
    }

    prefiereDarkMode.addEventListener('change', function() {
        if(prefiereDarkMode.matches) {
            document.body.classList.add('dark-mode');
        } else {
            document.body.classList.remove('dark-mode');
        }
    });

    const botonDarkMode = document.querySelector('.dark-mode-boton');
    botonDarkMode.addEventListener('click', function() {
        document.body.classList.toggle('dark-mode');
    });
}

function eventListeners() {
    const mobileMenu = document.querySelector('.mobile-menu');

    mobileMenu.addEventListener('click', navegacionResponsive);

    // Muestra campos condicionales
    const metodoContacto = document.querySelectorAll('input[name="contacto[contacto]"]');
    metodoContacto.forEach(input => input.addEventListener('click', mostrandoMetodosContacto))
}

function navegacionResponsive() {
    const navegacion = document.querySelector('.navegacion');

    navegacion.classList.toggle('mostrar')
}

function mostrandoMetodosContacto(e) {
    const contactoDiv = document.querySelector('#contacto');


    if(e.target.value === 'telefono') {
        contactoDiv.innerHTML = `
            <label for="telefono">Telephone Number</label>
            <input type="tel" placeholder="Telephone" id="telefono" value="telefono"  name="contacto[telefono]" required>

            <label for="fecha">Call Date:</label>
            <input type="date" id="fecha"  name="contacto[fecha]" required>

            <label for="hora">Time Call:</label>
            <input type="time" id="hora" min="09:00" max="18:00"  name="contacto[hora]" required>

        `;
    } else {
        contactoDiv.innerHTML = `
            <label for="email">Email</label>
            <input type="email" placeholder="Email" id="email" value="email" name="contacto[email]" required>
        `;
    }
}