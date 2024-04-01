const oneDayButton = document.getElementById('oneDay');
const threeDaysButton = document.getElementById('threeDays');
const sevenDaysButton = document.getElementById('sevenDays');
const ctx = document.getElementById('AllStats').getContext('2d');
let registrationChart = null;

oneDayButton.addEventListener('click', () => fetchData(1));
threeDaysButton.addEventListener('click', () => fetchData(3));
sevenDaysButton.addEventListener('click', () => fetchData(7));

function fetchData(days) {
    console.log(`Fetching data for ${days} day(s)...`);

    fetch(`/stats?days=${days}`)
        .then(response => {
            if (!response.ok) {
                throw new Error('Failed to fetch registration stats');
            }
            return response.json();
        })
        .then(data => {
            const labels = data.labels;
            const counts = data.counts;

            console.log('Fetched data:', data);
            if (registrationChart) {
                registrationChart.destroy(); 
            }
            registrationChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Emoji',
                    data: counts,
                    fill: false,
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 4
                }]
            },
            options: {
                responsive: true,
                aspectRatio : 2,
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            stepSize: 1
                        }
                    }
                }
            }
        });
        })
        .catch(error => {
            console.error('Error:', error);
        });
}
fetchData(1);