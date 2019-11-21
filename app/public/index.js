const API_PATH = 'http://localhost:8080/api'


fetch(API_PATH + '/', {
    method: 'GET', // your method
    headers: {
            'Content-Type': 'application/json' //REQUIRED
        },
    })
        .then(data => data.json())
        .then(function (data) {
            const list = document.getElementById('list')
            document.getElementById('title').innerHTML += "<ul class='title'><li class='titles'>Done</li>" +
                "<li class='titles'>Tasks</li></ul>"
            data.forEach(function (result) {
                list.innerHTML += "<form><li class='task'>" +
                    "<label class='container'><input id='completed' type='checkbox' name='completed'> <span class='checkmark'></span></label>" +
                    "<input id='task' type='text' name='task' value='" + result.task + "''>" +
                    "<input id='id' type='text' name='id' class='id' value='" + result.id + "'> " +
                    "<input id='update' type='submit' name='Update' value='Update'> " +
                    "<input id='delete' type='submit' name='Delete' value='Delete'> " +
                    "</li></form>"
            })

            list.innerHTML += "<form method='post' action=''><input type='text' name='task' id='newTask' placeholder='Add new task'>" +
                "<input type='submit' name='Add' id='add' value='Add'></form> "

            document.getElementById('add').addEventListener('click', function (e) {
                e.preventDefault()
                let request = {
                    task: null
                }

                request.task = document.getElementById('newTask').value
                console.log(request.task)
                fetch(API_PATH + '/add', {
                    method: 'POST', // your method
                    headers: {
                        'Content-Type': 'application/json' //REQUIRED
                    },
                    body: JSON.stringify(request)})// YOUR DATA
                    .then(
                        location.reload()
                    )
            })

            document.getElementById('update').addEventListener('click', function (e) {
                e.preventDefault()
                let request = {
                    id: null,
                    task: null
                }

                request.task = document.getElementById('task').value
                request.id = document.getElementById('id').value
                fetch(API_PATH + '/update', {
                    method: 'POST', // your method
                    headers: {
                        'Content-Type': 'application/json' //REQUIRED
                    },
                    body: JSON.stringify(request)})// YOUR DATA
                    .then(
                        location.reload()
                    )
            })

            document.getElementById('completed').addEventListener('click', function (e) {
                e.preventDefault()
                let request = {
                    id: null
                }

            request.id = document.getElementById('id').value
            fetch(API_PATH + '/complete', {
                method: 'POST', // your method
                headers: {
                    'Content-Type': 'application/json' //REQUIRED
                },
                body: JSON.stringify(request)})// YOUR DATA
                .then(
                    location.reload()
                )
        })

            document.getElementById('delete').addEventListener('click', function (e) {
                e.preventDefault()
                let request = {
                    id: null
                }

                request.id = document.getElementById('id').value
                fetch(API_PATH + '/delete', {
                    method: 'POST', // your method
                    headers: {
                        'Content-Type': 'application/json' //REQUIRED
                    },
                    body: JSON.stringify(request)})// YOUR DATA
                    .then(
                        location.reload()
                    )
            })

})






