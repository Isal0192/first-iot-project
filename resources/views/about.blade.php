<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>IoT Monitoring</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

  <style>
    body {
      font-family: 'Arial', sans-serif;
      background-color: #f8f9fa;
    }
    nav {
      background-color: #0d6efd;
    }
    nav .navbar-brand {
      font-weight: bold;
      color: #fff;
    }
    nav .nav-link {
      color: #fff;
      transition: color 0.3s;
    }
    nav .nav-link:hover {
      color: #ffc107;
    }
    .hero-section {
      background: linear-gradient(to right, #6c757d, #0d6efd);
      color: #fff;
      padding: 50px 0;
    }
    .hero-section h1 {
      font-size: 3rem;
      font-weight: bold;
    }
    section {
      margin-bottom: 50px;
    }
    .device-section img {
      width: 100%;
      height: auto;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .device-section .device-card {
      background-color: #ffffff;
      border-radius: 10px;
      padding: 15px;
      text-align: center;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      border: 4px solid transparent;
      transition: transform 0.3s, box-shadow 0.3s;
    }
    .device-section .device-card:hover {
      border-color: #0d6efd;
      box-shadow: 0 8px 12px rgba(0, 0, 0, 0.2);
      transform: translateY(-10px);
    }
    footer {
      background-color: #0d6efd;
      color: #fff;
      padding: 20px 0;
      text-align: center;
    }

    /* Komponen Utama Section */
    .key-components {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 20px;
    }
    .key-component-card {
      background-color: #ffffff;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      padding: 20px;
      text-align: center;
      opacity: 0;
      transform: translateY(50px);
      transition: opacity 0.6s ease, transform 0.6s ease;
    }
    .key-component-card.visible {
      opacity: 1;
      transform: translateY(0);
    }
    .key-component-card h4 {
      color: #0d6efd;
      margin-bottom: 15px;
    }
    .key-component-card p {
      font-size: 1rem;
      color: #6c757d;
    }
  </style>
</head>
<body>

  <style>
    body {
      font-family: 'Arial', sans-serif;
      background-color: #f8f9fa;
    }
    nav {
      background-color: #0d6efd;
    }
    nav .navbar-brand {
      font-weight: bold;
      color: #fff;
    }
    nav .nav-link {
      color: #fff;
      transition: color 0.3s;
    }
    nav .nav-link:hover {
      color: #ffc107;
    }
    .hero-section {
      background: linear-gradient(to right, #6c757d, #0d6efd);
      color: #fff;
      padding: 50px 0;
    }
    .hero-section h1 {
      font-size: 3rem;
      font-weight: bold;
    }
    section {
      margin-bottom: 50px;
    }
    .device-section img {
      width: 100%;
      height: auto;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .device-section .device-card {
      background-color: #ffffff;
      border-radius: 10px;
      padding: 15px;
      text-align: center;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      border: 4px solid transparent;
      transition: transform 0.3s, box-shadow 0.3s;
    }
    .device-section .device-card:hover {
      border-color: #0d6efd;
      box-shadow: 0 8px 12px rgba(0, 0, 0, 0.2);
      transform: translateY(-10px);
    }
    footer {
      background-color: #0d6efd;
      color: #fff;
      padding: 20px 0;
      text-align: center;
    }
     /* Komponen Utama Section */
     .key-components {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 20px;
    }
    .key-component-card {
      background-color: #ffffff;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      padding: 20px;
      text-align: center;
      opacity: 0;
      transform: translateY(50px);
      transition: opacity 0.6s ease, transform 0.6s ease;
    }
    .key-component-card.visible {
      opacity: 1;
      transform: translateY(0);
    }
    .key-component-card h4 {
      color: #0d6efd;
      margin-bottom: 15px;
    }
    .key-component-card p {
      font-size: 1rem;
      color: #6c757d;
    }
    .key-component-card .icon {
      font-size: 3rem;
      color: #0d6efd;
      margin-bottom: 15px;
    }
    /* Scroll Reveal Transition */
.scroll-reveal {
  opacity: 0;
  transform: translateY(100px);
  transition: opacity 1s ease-in-out, transform 1s ease-in-out;
}

.scroll-reveal.revealed {
  opacity: 1;
  transform: translateY(0);
}

/* Adding a delay for each item to make it look more dynamic */
.key-component-card {
  transition: transform 0.6s ease, box-shadow 0.3s ease;
}

.key-component-card.revealed {
  transform: translateY(0);
}

.key-component-card {
  opacity: 0;
  transform: translateY(100px); /* Slide up effect */
  transition: opacity 0.8s ease, transform 0.8s ease;
}

.key-component-card.visible {
  opacity: 1;
  transform: translateY(0);
}

    .team-card, .tech-card {
      background-color: #ffffff;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      padding: 20px;
      flex: 1;
      min-width: 300px;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .team-card:hover, .tech-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 6px 10px rgba(0, 0, 0, 0.2);
    }
    .team-card h3, .tech-card h3 {
      color: #0d6efd;
      margin-bottom: 15px;
      transition: color 0.3s ease;
    }
    .team-card:hover h3, .tech-card:hover h3 {
      color: #ffc107;
    }
    .team-card ul, .tech-card ul {
      list-style-type: none;
      padding: 0;
      color: #6c757d;
    }
    .team-card ul li, .tech-card ul li {
      margin-bottom: 10px;
      transition: color 0.3s ease;
    }
    .team-card ul li:hover, .tech-card ul li:hover {
      color: #0d6efd;
    }
    .about-project {
      background-color: #ffffff;
      padding: 50px 20px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      color: #333;
    }
    .about-project h2 {
      color: #1e40af;
      margin-bottom: 20px;
    }
  </style>
</head>
<body>

  

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="#"><i class="fas fa-network-wired"></i> IoT Monitoring</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/home"><i class="fas fa-home"></i> Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about"><i class="fas fa-info-circle"></i> About Project</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#devices"><i class="fas fa-microchip"></i> Devices</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/Home"><i class="fas fa-undo"></i> Kembali</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="hero-section text-center">
    <div class="container">
      <h1><i class="fas fa-desktop"></i> Welcome to IoT Monitoring</h1>
      <p>Selamat datang di web monitoring IoT untuk solusi digital dan kontrol perangkat Anda.</p>
    </div>
  </section>
    <!-- About Project Section -->
    <section id="about" class="about-project">
      <div class="container">
        <h2><i class="fas fa-info-circle"></i> About Project</h2>
        <p>Proyek ini bertujuan untuk memberikan solusi pemantauan dan kontrol perangkat IoT secara real-time, memantau suhu, kelembaban, dan parameter penting lainnya dari perangkat yang terhubung dan juga untuk memenuhi tugas mata kuliah pemrograman Website1.</p>
      </div>
    </section>

  <!-- Device Section -->
  <section id="devices" class="device-section py-5">
    <div class="container">
      <h2 class="text-center mb-5"><i class="fas fa-tools"></i> Devices Overview</h2>
      <div class="row g-4">

        <!-- Relay 4 Channel -->
        <div class="col-md-4">
          <div class="device-card">
            <img src="img/relay.jpg" alt="Relay 4 Channel">
            <h5 class="mt-3">Relay 4 Channel</h5>
            <p>Digunakan untuk mengontrol perangkat listrik seperti lampu dan motor secara terpisah hingga 4 saluran.</p>
          </div>
        </div>

        <!-- MAX30100 Sensor -->
        <div class="col-md-4">
          <div class="device-card">
            <img src="img/max30100.jpg" alt="img/MAX30100 Sensor">
            <h5 class="mt-3">MAX30100 Sensor</h5>
            <p>Memonitor detak jantung dan kadar oksigen dalam darah secara real-time.</p>
          </div>
        </div>

        <!-- DHT11 Sensor -->
        <div class="col-md-4">
          <div class="device-card">
            <img src="img/dht11.jpg" alt="DHT11 Sensor">
            <h5 class="mt-3">DHT11 Sensor</h5>
            <p>Memantau suhu dan kelembaban udara dengan akurasi tinggi.</p>
          </div>
        </div>

        <!-- ESP8266 Module -->
        <div class="col-md-4">
          <div class="device-card">
            <img src="img/ultasonik.webp" alt="ESP8266 Module">
            <h5 class="mt-3">ultrasonik shcr04</h5>
            <p>Memungkinkan untuk mendeteksi objek yang berada di depan lalu memantulkan sinyal ulrasonik dan mengirimkan data.</p>
          </div>
        </div>

        <!-- Arduino Board -->
        <div class="col-md-4">
          <div class="device-card">
            <img src="img/sensor cahaya.jpg" alt="Arduino Board">
            <h5 class="mt-3">sensor cahaya</h5>
            <p>sensor resistensi cahaya sebagai pendeteksi adanya cahaya.</p>
          </div>
        </div>

        <!-- Raspberry Pi -->
        <div class="col-md-4">
          <div class="device-card">
            <img src="img/irr.jpg" alt="Raspberry Pi">
            <h5 class="mt-3">sensor inflared</h5>
            <p>memberikan sinyal infrared untuk mendeteksi objek .</p>
          </div>
        </div>
      </div>


  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="#"><i class="fas fa-network-wired"></i> IoT Monitoring</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    
        </ul>
      </div>
    </div>
  </nav>

  <!-- Team & Technology Stack Section -->

    <div class="container">
      <h2 class="text-center mb-5"><i class="fas fa-users"></i> Team & Technology Stack</h2>
      <div class="team-tech-section">
        <!-- Team Members -->
        <div class="team-card">
          <h3>Team Members</h3>
          <ul>
            <li>Irsyad 312310512</li>
            <li>Faisal 312310</li>
            <li>ifa 312310</li>
            <li>Oya 312310</li>
          </ul>
        </div>

        <!-- Technology Stack -->
        <div class="tech-card">
          <h3>Technology Stack</h3>
          <ul>
            <li><strong>Frontend:</strong> HTML, Bootstrap, JavaScript</li>
            <li><strong>Backend & Hardware:</strong> Laravel11, RESTful API, MySQL, NodeMCU, DHT11, Relay 4 Channel</li>
          </ul>
        </div>
      </div>
    </div>
  </section>


  <!-- Key Components Section -->
  <section id="key-components" class="py-5">
    <div class="container">
      <h2 class="text-center mb-5"><i class="fas fa-cogs"></i> Komponen Utama Project Kelompok</h2>
      <div class="key-components">
        <div class="key-component-card">
          <div class="icon"><i class="fas fa-heartbeat"></i></div>
          <h4>MAX30100 Pulse Oximeter</h4>
          <p>Sensor yang digunakan untuk mendeteksi detak jantung dan kadar oksigen dalam darah (SpO2).</p>
        </div>
        <div class="key-component-card">
          <div class="icon"><i class="fas fa-thermometer-half"></i></div>
          <h4>DHT11 Sensor</h4>
          <p>Sensor untuk mengukur suhu dan kelembapan lingkungan dengan akurasi tinggi.</p>
        </div>
        <div class="key-component-card">
          <div class="icon"><i class="fas fa-eye"></i></div>
          <h4>Infrared Sensor</h4>
          <p>Sensor untuk mendeteksi keberadaan objek dan mengontrol relay.</p>
        </div>
        <div class="key-component-card">
          <div class="icon"><i class="fas fa-bolt"></i></div>
          <h4>Relay</h4>
          <p>Empat relay untuk mengontrol perangkat elektronik.</p>
        </div>
      </div>
    </div>
  </section>
  <!-- Circuit Diagram Section -->
  <section class="circuit-diagram">
    <div class="container">
      <h2 class="text-center mb-4"><i class="fas fa-drafting-compass"></i> wemoss d1/esp8266</h2>
      <img src="img/wemos.png" alt="IoT Circuit Diagram">
    </div>
  </section>


  <!-- Circuit Diagram Section -->
  <section class="circuit-diagram">
    <div class="container">
      <h2 class="text-center mb-4"><i class="fas fa-drafting-compass"></i> Circuit Diagram</h2>
      <img src="img/rangkaian.jpg" alt="IoT Circuit Diagram">
    </div>
  </section>


  <!-- Footer -->
  <footer>
    <div class="container">
      <p>&copy; 2024 IoT Monitoring. Mahasiswa Pelita Bangsa.</p>
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/scrollreveal"></script>
  <script>
    ScrollReveal().reveal('.scroll-reveal', {
      distance: '50px',
      duration: 800,
      easing: 'ease-in-out',
      origin: 'bottom',
      interval: 200
    });
  </script>
  
  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    document.addEventListener('scroll', () => {
      const cards = document.querySelectorAll('.key-component-card');
      const windowHeight = window.innerHeight;

      cards.forEach(card => {
        const rect = card.getBoundingClientRect();
        if (rect.top <= windowHeight - 100) {
          card.classList.add('visible');
        }
      });
    });
  </script>

  
  
</body>
</html>