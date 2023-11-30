/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}

function toggleDropdown() {
    
    
    let dropdownContent = document.querySelector('.dropdown-content');
    dropdownContent.classList.toggle('show');
}

// Cerrar el dropdown si el usuario hace clic fuera de él
window.onclick = function (event) {
    if (!event.target.matches('.dropbtn')) {
        let dropdowns = document.querySelectorAll('.dropdown-content');
        dropdowns.forEach((openDropdown) => {
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        });
    }
}


