$(function() {

  function toggleMobileMenu( trigger, triggerClass, menuList ) {

    function updateMenuClass() {
      menuList.toggleClass(triggerClass);
    }

    trigger.click( function(){
      updateMenuClass();
    });
  }

  if ( $('.menu-toggle') ) {
    toggleMobileMenu( $('.menu-toggle'),'open', $('.mobile-navigation'));
  }

  if ( $('.accordion-menu') ) {
    toggleMobileMenu( $('.accordion-menu'),'open', $('#submenu') );
  }
});


