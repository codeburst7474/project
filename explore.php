<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Explore Services - QuickTask</title>
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

    .explore-section {
      max-width: 1100px;
      margin: 2rem auto;
      padding: 2rem;
      background: #fff;
      border-radius: 10px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    .explore-section h1 {
      font-size: 2.2rem;
      color: #007bff;
      text-align: center;
      margin-bottom: 1rem;
    }

    .filter {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      margin-bottom: 2rem;
      gap: 1rem;
    }

    .filter button {
      padding: 0.5rem 1rem;
      background-color: #00bcd4;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .filter button:hover {
      background-color: #0097a7;
    }

    .services-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
      gap: 1.5rem;
    }

    .service {
      background: #f1f1f1;
      padding: 1rem;
      border-radius: 10px;
      text-align: center;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease;
    }

    .service:hover {
      transform: translateY(-5px);
    }

    .service img {
      width: 100%;
      height: 140px;
      object-fit: cover;
      border-radius: 8px;
    }

    .service h3 {
      color: #00bcd4;
      margin: 1rem 0 0.5rem;
    }

    .service p {
      font-size: 0.95rem;
    }

    @media (max-width: 600px) {
      .filter {
        flex-direction: column;
      }
    }
  </style>
</head>
<body>

<header>
  <b>QuickTask</b>
  <nav>
    <a href="welcome.php">Home</a>
    <a href="about.php">About</a>
    <a href="explore.php">Explore</a>
    <!-- <a href="">Signup/Login</a> -->
  </nav>
</header>

<section class="explore-section">
  <h1>Explore Services</h1>
  <div class="filter">
    <button onclick="filterServices('all')">All</button>
    <button onclick="filterServices('home')">Home Services</button>
    <button onclick="filterServices('technical')">Technical</button>
    <button onclick="filterServices('education')">Education</button>
    <button onclick="filterServices('cleaning')">Cleaning</button>
  </div>

  <div class="services-grid" id="serviceList">
    <!-- Services are dynamically inserted via JS -->
  </div>
</section>

<footer>
  <p>&copy; 2025 QuickTask</p>
  <b>Made by Udit Kumar Gupta</b>
</footer>

<script>
  const services = [
    { name: "Plumber", category: "home", img: "https://media.istockphoto.com/id/1516511531/photo/a-plumber-carefully-fixes-a-leak-in-a-sink-using-a-wrench.jpg", desc: "Leak repairs, pipe fixes, and fittings." },
    { name: "Electrician", category: "technical", img: "https://images.pexels.com/photos/17063686/pexels-photo-17063686.jpeg", desc: "Lighting and wiring jobs." },
    { name: "AC Technician", category: "technical", img: "https://images.pexels.com/photos/6474468/pexels-photo-6474468.jpeg", desc: "AC repair and installation." },
    { name: "Carpenter", category: "home", img: "https://images.pexels.com/photos/3825584/pexels-photo-3825584.jpeg", desc: "Furniture fixing and woodwork." },
    { name: "Home Tutor", category: "education", img: "https://images.pexels.com/photos/5212320/pexels-photo-5212320.jpeg", desc: "Tutors for school and college subjects." },
    { name: "Cleaning", category: "cleaning", img: "https://images.pexels.com/photos/4792499/pexels-photo-4792499.jpeg", desc: "Home and deep cleaning." },
    { name: "Painter", category: "home", img: "https://images.pexels.com/photos/3735783/pexels-photo-3735783.jpeg", desc: "Wall painting and coating." },
    { name: "Technician", category: "technical", img: "https://images.pexels.com/photos/7876045/pexels-photo-7876045.jpeg", desc: "Appliance repairs and servicing." },
    { name: "Gardener", category: "home", img: "https://images.pexels.com/photos/7752191/pexels-photo-7752191.jpeg", desc: "Garden maintenance and planting." },
    { name: "Math Tutor", category: "education", img: "https://images.pexels.com/photos/4144222/pexels-photo-4144222.jpeg", desc: "Maths support for school students." },
  ];

  function displayServices(filter = 'all') {
    const container = document.getElementById("serviceList");
    container.innerHTML = '';
    const filtered = filter === 'all' ? services : services.filter(s => s.category === filter);
    filtered.forEach(service => {
      container.innerHTML += `
        <div class="service">
          <img src="${service.img}" alt="${service.name}">
          <h3>${service.name}</h3>
          <p>${service.desc}</p>
        </div>`;
    });
  }

  function filterServices(category) {
    displayServices(category);
  }

  // Initial load
  displayServices('all');
</script>

</body>
</html>
