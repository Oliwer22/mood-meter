fetch('/api/emojis')
.then(response => {
    if (!response.ok) {
        throw new Error('Failed to fetch emoji data');
    }
    return response.json();
})
.then(data => {
    const labels = Object.keys(data);
    const counts = Object.values(data); 
    function getColor(emojiId) {
        console.log('Emoji ID:', emojiId); 
        switch (emojiId) {
            case 'Dead':
                console.log('Data Id: Dead');
                return 'rgb(255, 0, 0)';
            case 'Frown':
                console.log('Data Id: Frown');
                return 'rgb(255, 140, 0)';
            case 'Neutral':
                console.log('Data Id: Neutral');
                return 'rgba(255, 215, 0)';
            case 'Smile':
                console.log('Data Id: Smile');
                return 'rgba(60, 205, 50)';
            case 'Happy':
                console.log('Data Id: Happy ');
                return 'rgb(0, 128, 0)';
            default:
                console.log('Data: undefined');
                return 'rgb(128, 128, 128)'; 
        }
    }
    const backgroundColors = labels.map(label => getColor(label));
    console.log('Data Colors:', backgroundColors); 
    const ctx = document.getElementById('emojiChart').getContext('2d');
    const emojiChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: labels,
            datasets: [{
                data: counts,
                backgroundColor: backgroundColors,
                borderColor: 'rgb(0, 79, 131)',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            tooltips: {
                enabled: true
            }
        }
    });
})
.catch(error => {
    console.error('Error:', error);
});


function fetchDataForPieChart() {
    fetch('/reviews/data')
        .then(response => {
            if (!response.ok) {
                throw new Error('Failed to fetch data for pie chart');
            }
            return response.json();
        })
        .then(data => {
            const emojiIdToName = {
                1: 'Dead',
                2: 'Frown',
                3: 'Neutral',
                4: 'Smile',
                5: 'Happy'
            };
            const emojiIds = data.map(item => item.emoji_id);
            const counts = emojiIds.reduce((acc, id) => {
                acc[id] = (acc[id] || 0) + 1;
                return acc;
            }, {});
            const labels = Object.keys(counts).map(id => emojiIdToName[id]);
            const values = Object.values(counts);
            const backgroundColors = labels.map(label => getColor(label)); // Apply colors based on emoji name
            const ctx = document.getElementById('emojiPieChart').getContext('2d');
            new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: labels,
                    datasets: [{
                        data: values,
                        backgroundColor: backgroundColors,
                        borderColor: 'rgb(0, 79, 131)',
                        borderWidth: 1
                    }]
                },
                responsive: true,
                tooltips: {
                    enabled: true
                }
            });
        })
        .catch(error => {
            console.error('Error:', error);
        });
}

function getColor(emojiName) {
    switch (emojiName) {
        case 'Dead':
            return 'rgb(255, 0, 0)';
        case 'Frown':
            return 'rgb(255, 140, 0)';
        case 'Neutral':
            return 'rgba(255, 215, 0)';
        case 'Smile':
            return 'rgba(60, 205, 50)';
        case 'Happy':
            return 'rgb(0, 128, 0)';
        default:
            return 'rgb(128, 128, 128)';
    }
}

fetchDataForPieChart();
