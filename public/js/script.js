// Fungsi untuk mengubah status saklar relay (simulasi)
function toggleDevice(channel) {
    alert('Toggling Channel ' + channel);
}

// Inisialisasi Grafik menggunakan Chart.js
const ctx = document.getElementById('sensorChart').getContext('2d');
const sensorChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: [], // Waktu atau Interval data
        datasets: [
            {
                label: 'Suhu (°C)',
                borderColor: '#ff6b6b',
                backgroundColor: 'rgba(255,107,107,0.2)',
                data: []
            },
            {
                label: 'Kelembapan (%)',
                borderColor: '#4f4fc9',
                backgroundColor: 'rgba(79,79,201,0.2)',
                data: []
            }
        ]
    },
    options: {
        responsive: true,
        scales: {
            x: {
                title: {
                    display: true,
                    text: 'Waktu'
                }
            },
            y: {
                title: {
                    display: true,
                    text: 'Nilai Sensor'
                }
            }
        }
    }
});
