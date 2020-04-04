const API_PATH = 'http://localhost:8080/api';
let horsesTaken = [];
getData = () => {
    fetch(API_PATH + '/', {
        method: 'GET',
        headers: {
            'Content-Type': 'application/json'
        },
    })
        .then(data => data.json())
        .then(function (data) {
            const list = document.getElementById('list');
            data.forEach(function (result) {
                if (result.selected === '1') {
                    horsesTaken.push(result.horses);
                    list.innerHTML += "<div class ='holder'>" +
                        "<li class='horse' >" +
                        "<div id='horse' type='text' name='horse'>Horse: " + result.horses +
                        "<p class ='Jockey'> Jockey: " + result.jockey + "</p>" +
                        '<p>Odds: ' + result.odds + "</p>" +
                        "<p class='selectedBy'> Selected By: <br>" + result.name + '</p></div></li></div>'
                } else {
                    list.innerHTML += "<div class='holder'>" +
                        "<li class='horse' >" +
                        "<div id='horse' type='text' name='task'>Horse: " + result.horses +
                        "<p class ='Jockey'> Jockey: " + result.jockey + "</p>" +
                        '<p>Odds: ' + result.odds + '</p>' +
                        '</div></li></div>'
                }
            });
            if (horsesTaken.length === 40) {
                document.getElementById('form').innerHTML = '<h3>All the horses have been picked!</h3>'
            }
        });
};
getData();


document.getElementById('submit').addEventListener('click', function (e) {
    e.preventDefault();
    let request = {
        name: document.getElementById('name').value,
    };

    if (request.name === '') {
        document.getElementById('error').innerText = 'Please enter your name'
    } else if (request.name.length < 8) {
        document.getElementById('error').innerText = 'Please enter your full name'
    } else {
        fetch(API_PATH + '/update', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json' //REQUIRED
            },
            body: JSON.stringify(request)
        })
            .then(
            );
        getData();
        document.getElementById('error').innerText = '';
        document.getElementById('form').innerHTML = '<h3>You\'ve already got a horse' + request.name + '. Don\'t be greedy!</h3>'
    }
});
