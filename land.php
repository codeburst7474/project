<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
      <a href="sign.php">Signup/Login</a>
    </nav>
  </header>

  <div class="hero">
    <img id="slider" src="https://images.pexels.com/photos/31869851/pexels-photo-31869851.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Slider">
    <div class="hero-text">
      <h1>Your On-Demand Service Partner</h1>
      <p>Book trusted local professionals for any task – fast, reliable, and at your convenience.</p>
      <!-- <button>Get Started</button> -->
      <a href="sign.php">
  <button>Get Started</button>
</a>
    </div>
  </div>

  <section>
    <h2>Our Services</h2>
    <div class="services" id="services">
      <!-- Services injected via JS -->
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
    const services = [
      { title: "Plumber", desc: "Leak repairs, installations and inspections.", img: "https://media.istockphoto.com/id/1516511531/photo/a-plumber-carefully-fixes-a-leak-in-a-sink-using-a-wrench.jpg" },
      { title: "Electrician", desc: "Wiring, lighting and safety checks.", img: "https://images.pexels.com/photos/17063686/pexels-photo-17063686.jpeg" },
      { title: "Technician", desc: "Electronics and appliance repairs.", img: "https://images.pexels.com/photos/7876045/pexels-photo-7876045.jpeg" },
      { title: "Home Tutor", desc: "Skilled educators for home learning.", img: "https://images.pexels.com/photos/5212320/pexels-photo-5212320.jpeg" },
      { title: "Painter", desc: "Interior and exterior painting services.", img: "https://images.pexels.com/photos/3735783/pexels-photo-3735783.jpeg" },
      { title: "Carpenter", desc: "Furniture repair and woodwork.", img: "https://images.pexels.com/photos/3825584/pexels-photo-3825584.jpeg" },
      { title: "AC Technician", desc: "AC installation & repair.", img: "https://images.pexels.com/photos/6474468/pexels-photo-6474468.jpeg" },
      { title: "Cleaning Services", desc: "Home & office cleaning.", img: "https://images.pexels.com/photos/4792499/pexels-photo-4792499.jpeg" },
      { title: "Pest Control", desc: "Effective pest removal.", img: "https://images.pexels.com/photos/2280571/pexels-photo-2280571.jpeg" },
      { title: "Appliance Install", desc: "Setup for electronics.", img: "https://images.pexels.com/photos/7658240/pexels-photo-7658240.jpeg" },
      { title: "Gardening", desc: "Lawn and plant care.", img: "https://images.pexels.com/photos/4751976/pexels-photo-4751976.jpeg" },
      { title: "PC Repair", desc: "Computer troubleshooting.", img: "https://images.pexels.com/photos/11813199/pexels-photo-11813199.jpeg" },
      { title: "House Shifting", desc: "Packing and moving help.", img: "https://images.pexels.com/photos/7464703/pexels-photo-7464703.jpeg" },
      { title: "Babysitting", desc: "Trusted childcare pros.", img: "https://images.pexels.com/photos/3661354/pexels-photo-3661354.jpeg" },
      { title: "Elderly Care", desc: "Compassionate support.", img: "https://images.pexels.com/photos/7551672/pexels-photo-7551672.jpeg" },
      { title: "Mechanic", desc: "On-demand vehicle repair.", img: "https://images.pexels.com/photos/6870303/pexels-photo-6870303.jpeg" },
      { title: "Fitness Trainer", desc: "At-home fitness coach.", img: "https://images.pexels.com/photos/414029/pexels-photo-414029.jpeg" },
      { title: "Photographer", desc: "Event and portrait shots.", img: "https://images.pexels.com/photos/2958264/pexels-photo-2958264.jpeg" }
    ];

    const container = document.getElementById("services");
    container.innerHTML = services.map(service => `
      <div class="service">
        <img src="${service.img}?auto=compress&cs=tinysrgb&w=600" alt="${service.title}" />
        <h3>${service.title}</h3>
        <p>${service.desc}</p>
      </div>
    `).join("");

    // GSAP animations
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
