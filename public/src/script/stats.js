const datePicker = document.getElementById('datePicker');
const ctx = document.getElementById('AllStats').getContext('2d');
let registrationChart = null;

datePicker.addEventListener('change', () => fetchData(datePicker.value));

function fetchData(date) {
    console.log(`Fetching data for ${date}...`);

    fetch(`/stats?date=${date}`)
        .then(response => {
            if (!response.ok) {
                throw new Error('Failed to fetch registration stats');
            }
            return response.json();
        })
        .then(data => {
            const emojiLabels = data.emojiLabels.map(label => {
                const date = new Date(label);
                return `${date.getDate()}/${date.getMonth()+1} ${date.getHours()}:${date.getMinutes()}`;
            });
            const emojiCounts = data.emojiCounts;

            const reviewLabels = data.reviewLabels.map(label => {
                const date = new Date(label);
                return `${date.getDate()}/${date.getMonth()+1} ${date.getHours()}:${date.getMinutes()}`;
            });
            const reviewCounts = data.reviewCounts;

            console.log('Fetched data:', data);
            if (registrationChart) {
                registrationChart.data.labels = emojiLabels;
                registrationChart.data.datasets[0].data = emojiCounts;
                registrationChart.data.datasets[1].data = reviewCounts;
                registrationChart.update();
            } else {
                registrationChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: emojiLabels,
                        datasets: [{
                            label: 'Emoji',
                            data: emojiCounts,
                            fill: false,
                            borderColor: 'rgba(255, 0 ,0)',
                            borderWidth: 3
                        },
                        {
                            label: 'Review',
                            data: reviewCounts,
                            fill: false,
                            borderColor: 'rgba(54, 162, 235, 1)',
                            borderWidth: 3
                        }]
                    },
                    options: {
                        responsive: true,
                        scales: {
                            y: {
                                ticks: {
                                    stepSize: 1
                                }
                            }
                        },
                        tooltips: {
                            enabled: true,
                            mode: 'index',
                            intersect: false,
                            callbacks: {
                                label: function(tooltipItem, data) {
                                    let label = data.datasets[tooltipItem.datasetIndex].label || '';
                                    if (label) {
                                        label += ': ';
                                    }
                                    label += Math.round(tooltipItem.yLabel * 100) / 100;
                                    return label;
                                }
                            }
                        }
                    }
                });
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
}

// Fetch data for today's date by default
fetchData(new Date().toISOString().split('T')[0]);