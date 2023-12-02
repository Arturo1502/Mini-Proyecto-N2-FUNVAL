// document.addEventListener('DOMContentLoaded', function () {
//     const darkModeToggle = document.getElementById('toggle-dark-mode');
//     const body = document.body;

//     darkModeToggle.addEventListener('click', function () {
//         body.classList.toggle('darkmode');
//         const darkModeEnabled = body.classList.contains('darkmode');

//         // Guardar la preferencia del usuario en localStorage
//         localStorage.setItem('darkmode', darkModeEnabled);
//     });

//     // Verificar la preferencia del usuario al cargar la página
//     const userPrefersDark = window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches;
//     const storedDarkMode = localStorage.getItem('darkmode');

//     // Aplicar el modo oscuro si el usuario lo prefiere o lo ha seleccionado anteriormente
//     if (userPrefersDark || storedDarkMode === 'true') {
//         body.classList.add('darkmode');
//     }

//     const dark = document.querySelector(".dark")
//     const light = document.querySelector(".light")

    

// });