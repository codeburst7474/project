 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>QuickTask - Profiles</title>
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

    .slider {
      position: relative;
      height: 300px;
      overflow: hidden;
    }

    .slider img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
    }

    main {
      padding: 2rem;
    }

    h2 {
      text-align: center;
      font-size: 2rem;
      margin-bottom: 2rem;
      color: #007bff;
    }

    .profiles {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 1rem;
    }

    .profile-card {
      background: #fff;
      padding: 1.5rem;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease;
      text-align: center;
    }

    .profile-card:hover {
      transform: translateY(-5px);
    }

    .profile-card h3 {
      color: #00bcd4;
      margin-bottom: 0.3rem;
    }

    .profile-card p {
      margin: 0.2rem 0;
    }

    .stars {
      color: #ffc107;
      margin: 0.5rem 0;
    }

    .pay-btn {
      background-color: #00bcd4;
      color: white;
      border: none;
      padding: 0.5rem 1rem;
      border-radius: 5px;
      cursor: pointer;
      font-weight: bold;
      margin-top: 0.5rem;
    }

    .pay-btn:hover {
      background-color: #0097a7;
    }

    footer {
      background: #111;
      color: #fff;
      text-align: center;
      padding: 2rem;
      margin-top: 2rem;
    }

    footer b {
      color: #00bcd4;
      display: block;
      margin-top: 0.5rem;
    }
  </style>
</head>
<body>

  <header>
    <b>QuickTask</b>
    <nav>
      <a href="">Home</a>
      <a href="about.php">About</a>
      <a href="explore.php">Explore</a>
      <a href="sign.php">Signout</a>
    </nav>
  </header>

  <!-- Image Slider -->
  <div class="slider">
    <img id="slider-img" src="https://images.pexels.com/photos/31869851/pexels-photo-31869851.jpeg" alt="Slider Image">
  </div>

  <main>
    <h2>Professional Profiles</h2>
    <div class="profiles">
      <div class="profile-card">
        <h3>Rahul Verma</h3>
        <p>📞 9876543210</p>
        <div class="stars">⭐⭐⭐⭐</div>
        <button class="pay-btn">Cash Payment</button>
      </div>
      <div class="profile-card">
        <h3>Sunita Sharma</h3>
        <p>📞 9123456789</p>
        <div class="stars">⭐⭐⭐⭐⭐</div>
        <button class="pay-btn">Cash Payment</button>
      </div>
      <div class="profile-card">
        <h3>Amit Joshi</h3>
        <p>📞 9988776655</p>
        <div class="stars">⭐⭐⭐</div>
        <button class="pay-btn">Cash Payment</button>
      </div>
      <div class="profile-card">
        <h3>Neha Patel</h3>
        <p>📞 8765432190</p>
        <div class="stars">⭐⭐⭐⭐</div>
        <button class="pay-btn">Cash Payment</button>
      </div>
      <div class="profile-card">
        <h3>Ravi Kumar</h3>
        <p>📞 9012345678</p>
        <div class="stars">⭐⭐⭐⭐⭐</div>
        <button class="pay-btn">Cash Payment</button>
      </div>
      <div class="profile-card">
        <h3>Pooja Mehta</h3>
        <p>📞 9876501234</p>
        <div class="stars">⭐⭐⭐</div>
        <button class="pay-btn">Cash Payment</button>
      </div>
      <div class="profile-card">
        <h3>Ankit Singh</h3>
        <p>📞 9988998877</p>
        <div class="stars">⭐⭐⭐⭐</div>
        <button class="pay-btn">Cash Payment</button>
      </div>
      <div class="profile-card">
        <h3>Kavita Desai</h3>
        <p>📞 9765432100</p>
        <div class="stars">⭐⭐⭐⭐</div>
        <button class="pay-btn">Cash Payment</button>
      </div>
      <div class="profile-card">
        <h3>Mohit Bansal</h3>
        <p>📞 9234567890</p>
        <div class="stars">⭐⭐⭐⭐⭐</div>
        <button class="pay-btn">Cash Payment</button>
      </div>
      <div class="profile-card">
        <h3>Swati Roy</h3>
        <p>📞 9321654789</p>
        <div class="stars">⭐⭐⭐</div>
        <button class="pay-btn">Cash Payment</button>
      </div>
    </div>
  </main>

  <footer>
    <p>&copy; 2025 QuickTask</p>
    <b>Made by Udit Kumar Gupta</b>
  </footer>

  <!-- Image Slider Script -->
  <script>
    const sliderImages = [
      "https://images.pexels.com/photos/31869851/pexels-photo-31869851.jpeg",
      "https://images.pexels.com/photos/3184644/pexels-photo-3184644.jpeg",
      "https://images.pexels.com/photos/3194519/pexels-photo-3194519.jpeg"
    ];

    let index = 0;
    const slider = document.getElementById("slider-img");

    setInterval(() => {
      index = (index + 1) % sliderImages.length;
      slider.src = sliderImages[index] + "?auto=compress&cs=tinysrgb&w=800";
    }, 4000);
  </script>

</body>
</html>
