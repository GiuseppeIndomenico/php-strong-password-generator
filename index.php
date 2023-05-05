<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>strong pass generator</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>

<body class="bg-dark text-light">
    <div class="container mt-5">
        <h1 class="text-danger text-center">PASS GENERATOR</h1>
        <form class="d-flex align-items-center justify-content-center mt-5" action="pagePass.php" method="get">
            <label class="m-2" for="numPass">Inserire la lunghezza della password qui: </label>
            <input class="w-50" placeholder="min:8 max:32" type="number" name="numPass" id="numPass" min="8" max="32">
            <button type="submit" class="btn btn-danger m-2">Genera Password</button>
        </form>

    </div>
</body>

</html>