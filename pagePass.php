<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create Pass</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>

<body class="bg-dark text-light">
    <div class="container mt-5">
        <h1 class="text-success text-center display-3 fw-bold">Ciao! ecco la password che mi hai chiesto!</h1>

        <div class="d-flex align-items-center justify-content-center mt-5">

            <span class="display-5 fw-semibold">

                <?php
                session_start();

                if (!empty($_SESSION['password'])) {
                    echo $_SESSION['password'];


                }
                ?>
            </span>

        </div>
        <div class="d-flex align-items-center justify-content-center flex-column">
            <h2 class="text-danger text-center m-5">PS. mi raccomando! non farla vedere a nessuno</h2>

            <form action="index.php">
                <button class="btn btn-light m-auto">torna alla home page</button>
            </form>

        </div>
    </div>







</body>

</html>