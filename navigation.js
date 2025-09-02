// navigation.js
function loadHome(event) {
  event.preventDefault();
  fetch('home.html')
    .then(response => response.text())
    .then(data => {
      document.getElementById('home-placeholder').innerHTML = data;
    });
}

function loadAbout(event) {
  event.preventDefault();
  fetch('about.html')
    .then(response => response.text())
    .then(data => {
      document.getElementById('home-placeholder').innerHTML = data;
    });
}

function loadProjects(event) {
  event.preventDefault();
  fetch('projects.html')
    .then(response => response.text())
    .then(data => {
      document.getElementById('home-placeholder').innerHTML = data;
    });
}

function loadContact(event) {
  event.preventDefault();
  fetch('contact.html')
    .then(response => response.text())
    .then(data => {
      document.getElementById('home-placeholder').innerHTML = data;
    });
}
