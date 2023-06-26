function toggleTheme() {
    const theme = document.documentElement.getAttribute('data-theme');
    const newTheme = theme === 'light' ? 'dark' : 'light';
    document.documentElement.setAttribute('data-theme', newTheme);
  }
  
  document.addEventListener('DOMContentLoaded', function () {
    const toggle = document.querySelector('#theme-toggle');
    toggle.addEventListener('click', toggleTheme);
  });