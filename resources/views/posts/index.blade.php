<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    {{-- <title>Bootstrap demo</title> --}}
</head>

<body>
    <div class="container">
        <h1>Hello, world!</h1>

        <a href="{{ route('posts.create') }}" class="btn btn-info m-2">Insert New !!</a>

        <table class="table table-dark table-striped table-hover table-bordered">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">controller</th>
                </tr>
            </thead>
            <tbody>
       
                @foreach ($posts as $index => $post)
                    <tr>
                        <th scope="row">{{$index + 1}}</th>
                        <td>{{$post->title}}</td>
                        <td>{{$post->body}}</td>
                        <td class="d-flex">
                            <a class="btn btn-success" href="{{ route('posts.edit', [$post->id]) }}">edit</a>
                            {{-- <a class="btn btn-danger" href="{{ route('posts.destroy' , [$post->id]) }}">delete</a> --}}
                            <form class="ms-3" action="{{ route('posts.destroy' , [$post->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</body>

</html>
