<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>IoT Monitoring</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="css/styleAbout.css">
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="#"><i class="fas fa-network-wired"></i> IoT Monitoring</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" href="/home"><i class="fas fa-home"></i> Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about"><i class="fas fa-info-circle"></i> About Project</a>
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

        <!-- DHT11 Sensor -->
        <div class="col-md-4">
          <div class="device-card">
            <img src="img/dht11.jpg" alt="DHT11 Sensor">
            <h5 class="mt-3">DHT11 Sensor</h5>
            <p>Memantau suhu dan kelembaban udara dengan akurasi tinggi.</p>
          </div>
        </div>

        <!-- Ultrasonic Sensor -->
        <div class="col-md-4">
          <div class="device-card">
            <img src="img/wemos.png" alt="Ultrasonic Sensor">
            <h5 class="mt-3">Wemos D1 mini</h5>
            <p>Digunakan untuk mengendalikan alur perogram yang telah di buat.</p>
          </div>
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
          <div class="icon"><i class="fas fa-thermometer-half"></i></div>
          <h4>DHT11 Sensor</h4>
          <p>Sensor untuk mengukur suhu dan kelembapan lingkungan dengan akurasi tinggi.</p>
        </div>
        <div class="key-component-card">
          <div class="icon"><i class="fas fa-bolt"></i></div>
          <h4>Relay</h4>
          <p>Empat relay untuk mengontrol perangkat elektronik.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Circuit Diagrams -->
  <section class="circuit-diagram">
    <div class="container">
      <h2 class="text-center mb-4"><i class="fas fa-drafting-compass"></i> Wemos D1/ESP8266</h2>
      <img src="img/wemos.png" alt="Wemos D1/ESP8266 Diagram" class="img-fluid">
      
      <h2 class="text-center mb-4 mt-5"><i class="fas fa-drafting-compass"></i> Circuit Diagram</h2>
      <img src="img/rangkaian.jpg" alt="IoT Circuit Diagram" class="img-fluid">
    </div>
  </section>

  <!-- Team & Technology Section -->
  <section class="py-5">
    <div class="container">
      <h2 class="text-center mb-5"><i class="fas fa-users"></i> Team & Technology Stack</h2>
      <div class="row g-4">
        <div class="col-md-6">
          <div class="team-card">
            <h3>Team Members</h3>
            <ul>
              <li>Irsyad 312310512</li>
              <li>Faisal 312310</li>
              <li>Ifa 312310</li>
              <li>Oya 312310</li>
            </ul>
          </div>
        </div>
        <div class="col-md-6">
          <div class="tech-card">
            <h3>Technology Stack</h3>
            <ul>
              <li><strong>Frontend:</strong> HTML, Bootstrap, JavaScript</li>
              <li><strong>Backend & Hardware:</strong> Laravel11, RESTful API, MySQL, NodeMCU, DHT11, Relay 4 Channel</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <div class="container">
      <p>&copy; 2024 IoT Monitoring. Mahasiswa Pelita Bangsa.</p>
    </div>
  </footer>

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/scrollreveal"></script>
  <script>
    // Scroll reveal animation
    ScrollReveal().reveal('.scroll-reveal', {
      distance: '50px',
      duration: 800,
      easing: 'ease-in-out',
      origin: 'bottom',
      interval: 200
    });

    // Component cards visibility
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