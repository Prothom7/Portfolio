<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Portfolio</title>
  <link rel="stylesheet" href="home.css" />
  <link rel="stylesheet" href="navigation.css" />
</head>
<body>

  <!-- Placeholder for navigation -->
  <div id="nav-placeholder"></div>

  <!-- Placeholder for main content -->
  <div id="home-placeholder"></div>

  <script>
    // Load navigation HTML
    fetch('navigation.html')
      .then(response => response.text())
      .then(data => {
        document.getElementById('nav-placeholder').innerHTML = data;

        // After loading navigation HTML, load navigation.js script dynamically
        const script = document.createElement('script');
        script.src = 'navigation.js';
        document.body.appendChild(script);

        // Optionally, you can attach event listeners here instead of inline onclick in navigation.html
      });

    // Load home.html by default into content area
    fetch('home.html')
      .then(response => response.text())
      .then(data => {
        document.getElementById('home-placeholder').innerHTML = data;
      });
  </script>

</body>
</html>
