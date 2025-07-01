<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>About - QuickTask</title>
  <link href="https://fonts.googleapis.com/css2?family=Segoe+UI:wght@400;700&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', sans-serif;
    }

    body {
      background: #f8f9fa;
      color: #333;
    }

    header, footer {
      background: #111;
      color: #fff;
      padding: 1.5rem 2rem;
      text-align: center;
    }

    header b, footer b {
      color: #00bcd4;
      font-size: 1.6rem;
    }

    nav {
      margin-top: 0.5rem;
    }

    nav a {
      color: #fff;
      margin: 0 1rem;
      text-decoration: none;
      font-weight: bold;
    }

    nav a:hover {
      color: #00bcd4;
    }

    .about-section {
      padding: 2rem;
      background: #fff;
      margin: 2rem auto;
      border-radius: 10px;
      max-width: 900px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }

    .about-section h1 {
      font-size: 2.5rem;
      color: #007bff;
      margin-bottom: 1rem;
      text-align: center;
    }

    .about-section p {
      font-size: 1.1rem;
      line-height: 1.8;
      margin-bottom: 1.5rem;
    }

    .features, .services-grid {
      margin-top: 2rem;
    }

    .features ul {
      padding-left: 1.5rem;
    }

    .features li {
      margin-bottom: 0.7rem;
      font-weight: 500;
    }

    .services-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 1rem;
      margin-top: 2rem;
    }

    .service {
      background: #f1f1f1;
      padding: 1rem;
      border-radius: 10px;
      text-align: center;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
      transition: transform 0.3s ease;
    }

    .service:hover {
      transform: scale(1.03);
    }

    .service h3 {
      margin-top: 1rem;
      color: #00bcd4;
    }

    .service img {
      width: 100%;
      height: 140px;
      object-fit: cover;
      border-radius: 8px;
    }
  </style>
</head>
<body>

<header>
  <b>QuickTask</b>
  <nav>
    <a href="welcome.php">Home</a>
    <a href="">About</a>
    <a href="explore.php">Explore</a>
    <!-- <a href="#">Signup/Login</a> -->
  </nav>
</header>

<section class="about-section">
  <h1>About QuickTask</h1>
  <p>
    QuickTask is an on-demand service platform that connects users with trusted local professionals for any kind of task — be it home repairs, tutoring, appliance servicing, or more. Our goal is to make finding and booking help as easy and fast as ordering food online.
  </p>

  <div class="features">
    <h2>Key Features</h2>
    <ul>
      <li>Modern, mobile-friendly UI</li>
      <li>Animated hero image slider</li>
      <li>Responsive grid layout for services</li>
      <li>Simple integration of call-to-action buttons</li>
      <li>Testimonials section to build trust</li>
      <li>GSAP-powered animations on scroll/load</li>
    </ul>
  </div>

  <div class="services-grid">
    <div class="service">
      <img src="https://images.pexels.com/photos/5212320/pexels-photo-5212320.jpeg" alt="">
      <h3>Home Tutor</h3>
    </div>
    <div class="service">
      <img src="https://images.pexels.com/photos/4792499/pexels-photo-4792499.jpeg" alt="">
      <h3>Cleaning Services</h3>
    </div>
    <div class="service">
      <img src="https://images.pexels.com/photos/7876045/pexels-photo-7876045.jpeg" alt="">
      <h3>Technician</h3>
    </div>
    <div class="service">
      <img src="https://images.pexels.com/photos/17063686/pexels-photo-17063686.jpeg" alt="">
      <h3>Electrician</h3>
    </div>
    <div class="service">
      <img src="https://images.pexels.com/photos/6474468/pexels-photo-6474468.jpeg" alt="">
      <h3>AC Technician</h3>
    </div>
    <div class="service">
      <img src="https://images.pexels.com/photos/3825584/pexels-photo-3825584.jpeg" alt="">
      <h3>Carpenter</h3>
    </div>
  </div>
</section>

<footer>
  <p>&copy; 2025 QuickTask</p>
  <b>Made by Udit Kumar Gupta</b>
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script>
  gsap.from("header", { duration: 1, y: -50, opacity: 0, ease: "bounce" });
  gsap.from(".about-section", { duration: 1.5, opacity: 0, y: 30 });
  gsap.from(".service", {
    scrollTrigger: ".service",
    duration: 1,
    opacity: 0,
    y: 50,
    stagger: 0.2
  });
</script>

</body>
</html>
