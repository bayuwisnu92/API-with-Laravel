<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>API Documentation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        
        ul.hidden, ul.tampil {
            transition: all 0.3s ease;
        }
        .nav-link.active {
            font-weight: bold;
        }
        .card {
            margin-bottom: 1rem;
        }
        a {
            color: black;
            text-decoration: none;
        }
        .hidden {
            display: none;
        }
        .tampil {
            display: block;
            transition: 0.5s
        }
        .list-group-item {
            cursor: pointer;
        }
        .list-group-item:hover{
            color:white;
            background-color: black;
            transition: 0.9s
        }
        .spa{
            color: brown
        }
    </style>
</head>
<body class="bg-dark">
    <nav class="navbar navbar-danger navbar-expand-lg bg-danger">
        <div class="container">
            <a class="navbar-brand" href="#">API Documentation</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="postsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Posts
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="postsDropdown">
                            <li><a class="dropdown-item" href="http://127.0.0.1:8000/api/posts">GET</a></li>
                            <li><a class="dropdown-item" href="http://127.0.0.1:8000/api/posts">POST</a></li>
                            <li><a class="dropdown-item" href="http://127.0.0.1:8000/api/posts">PUT</a></li>
                            <li><a class="dropdown-item" href="http://127.0.0.1:8000/api/posts">DELETE</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="usersDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Users
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="usersDropdown">
                            <li><a class="dropdown-item" href="http://127.0.0.1:8000/api/users">GET</a></li>
                            <li><a class="dropdown-item" href="http://127.0.0.1:8000/api/users">POST</a></li>
                            <li><a class="dropdown-item" href="http://127.0.0.1:8000/api/users">PUT</a></li>
                            <li><a class="dropdown-item" href="http://127.0.0.1:8000/api/users">DELETE</a></li>
                            <li><a class="dropdown-item" href="http://127.0.0.1:8000/api/login">LOGIN</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row mt-5">
            <div class="col-12" id="posts-get">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title"><span class="spa">#</span>Posts Endpoints</h2>
                        <ul class="list-group">
                            <li class="list-group-item" id="tombol1" onclick="show('masuk1')">
                                <span class="btn btn-sm btn-primary badge">GET</span>
                                <p class="d-inline">http://127.0.0.1:8000/api/posts</p>
                            </li>
                            <ul id="masuk1" class="hidden">
                                <li>
                                    <p>Returns a list of servers available to receive content.</p>
                                    <p>Do not call this function more than once every 10 seconds. If you have a lot of small files to upload, keep the same servers for several files before calling the function again.</p>
                                    <p><strong>Parameters:</strong></p>
                                    <p>optional zone - Specifies a zone (eu for Europe, or na for North America). If no server is found for your zone, returns servers from other zones.</p>
                                    <p><strong>Curl Example:</strong></p>
                                    <p class="btn badge btn-sm btn-light text-black" id="tom" onclick="copyText()">copy code?</p>
                                    {{-- <span id="copySuccess hidden" class="copy-success">Text copied!</span> --}}
                                    <code >curl -X GET '<span id="textToCopy">http://127.0.0.1:8000/api/posts</span>'</code>
                                    <p><strong>JavaScript Example:</strong></p>
                                    <code>fetch('http://127.0.0.1:8000/api/posts', { method: 'GET' })</code>
                                    <p>Response Example:</p>
                                    <pre>{
                                            {
id: 1,
title: "Enim qui fuga animi error ducimus dolor qui.",
content: "Qui aut vitae excepturi accusantium. Perspiciatis possimus ea at ducimus enim nostrum. Ea similique molestiae occaecati est dolore illum dolor magni.",
user_id: 5,
category_id: 3,
gambar: "Vel nesciunt excepturi reprehenderit et consequuntur.",
created_at: "2024-07-24T04:31:05.000000Z",
updated_at: "2024-07-24T04:31:05.000000Z",
user: {
id: 5,
name: "Prof. Rhiannon Hintz",
email: "dparker@example.com",
email_verified_at: "2024-07-24T04:31:05.000000Z",
profil: "Fugit incidunt praesentium dolorem sunt est facilis iusto.",
created_at: "2024-07-24T04:31:05.000000Z",
updated_at: "2024-07-24T04:31:05.000000Z"
},
category: {
id: 3,
name: "web design",
slug: "web-design",
created_at: "2024-07-24T04:31:05.000000Z",
updated_at: "2024-07-24T04:31:05.000000Z"
}
},
                                        }</pre>
                                </li>
                            </ul>
                            <li class="list-group-item" id="tombol2" onclick="show('masuk2')">
                                <span class="btn btn-sm btn-secondary badge">POST</span>
                                <p class="d-inline">http://127.0.0.1:8000/api/posts</p>
                            </li>
                            <ul id="masuk2" class="hidden">
                                <li>
                                    <p>Returns a list of servers available to receive content.</p>
                                    <p>Do not call this function more than once every 10 seconds. If you have a lot of small files to upload, keep the same servers for several files before calling the function again.</p>
                                    <p><strong>Parameters:</strong></p>
                                    <p>optional zone - Specifies a zone (eu for Europe, or na for North America). If no server is found for your zone, returns servers from other zones.</p>
                                    <p><strong>Curl Example:</strong></p>
                                    <code>curl -X GET 'http://127.0.0.1:8000/api/posts'</code>
                                    <p><strong>JavaScript Example:</strong></p>
                                    <code>fetch('http://127.0.0.1:8000/api/posts', { method: 'GET' })</code>
                                    <p>Response Example:</p>
                                    <pre>{
                                            "status": "ok",
                                            "data": {
                                                "servers": [
                                                    {"name": "store1", "zone": "eu"},
                                                    {"name": "store3", "zone": "na"}
                                                ]
                                            }
                                        }</pre>
                                </li>
                            </ul>
                            <li class="list-group-item" id="tombol3" onclick="show('masuk3')">
                                <span class="btn btn-sm btn-success badge">PUT</span>
                                <p class="d-inline">http://127.0.0.1:8000/api/posts/{id}</p>
                            </li>
                            <ul id="masuk3" class="hidden">
                                <li>
                                    <p>Returns a list of servers available to receive content.</p>
                                    <p>Do not call this function more than once every 10 seconds. If you have a lot of small files to upload, keep the same servers for several files before calling the function again.</p>
                                    <p><strong>Parameters:</strong></p>
                                    <p>optional zone - Specifies a zone (eu for Europe, or na for North America). If no server is found for your zone, returns servers from other zones.</p>
                                    <p><strong>Curl Example:</strong></p>
                                    <code>curl -X GET 'http://127.0.0.1:8000/api/posts'</code>
                                    <p><strong>JavaScript Example:</strong></p>
                                    <code>fetch('http://127.0.0.1:8000/api/posts', { method: 'GET' })</code>
                                    <p>Response Example:</p>
                                    <pre>{
                                        "status": "ok",
                                          "data": {
                                              "servers": [
                                                  {"name": "store1", "zone": "eu"},
                                                  {"name": "store3", "zone": "na"}
                                              ]
                                          }
                                      }</pre>                                    
                                </li>
                            </ul>
                            <li class="list-group-item" id="tombol4" onclick="show('masuk4')">
                                <span class="btn btn-sm btn-danger badge">DELETE</span>
                                <p class="d-inline">http://127.0.0.1:8000/api/posts/{id}</p>
                            </li>
                            <ul id="masuk4" class="hidden">
                                <li>
                                    <p>Returns a list of servers available to receive content.</p>
                                    <p>Do not call this function more than once every 10 seconds. If you have a lot of small files to upload, keep the same servers for several files before calling the function again.</p>
                                    <p><strong>Parameters:</strong></p>
                                    <p>optional zone - Specifies a zone (eu for Europe, or na for North America). If no server is found for your zone, returns servers from other zones.</p>
                                    <p><strong>Curl Example:</strong></p>
                                    <code>curl -X GET 'http://127.0.0.1:8000/api/posts'</code>
                                    <p><strong>JavaScript Example:</strong></p>
                                    <code>fetch('http://127.0.0.1:8000/api/posts', { method: 'GET' })</code>
                                    <p>Response Example:</p>
                                    <pre>{
                                            "status": "ok",
                                            "data": {
                                                "servers": [
                                                    {"name": "store1", "zone": "eu"},
                                                    {"name": "store3", "zone": "na"}
                                                ]
                                            }
                                        }</pre>
                                </li>
                            </ul>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-12" id="users-get">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title"><span class="spa">#</span>Users Endpoints</h2>
                        <ul class="list-group">
                            <li class="list-group-item" id="tombol5" onclick="show('masuk5')">
                                <span class="btn btn-sm btn-primary badge">GET</span>
                                <p class="d-inline">http://127.0.0.1:8000/api/users</p>
                            </li>
                            <ul id="masuk5" class="hidden">
                                <li>
                                    <p>Returns a list of servers available to receive content.</p>
                                    <p>Do not call this function more than once every 10 seconds. If you have a lot of small files to upload, keep the same servers for several files before calling the function again.</p>
                                    <p><strong>Parameters:</strong></p>
                                    <p>optional zone - Specifies a zone (eu for Europe, or na for North America). If no server is found for your zone, returns servers from other zones.</p>
                                    <p><strong>Curl Example:</strong></p>
                                    <code>curl -X GET 'http://127.0.0.1:8000/api/posts'</code>
                                    <p><strong>JavaScript Example:</strong></p>
                                    <code>fetch('http://127.0.0.1:8000/api/posts', { method: 'GET' })</code>
                                    <p>Response Example:</p>
                                    <pre>{
                                            "status": "ok",
                                            "data": {
                                                "servers": [
                                                    {"name": "store1", "zone": "eu"},
                                                    {"name": "store3", "zone": "na"}
                                                ]
                                            }
                                        }</pre>
                                </li>
                            </ul>
                            <li class="list-group-item" id="tombol6" onclick="show('masuk6')">
                                <span class="btn btn-sm btn-secondary badge">POST</span>
                                <p class="d-inline">http://127.0.0.1:8000/api/users</p>
                            </li>
                            <ul id="masuk6" class="hidden">
                                <li>
                                    <p>Returns a list of servers available to receive content.</p>
                                    <p>Do not call this function more than once every 10 seconds. If you have a lot of small files to upload, keep the same servers for several files before calling the function again.</p>
                                    <p><strong>Parameters:</strong></p>
                                    <p>optional zone - Specifies a zone (eu for Europe, or na for North America). If no server is found for your zone, returns servers from other zones.</p>
                                    <p><strong>Curl Example:</strong></p>
                                    <code>curl -X GET 'http://127.0.0.1:8000/api/posts'</code>
                                    <p><strong>JavaScript Example:</strong></p>
                                    <code>fetch('http://127.0.0.1:8000/api/posts', { method: 'GET' })</code>
                                    <p>Response Example:</p>
                                    <pre>{
                                            "status": "ok",
                                            "data": {
                                                "servers": [
                                                    {"name": "store1", "zone": "eu"},
                                                    {"name": "store3", "zone": "na"}
                                                ]
                                            }
                                        }</pre>
                                </li>
                            </ul>
                            <li class="list-group-item" id="tombol7" onclick="show('masuk7')">
                                <span class="btn btn-sm btn-success badge">PUT</span>
                                <p class="d-inline">http://127.0.0.1:8000/api/users/{id}</p>
                            </li>
                            <ul id="masuk7" class="hidden">
                                <li>
                                    <p>Returns a list of servers available to receive content.</p>
                                    <p>Do not call this function more than once every 10 seconds. If you have a lot of small files to upload, keep the same servers for several files before calling the function again.</p>
                                    <p><strong>Parameters:</strong></p>
                                    <p>optional zone - Specifies a zone (eu for Europe, or na for North America). If no server is found for your zone, returns servers from other zones.</p>
                                    <p><strong>Curl Example:</strong></p>
                                    <code>curl -X GET 'http://127.0.0.1:8000/api/posts'</code>
                                    <p><strong>JavaScript Example:</strong></p>
                                    <code>fetch('http://127.0.0.1:8000/api/posts', { method: 'GET' })</code>
                                    <p>Response Example:</p>
                                    <pre>{
                                            "status": "ok",
                                            "data": {
                                                "servers": [
                                                    {"name": "store1", "zone": "eu"},
                                                    {"name": "store3", "zone": "na"}
                                                ]
                                            }
                                        }</pre>
                                </li>
                            </ul>
                            <li class="list-group-item" id="tombol8" onclick="show('masuk8')">
                                <span class="btn btn-sm btn-danger badge">DELETE</span>
                                <p class="d-inline">http://127.0.0.1:8000/api/users/{id}</p>
                            </li>
                            <ul id="masuk8" class="hidden">
                                <li>
                                    <p>Returns a list of servers available to receive content.</p>
                                    <p>Do not call this function more than once every 10 seconds. If you have a lot of small files to upload, keep the same servers for several files before calling the function again.</p>
                                    <p><strong>Parameters:</strong></p>
                                    <p>optional zone - Specifies a zone (eu for Europe, or na for North America). If no server is found for your zone, returns servers from other zones.</p>
                                    <p><strong>Curl Example:</strong></p>
                                    <code>curl -X GET 'http://127.0.0.1:8000/api/posts'</code>
                                    <p><strong>JavaScript Example:</strong></p>
                                    <code>fetch('http://127.0.0.1:8000/api/posts', { method: 'GET' })</code>
                                    <p>Response Example:</p>
                                    <pre>{
                                            "status": "ok",
                                            "data": {
                                                "servers": [
                                                    {"name": "store1", "zone": "eu"},
                                                    {"name": "store3", "zone": "na"}
                                                ]
                                            }
                                        }</pre>
                            </ul>
                            <li class="list-group-item" id="tombol9" onclick="show('masuk9')">
                                <span class="btn btn-sm btn-warning badge">LOGIN</span>
                                <p class="d-inline">http://127.0.0.1:8000/api/login</p>
                            </li>
                            <ul id="masuk9" class="hidden">
                                <li>
                                    <p>Returns a list of servers available to receive content.</p>
                                    <p>Do not call this function more than once every 10 seconds. If you have a lot of small files to upload, keep the same servers for several files before calling the function again.</p>
                                    <p><strong>Parameters:</strong></p>
                                    <p>optional zone - Specifies a zone (eu for Europe, or na for North America). If no server is found for your zone, returns servers from other zones.</p>
                                    <p><strong>Curl Example:</strong></p>
                                    <code>curl -X GET 'http://127.0.0.1:8000/api/posts'</code>
                                    <p><strong>JavaScript Example:</strong></p>
                                    <code>fetch('http://127.0.0.1:8000/api/posts', { method: 'GET' })</code>
                                    <p>Response Example:</p>
                                    <pre>{
                                            "status": "ok",
                                            "data": {
                                                "servers": [
                                                    {"name": "store1", "zone": "eu"},
                                                    {"name": "store3", "zone": "na"}
                                                ]
                                            }
                                        }</pre>
                                </li>
                            </ul>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        function show(id) {
            const list = document.getElementById(id);
            if (list.classList.contains('hidden')) {
                list.classList.add('tampil');
                list.classList.remove('hidden');
                list.style.backgroundColor = 'black'
                list.style.color = 'white'
                
                
            } else {
                list.classList.add('hidden');
                list.classList.remove('tampil');
                 list.style.backgroundColor = 'white'
            }
        }
        function copyText() {
            const textToCopy = document.getElementById("textToCopy").innerText;
            const tombol = document.getElementById('tom')
            navigator.clipboard.writeText(textToCopy)
            tombol.innerHTML = 'copy success'
            tombol.backgroundColor = 'black'

            setInterval(() => {
                tombol.innerHTML = 'copy code?'
            }, 2000);

            
        }
    </script>
</body>
</html>
