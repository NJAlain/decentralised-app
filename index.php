<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Portfolio</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="styles.css">
  <style>
    /* Add custom CSS styles here */
  </style>
</head>
<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">My Portfolio</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="#home">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#about">About Me</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#projects">Projects</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contact">Contact</a>
      </li>
    </ul>
  </div>
</nav>

<!-- Home Section -->
<section id="home" class="py-5 text-center">
  <div class="container">
    <div class="circle-image">
      <img src="images/HOP_3_Sized.jpg" alt="Profile Image">
    </div>
    <h1>Greetings, my name is Joseph Alain</h1>
    <p id="dynamic-text" class="description"> </p>
  </div>
  
</section>
 <!-- Include your JavaScript file here -->
 <script >
 document.addEventListener("DOMContentLoaded", function() {
  var dynamicText = document.getElementById("dynamic-text");
  var texts = ["I am a Software Engineer", "I am a System Support", "I am a System Tester"];
  var index = 0;

  function changeText() {
    dynamicText.textContent = texts[index];
    index = (index + 1) % texts.length; // Reset index to 0 when it reaches the end of the array
  }

  // Call the changeText function every 3000 milliseconds (3 second)
  setInterval(changeText, 3000);
});

 </script>

<!-- About Me Section -->
<section id="about" class="py-5 bg-light">
  <div class="container">
    <h2>About Me</h2>
    <p>Add your about me content here.</p>
  </div>
</section>

<!-- Projects Section -->
<section id="projects" class="py-5">
  <div class="container">
    <h2>Projects</h2>
    <p>Add your projects content here.</p>
  </div>
</section>

<!-- Contact Section -->
<section id="contact" class="py-5 bg-light">
  <div class="container">
    <h2>Contact Me</h2>
    <form action="submit_contact.php" method="post">
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="message">Message</label>
        <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</section>

<!-- Footer -->
<footer class="bg-dark text-white py-4">
  <div class="container text-center">
    <p>&copy; 2024 My Portfolio</p>
  </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
