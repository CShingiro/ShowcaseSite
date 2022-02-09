<?php

  namespace App\Controller;

  use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
  use Symfony\Component\HttpFoundation\Response;

  class HomeController extends AbstractController
  {
    public function mainpage (): Response
    {

      return new Response (
        '<html lang="en">
          <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, minimum-scale=1, initial-scale=1">
            <title>Socially Radical Web Design</title>
          </head>
          <body>
            <header class="container-fluid">
              <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                  <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                      <img class="logo" src="Images/SRWBLogo.png">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="parent_navigation nav-item"><a class="navigation nav-link active" aria-current="page" href="#index">Home</a></li>
                        <li class="parent_navigation nav-item"><a class="navigation nav-link active" aria-current="page" href="#about">About</a></li>
                        <li class="parent_navigation nav-item"><a class="navigation nav-link active" aria-current="page" href="#request">Site Request</a></li>
                        <li class="parent_navigation nav-item"><a class="navigation nav-link active" aria-current="page" href="#contact">Contact</a></li>
                      </ul>
                    </div>
                  </div>
                </nav>
              </div>
            </header>
            <main class="container-fluid">
              <div class="container" id="about">
                <h1>About The Designer</h1>
                  <h2>Projects</h2>
                  <h2>Credentials</h2>
                  <h2>Past Work</h2>
              </div>
              <div class="container" id="request">
                <h1>Request A Project</h1>
                <form>
                  <label for="name">Full Name:</label><br>
                  <input type="text" name="name" placeholder="Full Name" required><br>
                  <label for="email">Email:</label><br>
                  <input type="email" name="email" placeholder="name@example.com" required><br>
                  <h2>Project Type</h2>
                  <input type="radio" id="static_site_no_javascript" name="project_type" value="Static - No Javascript" checked>
                  <label for="static_site_no_javascript">Static Site - No Javascript Animations - $700 + $100 per page</label><br>
                  <input type="radio" id="static_site_with_javascript" name="project_type" value="Static + Javascript">
                  <label for="static_site_with_javascript">Static Site With Javascript Animations - $850 + $125 per page</label><br>
                  <input type="radio" id="dynamic_site_no_javascript" name="project_type" value="Dynamic - No Javascript">
                  <label for="dynamic_site_no_javascript">Dynamic Site - No Javascript Animations - $1000 + $150 per page</label><br>
                  <input type="radio" id="dynamic_site_with_javascript" name="project_type" value="Dynamic + Javascript">
                  <label for="dynamic_site_with_javascript">Dynamic Site With Javascript Animations - $1200 +$250 per page</label><br>
                  <input type="submit" formaction="#about" formmethod="POST" value="Order Website">
                </form>
              </div>
              <div class="container" id="contact">
                <h1>General Contact Form</h1>
                <form method="POST"></form>
                <label for="name">Full Name:</label><br>
                <input type="text" name="name" placeholder="Full Name" required><br>
                <label for="email">Email:</label><br>
                <input type="email" name="email" placeholder="name@example.com" required><br>
                <label for="message">Message:</label><br>
                <input type="text" name="message" placeholder="Message" required><br>
              </div>
            </main>
            <footer class="container-fluid">
              <div class="container">
                <p id="copyright">&#169; - 2022 - Socially Radical Web Design</p>
              </div>
            </footer>
          </body>
        </html>'
      );
    }
  }

 ?>
