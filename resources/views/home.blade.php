<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IoT Monitoring Dashboard</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <h2>IoT Dashboard</h2>
        <div class="menu-item active"><span>📊</span> Home Dashboard</div>
        <div class="menu-item active to-about"><span>📊</span> About Perojek</div>
        <hr>
        <div class="menu-item"><span>🌡</span> Temperature</div>
        <div class="menu-item"><span>💧</span> Humidity</div>
        <div class="menu-item"><span>🔌</span> Relays</div>
        <div class="menu-item"><span>📋</span> Logs</div>
    </div>

    <!-- Main Content -->
    <div class="content">
        <div class="header">
            <i class="fas fa-network-wired lg-2"><strong><h1 class="inline">&nbsp; IoT Monitoring Dashboard</h1></strong></i>
            <div class="connection-status">conecting...</div>
        </div>

        <!-- Sensor Overview -->
        <div class="sensor-overview">
            <div class="overview-card">
                <h3>Temperature</h3>
                <div class="value" id="temp-value">--°C</div>
            </div>
            <div class="overview-card">
                <h3>Humidity</h3>
                <div class="value" id="humidity-value">--%</div>
            </div>
        </div>

        <!-- Detailed Sensor Grid -->
        <div class="sensor-grid">
            <div class="sensor-box">
                <div class="sensor-title">
                    <span>🌡</span> Temperature Sensor
                </div>
                <div id="temp-details">Waiting for data...</div>
            </div>

            <div class="sensor-box">
                <div class="sensor-title">
                    <span>💧</span> Humidity Sensor
                </div>
                <div id="humidity-details">Waiting for data...</div>
            </div>
        </div>
         <!-- Relay Controls -->
         <div class="relay-controls">
                <div class="sensor-title">
                    <span>🔌</span> Relay Controls
                </div>
                <div class="relay-buttons">
                    <button class="relay-button" data-relay="1">
                        <span>⚡</span> Relay 1
                    </button>
                    <button class="relay-button" data-relay="2">
                        <span>⚡</span> Relay 2
                    </button>
                    <button class="relay-button" data-relay="3">
                        <span>⚡</span> Relay 3
                    </button>
                    <button class="relay-button \" data-relay="4">
                        <span>⚡</span> Relay 4
                    </button>
                </div>
            </div>

        <!-- Data Log Section -->
        <div class="data-log"">
            <i class="fas fa-project-diagram" id="hidden-list">
                Data Log
            </i>
            <button type="button" id="log-visibel" onclick="hidden()")>
                hillangkan
            </button>
            <div class="log-table-container" >
                <table class="log-table targetHide">
                    <thead>
                        <tr>
                            <th>Timestamp</th>
                            <th>Temperature</th>
                            <th>Humidity</th>
                            <th>Relay Status</th>
                        </tr>
                    </thead>
                    <tbody id="log-data">
                        <!-- Log data will be inserted here by JavaScript -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script>
        // FUNGSI UNTUK MENGHILANGKAN class targetHide 

        function hidden() {
            $(".targetHide").toggle();
            $("#hidden-list").toggle();
        }

    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/scripts.js"></script>

</body>
</html>