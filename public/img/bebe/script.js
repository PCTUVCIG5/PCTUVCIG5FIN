let counter = 1;
setInterval(() => {
    document.querySelector('h1').innerText = counter;
    counter++;
    if(counter > 2) location.reload();
}, 1000);