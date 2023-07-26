<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>SPP Payment Admin</title>
</head>

<body
    style="background: rgb(223,37,232); background: linear-gradient(90deg, rgba(223,37,232,1) 0%, rgba(0,212,255,1) 100%);">
    >

    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-lg-6 col-md-8 mt-5">
                <div class="card py-4 px-4">
                    <div class="card-body">
                        <h3 class="card-title text-center  mb-5">Sign in</h3>
                        <main class="form-signin">
                            <form action="/login" method="POST">
                                @csrf
                                <div class="form-floating mb-4">
                                    <input type="text" name="username" class="form-control" id="username"
                                        placeholder="Username" required autofocus>
                                    <label for="username">Username</label>
                                </div>
                                <div class="form-floating mb-4">
                                    <input type="password" name="password" class="form-control " id="password"
                                        placeholder="Password" required>
                                    <label for="password">Password</label>
                                </div>

                                <div class="border-top"></div>

                                <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Login</button>
                            </form>
                        </main>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    -->
</body>

</html>
