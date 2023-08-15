<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Unique Blog</title>

    <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .custom-card {
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #f8f9fa;
        }

        .center-text {
            text-align: center;
        }

        .arrow-buttons {
            font-size: 14px;
        }

        .pagination .page-item .page-link {
            padding: 0.3rem 0.5rem;
            font-size: 12px;
        }

        .card-title {
            color: #007bff;
            font-size: 20px;
            font-weight: bold;
        }

        .card-text {
            color: #333;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0069d9;
            border-color: #0062cc;
        }
    </style>
</head>
<body>
    <div class="container">
        @auth
            <p class="center-text mt-4">Congrats, you're logged in!</p>
            <form action="/logout" method="POST">
                @csrf
                <button class="btn btn-primary arrow-buttons">Log Out</button>
            </form>
            <div class="card my-4 custom-card">
                <div class="card-body">
                    <h2 class="card-title center-text">Create a New Post</h2>
                    <form action="/create-post" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="title" class="form-control" placeholder="Post Title">
                        </div>
                        <div class="form-group">
                            <textarea name="body" cols="30" rows="5" class="form-control" placeholder="Body Content..."></textarea>
                        </div>
                        <button class="btn btn-primary arrow-buttons">Save Post</button>
                    </form>
                </div>
            </div>
            <div class="card my-4 custom-card">
                <h2 class="center-text">All Posts</h2>
                @foreach($posts as $post)
                    @if(!$post->deleted_at) <!-- Only display posts that are not deleted -->
                        <div class="card my-3">
                            <div class="card-body">
                                <h3 class="card-title">{{$post['title']}} by {{$post->user->name}}</h3>
                                <p class="card-text">{{$post['body']}}</p>
                                <p><a href="/edit-post/{{$post->id}}">Edit</a></p>
                                <form action="/delete-post/{{$post['id']}}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                        </div>
                    @endif
                @endforeach
                <!-- Pagination links -->
                <div class="pagination justify-content-center">
                    {{ $posts->links('pagination::bootstrap-4') }}
                </div>
            </div>
        @else
            <div class="card my-4 custom-card">
                <h1 class="center-text">Register</h1>
                <form action="/register" method="POST">
                    @csrf
                    <div class="form-group">
                        <input name="name" type="text" class="form-control" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <input name="email" type="text" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input name="password" type="password" class="form-control" placeholder="Password">
                    </div>
                    <button class="btn btn-primary arrow-buttons">Register</button>
                </form>
            </div>
            <div class="card my-4 custom-card">
                <h1 class="center-text">Login</h1>
                <form action="/login" method="POST">
                    @csrf
                    <div class="form-group">
                        <input name="loginname" type="text" class="form-control" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <input name="loginpassword" type="password" class="form-control" placeholder="Password">
                    </div>
                    <button class="btn btn-primary arrow-buttons">Login</button>
                </form>
            </div>
        @endauth
    </div>

    <!-- Add Bootstrap JS (Optional) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
