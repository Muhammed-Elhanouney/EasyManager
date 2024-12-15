<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="d-flex justify-content-center align-items-center">
            <h1>Insert Post !!</h1>
        </div>
        <div class="d-flex justify-content-center align-items-center ">
            <form action="{{ route('posts.store') }}" method="post" class="p-5 bg-dark rounded">
                @csrf
                <input class="form-control" type="text" name="title" placeholder="Type Your Title">
                @error('title')
                    <div class="alert alert-danger mt-3">{{ $message }}</div>
                @enderror
                <input class="form-control mt-3" type="text" name="body" placeholder="Type Your Body">
                @error('body')
                    <div class="alert alert-danger mt-3">{{ $message }}</div>
                @enderror
                <div class="d-grid gap-2 col-6 mx-auto">
                    <button class="btn btn-primary mt-3">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
