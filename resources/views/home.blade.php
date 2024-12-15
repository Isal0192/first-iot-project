<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Web Monitoring IoT</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="/css/style.css">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>

  <!-- Sidebar -->
  <div class="sidebar">
    <h3>Navigation</h3>
    <a href="/about">About</a>
    <a href="/">Keluar</a>
  </div>

  <!-- Main Content -->
  <div class="main-content">
    <!-- Header -->
    <div class="header">
      <h1>Web Monitoring IoT</h1>
    </div> 

    <!-- Sensor Panels -->
    <div class="sensor-panel">
      <div class="card">
        <h3><i class="fas fa-thermometer-half"></i> Sensor Suhu</h3>
        <p>Data: <span id="temperature">{{$dataTerbaru->tempratur}}</span> °C</p>
      </div>
      <div class="card">
        <h3><i class="fas fa-tint"></i> Sensor Kelembapan</h3>
        <p>Data: <span id="humidity">{{$dataTerbaru->humidity}}</span> %</p>
      </div>
    </div>

    <!-- Relay Switch -->
    <div class="relay-card">
      <h3>Saklar Relay 4 Channel</h3>
      <button class="relay-btn channel1" onclick="toggleDevice(1)">Channel 1</button>
      <button class="relay-btn channel2" onclick="toggleDevice(2)">Channel 2</button>
      <button class="relay-btn channel3" onclick="toggleDevice(3)">Channel 3</button>
      <button class="relay-btn channel4" onclick="toggleDevice(4)">Channel 4</button>
    </div>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.3.6/axios.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', () => {
    // Update current time
    function updateTime() {
      const timeDisplay = document.getElementById('current-time');
      if (timeDisplay) {
        timeDisplay.textContent = new Date().toLocaleString();
      }
    }
    updateTime();
    setInterval(updateTime, 1000);

    // Fetch latest sensor data
    function fetchSensorData() {
      axios.get('/api/data')
        .then(response => {
          const { temperature, humidity } = response.data;
          
          document.getElementById('temperature').textContent = `${temperature} °C`;
          document.getElementById('humidity').textContent = `${humidity} %`;
          
          document.getElementById('temperature-timestamp').textContent = new Date().toLocaleString();
          document.getElementById('humidity-timestamp').textContent = new Date().toLocaleString();
      })
      .catch(error => {
          console.error('Error fetching sensor data:', error);
      });
    }


    // Fungsi untuk mengubah status saklar (hanya simulasi)
    function toggleDevice(channel) {
      alert('Toggling Channel ' + channel);
      // Simulasi mengubah baground sesuai status saklar
      coich = document.querySelector('.channel' + channel);
      
    }


  </script>
</body>
</html>