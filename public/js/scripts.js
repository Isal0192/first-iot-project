document.addEventListener('DOMContentLoaded', () => {
    const connectionStatus = document.querySelector('.connection-status');
    let url = "http://127.0.0.1:8000"
    
    // Update sensor values
    async function updateSensorValues() {
        try {
            const response = await fetch(url+'/api/data');
            const data = await response.json();
            console.log('data :', data);

            if (response){
                connectionStatus.innerHTML="conected"
            }
            

            document.getElementById('temp-value').textContent = `${data.tempratur}°C`;
            document.getElementById('humidity-value').textContent = `${data.humidity}%`;
            
            const responses = await fetch(url+'/api/all');
            const datas = await responses.json();
            console.log('datas :', datas);
            
            let tempMin = Infinity, tempMax = -Infinity, humidityMin = Infinity, humidityMax = -Infinity;
            
            datas.forEach((item) => {
                if (item.tempratur < tempMin) tempMin = item.tempratur;
                if (item.tempratur > tempMax) tempMax = item.tempratur;
                if (item.humidity < humidityMin) humidityMin = item.humidity;
                if (item.humidity > humidityMax) humidityMax = item.humidity;
            });
            console.log(tempMin,tempMax,humidityMin,humidityMax)
            
            document.getElementById('temp-details').textContent =
            "Current: " + data.tempratur + "%\n" +
            "Min: " + tempMin + "%\n" +
                "Max: " + tempMax + "%";
            document.getElementById('humidity-details').textContent =
                "Current: " + data.humidity + "%\n" +
                "Min: " + humidityMin + "%\n" +
                "Max: " + humidityMax + "%";
                
        } catch (error) {
            console.error('Error updating sensor values:', error);
        }
    }

    // Relay control
    // document.querySelectorAll('.relay-button').forEach(button => {
        //     button.addEventListener('click', async () => {
            //         const relayNumber = button.dataset.relay;
            //         button.classList.toggle('active');

    //         try {
    //             await fetch(`/api/relay/${relayNumber}`, {
    //                 method: 'PUT',
    //                 headers: {
        //                     'Content-Type': 'application/json'
    //                 },
    //                 body: JSON.stringify({
    //                     state: button.classList.contains('active')
    //                 })
    //             });
    //         } catch (error) {
    //             console.error('Error updating relay state:', error);
    //         }
    //     });
    // });

    // Log data handling
    let currentPage = 1;
    const itemsPerPage = 5;

    async function loadLogData() {
        try {
            const response = await fetch(`http://127.0.0.1:8000/api/all`);
            const data = await response.json();
            updateLogTable(data);
        } catch (error) {
            console.error('Error loading log data:', error);
        }
    }

    function updateLogTable(logs) {
        const tbody = document.getElementById('log-data');
        tbody.innerHTML = '';
        logs.forEach(log=> {
            const date = new Date(log.created_at);
            const day = date.getDate().toString().padStart(2, '0');
            const month = (date.getMonth() + 1).toString().padStart(2, '0');
            const year = date.getFullYear();

            const formatDate = `${day}-${month}-${year}`;

            const row = document.createElement('tr');
            row.innerHTML = `
            <td>${formatDate}</td>
            <td>${log.tempratur}</td>
            <td>${log.humidity}</td>
            <td>${null}</td>
            `;
            tbody.appendChild(row);
        
        });
    }

    

    function formatTimestamp(timestamp) {
        const data = new Date(timestamp).toLocaleString();
        // mengembalikan bulan , tanggal, tahun
        return data.replace(',', ', ');
    
    
    }

    function formatRelayStatus(status) {
        return Object.entries(status)
            .map(([relay, state]) => `Relay ${relay}: ${state ? 'ON' : 'OFF'}`)
            .join(', ');
    }

    document.querySelector('.to-about').addEventListener('click', () => {
        window.location.href = '/about';
    });
    

    // // Initial load
    updateSensorValues();
    loadLogData();
});
