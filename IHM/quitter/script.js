function makeMenu() {
  
  // Get the menuitems
  var menuItems = document.querySelectorAll("[role='menuitem']");
  
  // Loop through the menuItems and add an even listener
  for(i = 0; i < menuItems.length; i++) {
    menuItems[i].addEventListener('click', setCurrent);
  }

  // Set current status
  function setCurrent() {
    for(x = 0; x < menuItems.length; x++) {
      menuItems[x].setAttribute('data-selected', '');
    }
    this.setAttribute('data-selected', 'selected');
  }
}

makeMenu();