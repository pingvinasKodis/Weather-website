fetch('https://api.meteo.lt/v1/places').then(response => response.json()).then(data => {
    console.log('Valio:\n', data);
}).catch(error => {
    console.error("Something went wrong:", error)
});