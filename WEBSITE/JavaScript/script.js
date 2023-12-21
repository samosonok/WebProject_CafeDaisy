// NAVIGATION MENU
document.addEventListener('DOMContentLoaded', function () { // The DOMContentLoaded event ensures that the code inside the callback function executes only when the HTML document is fully loaded
    const icon = document.querySelector('.topnav li.icon'); // selects the list item with the class "icon" within an element with the class "topnav"
    const menu = document.querySelector('.topnav'); // Selects the element with the class "topnav"

    icon.addEventListener('click', function () { // adds a click event listener to the selected icon element
        menu.classList.toggle('responsive'); // the callback function toggles the presence of the class "responsive" on the menu element using classList.toggle(). If the class is present, it is removed; if it is absent, it is added
    });
});