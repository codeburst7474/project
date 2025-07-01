<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>QuickTask - Service Platform</title>
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

    header {
      background: #111;
      color: #fff;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 1rem 2rem;
      flex-wrap: wrap;
    }

    header b {
      font-size: 1.8rem;
      color: #00bcd4;
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

    .hero {
      position: relative;
      overflow: hidden;
      height: 400px;
    }

    .hero img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      animation: fade 8s infinite;
    }

    @keyframes fade {
      0% { opacity: 1; }
      25% { opacity: 0; }
      50% { opacity: 1; }
    }

    .hero-text {
      position: absolute;
      top: 50%;
      left: 10%;
      transform: translateY(-50%);
      color: #fff;
      max-width: 500px;
      background: rgba(0, 0, 0, 0.5);
      padding: 2rem;
      border-radius: 10px;
    }

    .hero-text h1 {
      font-size: 2.5rem;
      margin-bottom: 1rem;
    }

    .hero-text button {
      padding: 0.75rem 1.5rem;
      background-color: #00bcd4;
      color: #fff;
      border: none;
      border-radius: 5px;
      margin-top: 1rem;
      cursor: pointer;
    }

    section {
      padding: 2rem;
      background: #fff;
      margin: 1rem;
      border-radius: 10px;
    }

    h2 {
      text-align: center;
      font-size: 2rem;
      margin-bottom: 1.5rem;
      color: #007bff;
    }

    .services {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 1rem;
    }

    .service {
      background: #f1f1f1;
      border-radius: 10px;
      padding: 1rem;
      text-align: center;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
      transition: transform 0.3s ease;
    }

    .service:hover {
      transform: translateY(-5px);
    }

    .service img {
      width: 100%;
      height: 160px;
      object-fit: cover;
      border-radius: 10px;
      margin-bottom: 1rem;
    }

    .service h3 {
      margin: 0.5rem 0;
      color: #00bcd4;
    }

    .testimonial {
      background-color: #eef6f8;
      padding: 1rem;
      border-left: 4px solid #007bff;
      margin-bottom: 1rem;
      border-radius: 5px;
    }

    footer {
      background: #111;
      color: #fff;
      text-align: center;
      padding: 2rem;
    }

    footer b {
      display: block;
      margin-top: 0.5rem;
      color: #00bcd4;
    }

    a.service-link {
      text-decoration: none;
      color: inherit;
    }

    @media (max-width: 768px) {
      .hero-text {
        left: 5%;
        right: 5%;
      }
    }
  </style>
</head>
<body>
  <header>
    <b>QuickTask</b>
    <nav>
      <a href="#">Home</a>
      <a href="about.php">About</a>
      <a href="explore.php">Explore</a>
<!-- <a href="signup.php">Signup/Log      in</a> -->
    </nav>
  </header>

  <div class="hero">
    <img id="slider" src="https://images.pexels.com/photos/31869851/pexels-photo-31869851.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Slider">
    <div class="hero-text">
      <h1>Your On-Demand Service Partner</h1>
      <p>Book trusted local professionals for any task – fast, reliable, and at your convenience.</p>
    </div>
  </div>

  <section>
    <h2>Our Services</h2>
    <div class="services">
      <a href="plumber.php" class="service-link">
        <div class="service">
          <img src=" https://media.istockphoto.com/id/1365382448/photo/smilling-young-indian-engineer-or-repairman-showing-thumbs-up-sign-or-hand-gesture-while.jpg?s=612x612&w=0&k=20&c=af-o7YhM51sJ7yeGKyexT7TVulMvI1oAQ9YdQ_2GGCw=" alt="plumber">
          <h3>Plumber</h3>
          <p>Leak repairs, installations and inspections.</p>
        </div>
      </a>
      <a href="plumber.php" class="service-link">
        <div class="service">
          <img src="https://images.pexels.com/photos/17063686/pexels-photo-17063686.jpeg" alt="">
          <h3>Electrician</h3>
          <p>Wiring, lighting and safety checks.</p>
        </div>
      </a>
      <a href="plumber.php" class="service-link">
        <div class="service">
          <img src="https://images.pexels.com/photos/7876045/pexels-photo-7876045.jpeg" alt="">
          <h3>Technician</h3>
          <p>Electronics and appliance repairs.</p>
        </div>
      </a>
      <a href="plumber.php" class="service-link">
        <div class="service">
          <img src="https://images.pexels.com/photos/5212320/pexels-photo-5212320.jpeg" alt="">
          <h3>Home Tutor</h3>
          <p>Skilled educators for home learning.</p>
        </div>
      </a>
      <a href="plumber.php" class="service-link">
        <div class="service">
          <img src=" https://media.istockphoto.com/id/1183183791/photo/talented-female-artist-works-on-abstract-oil-painting-using-paint-brush-she-creates-modern.jpg?s=612x612&w=0&k=20&c=QrR6QQxioyM6zT5qPpKxr9KFz2VRrhVO3rXJ8fIfswY=" alt="">
          <h3>Painter</h3>
          <p>Interior and exterior wall painting services.</p>
        </div>
      </a>
      <a href="plumber.php" class="service-link">
        <div class="service">
          <img src="https://images.pexels.com/photos/3825584/pexels-photo-3825584.jpeg" alt="">
          <h3>Carpenter</h3>
          <p>Furniture repair and custom woodwork.</p>
        </div>
      </a>
      <a href="plumber.php" class="service-link">
        <div class="service">
          <img src="https://media.istockphoto.com/id/2058341644/photo/air-conditioner-maintenance-and-repair-hvac-service-technician-at-work.jpg?s=612x612&w=0&k=20&c=ooYvoL31rISR-2yeOhVpZBb9ojjFWUDdjYPiDbm9dfY=" alt="">
          <h3>AC Technician</h3>
          <p>AC repair, maintenance and installation.</p>
        </div>
      </a>
      <a href="plumber.php" class="service-link">
        <div class="service">
          <img src="https://images.pexels.com/photos/4792499/pexels-photo-4792499.jpeg" alt="">
          <h3>Cleaning Services</h3>
          <p>Home, office and deep cleaning specialists.</p>
        </div>
      </a>
    </div>
  </section>

  <section class="testimonials">
    <h2>What Our Users Say</h2>
    <div class="testimonial">
      <p>"QuickTask helped me find a plumber within 30 minutes. Fast and professional!" – Aarti R.</p>
    </div>
    <div class="testimonial">
      <p>"Very easy to use and I got an electrician the same day. Highly recommended." – John M.</p>
    </div>
  </section>

  <footer>
    <p>&copy; 2025 QuickTask</p>
    <b>Made by Udit Kumar Gupta</b>
  </footer>

  <!-- GSAP & Image Slider Script -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
  <script>
    // GSAP animation on page load
    gsap.from("header", { duration: 1, y: -50, opacity: 0, ease: "bounce" });
    gsap.from(".hero-text", { duration: 1.5, x: -100, opacity: 0, delay: 0.5 });
    gsap.from(".service", { 
      scrollTrigger: ".service",
      duration: 1, 
      y: 50, 
      opacity: 0, 
      stagger: 0.2 
    });

    // Image slider
    const sliderImages = [
      "https://images.pexels.com/photos/31869851/pexels-photo-31869851.jpeg",
      "https://images.pexels.com/photos/3184644/pexels-photo-3184644.jpeg",
      "https://images.pexels.com/photos/3194519/pexels-photo-3194519.jpeg"
    ];

    let currentIndex = 0;
    const slider = document.getElementById("slider");

    setInterval(() => {
      currentIndex = (currentIndex + 1) % sliderImages.length;
      slider.src = sliderImages[currentIndex] + "?auto=compress&cs=tinysrgb&w=600";
    }, 4000);
  </script>
</body>
</html>
