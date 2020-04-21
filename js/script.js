function pageFunctions () {
  var iconsMobile = document.getElementById('navToggle');
  iconsMobile.addEventListener('click', function () {
    var classIcons = this.className;
    var navigation = document.getElementById('navigation');
    var body = document.getElementsByTagName('body')[0];
    if ( classIcons === 'toggle') {
      this.className = 'toggle open';
      navigation.className = 'open';
      body.className = 'menu-open';
    } else {
      this.className = 'toggle';
      navigation.className = '';
      body.className = '';
    }
  })
}

