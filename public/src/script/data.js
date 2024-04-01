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
                label: 'Emoji Counts',
                data: counts,
                backgroundColor: backgroundColors,
                borderColor: backgroundColors, 
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
        }
    });
})
.catch(error => {
    console.error('Error:', error);
});