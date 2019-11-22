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
            document.getElementById('title').innerHTML += "<ul class='title container'><li class='titles Done'>Done</li>" +
                "<li class='titles Tasks'>Tasks</li></ul>"
            data.forEach(function (result) {
                list.innerHTML += "<form><ul class='container'><li class='task' >" +
                    "<label class='container'><input id='completed' type='checkbox' name='completed' data-id='" + result.id + "'> <span class='checkmark'></span></label>" +
                    "<input id='task' type='text' name='task' value='" + result.task + "'>" +
                    "<input class='button' id='update' type='submit' data-task='" + result.task + "' data-id='" + result.id + "' name='update' value='Update'> " +
                    "<input class='button' id='delete' type='submit' name='delete' data-id='" + result.id + "' value='Delete'> " +
                    "</li></ul></form>"
            })

            list.innerHTML += "<form method='post' class='container'><input type='text' name='task' id='newTask' placeholder='Add new task'>" +
                "<input type='submit' name='Add' id='add' class='button' value='Add'></form> "

            document.getElementById('add').addEventListener('click', function (e) {
                e.preventDefault()
                e.stopPropagation()
                let request = {
                    task: document.getElementById('newTask').value
                }

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


            document.querySelectorAll('#update').forEach(item => {
                item.addEventListener('click', function (e) {
                    e.stopPropagation()
                    let request = {
                        id: e.target.dataset.id,
                        task: e.target.parentElement.childNodes[1].value
                    }

                    console.log(request)
                        fetch(API_PATH + '/update', {
                            method: 'POST', // your method
                            headers: {
                                'Content-Type': 'application/json' //REQUIRED
                            },
                            body: JSON.stringify(request)})// YOUR DATA
                            .then(
                                // location.reload()
                            )
                    })
            })

            document.querySelectorAll('#completed').forEach(item => {
                item.addEventListener('click', function (e) {
                    e.preventDefault()
                    e.stopPropagation()
                    let request = {
                        id: e.target.dataset.id
                    }

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
            })

            document.querySelectorAll('#delete').forEach(item => {
                item.addEventListener('click', function (e) {
                    e.preventDefault()
                    e.stopPropagation()
                    let request = {
                        id: e.target.dataset.id
                    }

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

})






