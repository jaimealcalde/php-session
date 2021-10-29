<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <!-- Custom styles -->
    <link href="./assets/css/index.css" rel="stylesheet">

    <title>LogIn</title>
</head>

<body>
    <header>
        <div>
            <img src="./assets/images/logo.png" class="logo" alt="logo">
        </div>
    </header>
    <main class="form-signin ma mw">
        <form action="./modules/login.php" method="POST" class="text-center">
            <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

            <div class="form-floating">
                <input name="email" type="email" class="form-control" id="email" placeholder="name@example.com"
                    data-bs-toggle="tooltip" data-bs-html="true" title="assettto@simracing.club">
                <label for="email">Email address</label>
            </div>
            <div class="form-floating">
                <input name="pass" type="password" class="form-control" id="password" placeholder="Password"
                    title="Simracing">
                <label for="password">Password</label>
            </div>

            <!-- <?= ($alert) ? "<div class='alert alert-$alert[type] role='alert'>$alert[text]</div>" : "" ?> -->


            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>

        </form>

    </main>
    <footer class="text-center">
        <p class="mt-5 mb-3 text-muted">&copy; 2021 Copyrigth Simracing</p>
    </footer>

</body>

</html>