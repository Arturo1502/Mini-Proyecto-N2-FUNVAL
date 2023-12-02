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
    let dropdownContent = document.getElementById("dropdown-content");
    dropdownContent.classList.toggle("show");
    let flecha = document.getElementById('flecha')
    flecha.classList.toggle("fa-caret-down");
    flecha.classList.toggle('fa-caret-up');

}

document.getElementById('flecha').onclick = function (event) {
    event.stopPropagation(); // Evitar que el evento llegue al window.onclick
    toggleDropdown();
}

window.onclick = function (event) {
    if (!event.target.matches('.dropbtn')) {
        let dropdowns = document.getElementsByClassName("dropdown-content");

        let i;
        for (i = 0; i < dropdowns.length; i++) {
            let openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
        let flecha = document.getElementById('flecha');
        flecha.classList.remove('fa-caret-up');
        flecha.classList.add('fa-caret-down');
    }
};


const text = document.querySelector('.tuncate');
const textcontent = text.textContent;

const truncateStr = (str, num) => {
    if (str.length <= num) {
        return str;
    }
    return `${str.slice(0, num)} ...`;
};

text.innerHTML = truncateStr(textcontent,40)