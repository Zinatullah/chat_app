<?php
session_start();
header('Content-Type: text/html; charset=utf-8');
include("./../../db/connection.php");
include("./../../db/functions.php");

$username = $_SESSION['user_id'];

$query = "SELECT * FROM `chat`";
$result = mysqli_query($con, $query);
$data = $result->fetch_all();

?>


<!doctype html>
<html lang="ar" dir="rtl" data-bs-theme="auto">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.118.2">
    <title>Secretary</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/dashboard-rtl/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

    <link href="./../assets/bootstrap.rtl.min.css" rel="stylesheet">
    <link rel="apple-touch-icon" href="/docs/5.3/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="../../images/favicon.png">
    <link href="./../assets/bootstrap-icons.min.css" rel="stylesheet">
    <link href="./../assets/dashboard.rtl.css" rel="stylesheet">
</head>

<body style="font-family: calibri !important; background-color: #eee;">
    <section style="background-color: #eee;">
        <div class="container py-5">

            <div class="row d-flex justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-6">

                    <div class="card" id="chat1" style="border-radius: 15px;">
                        <div class="card-header d-flex justify-content-between align-items-center p-3 bg-info text-white border-bottom-0" style="border-top-left-radius: 15px; border-top-right-radius: 15px;">
                            <i class="fas fa-angle-left"></i>
                            <p class="mb-0 fw-bold">Live chat</p>
                            <i class="fas fa-times"></i>
                        </div>
                        <div class="card-body">

                            <?php foreach ($data as $element) { ?>
                                <?php if ($element[1] == $username) { ?>
                                    <div class="d-flex flex-row justify-content-start mb-1">
                                        <svg style="margin-top: 15px" width="20" height="20" viewBox="-0.125 0 2.5 2.5" xmlns="http://www.w3.org/2000/svg">
                                            <path fill="#2ca9bc" d="M0.75 1.625h0.75a0.625 0.625 0 0 1 0.625 0.625 0.125 0.125 0 0 1 -0.125 0.125H0.25a0.125 0.125 0 0 1 -0.125 -0.125 0.625 0.625 0 0 1 0.625 -0.625Z" />
                                            <path d="M2.125 2.25h0a0.125 0.125 0 0 1 -0.125 0.125H0.25a0.125 0.125 0 0 1 -0.125 -0.125h0a0.625 0.625 0 0 1 0.625 -0.625h0.75a0.625 0.625 0 0 1 0.625 0.625ZM1.125 0.125a0.5 0.5 0 1 0 0.5 0.5 0.5 0.5 0 0 0 -0.5 -0.5Z" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.25" />
                                        </svg>
                                        <div class="p-3 ms-3" style="border-radius: 15px; background-color: rgba(57, 192, 237,.2);">
                                            <p class="small mb-0"><?php echo $element[2] ?></p>
                                        </div>
                                        <a href="./remove.php?id=<?php echo $element[0] ?>">
                                            <svg fill="red" width="20px" height="20px" viewBox="-0.8 0 12.8 12.8" xmlns="http://www.w3.org/2000/svg" style="margin-top: 15px; margin-right: 5px; cursor: pointer">
                                                <path d="M3.2 10.4q-0.35 0 -0.575 -0.225t-0.225 -0.575V4.4H1.6v-1.2h2V2.4q0 -0.35 0.225 -0.575t0.575 -0.225h2.4q0.35 0 0.575 0.225t0.225 0.575v0.8h2v1.2h-0.8v5.2q0 0.35 -0.225 0.575t-0.575 0.225H3.2Zm3.2 -6.8v-0.8h-1.6v0.8h1.6Zm-1.4 5.6V4.8h-1.4v4.4h1.4Zm2.6 0V4.8h-1.4v4.4h1.4Z" />
                                            </svg>
                                        </a>
                                    </div>
                                <?php } else if ($element[1] != $username) { ?>
                                    <div class="d-flex flex-row justify-content-end mb-4">
                                        <div class="p-3 me-3 border" style="border-radius: 15px; background-color: #fbfbfb;">
                                            <p class="small mb-0"><?php echo $element[2] ?></p>
                                        </div>
                                        <svg style="margin-top: 15px" width="20" height="20" viewBox="-0.125 0 2.5 2.5" xmlns="http://www.w3.org/2000/svg">
                                            <path fill="#2ca9bc" d="M0.75 1.625h0.75a0.625 0.625 0 0 1 0.625 0.625 0.125 0.125 0 0 1 -0.125 0.125H0.25a0.125 0.125 0 0 1 -0.125 -0.125 0.625 0.625 0 0 1 0.625 -0.625Z" />
                                            <path d="M2.125 2.25h0a0.125 0.125 0 0 1 -0.125 0.125H0.25a0.125 0.125 0 0 1 -0.125 -0.125h0a0.625 0.625 0 0 1 0.625 -0.625h0.75a0.625 0.625 0 0 1 0.625 0.625ZM1.125 0.125a0.5 0.5 0 1 0 0.5 0.5 0.5 0.5 0 0 0 -0.5 -0.5Z" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.25" />
                                        </svg>

                                    </div>
                            <?php }
                            } ?>


                            <div class="form-outline">
                                <form action="./chat.php" method="post">
                                    <textarea class="form-control" name='message' id="textAreaExample" rows="1"></textarea>
                                    <br>
                                    <div class="row gap-1">
                                        <div class="col-lg-2 col-sm-2 "></div>
                                        <button class="btn btn-primary col-lg-4 col-sm-4 col-md-4 btn-lg my-3" name='submit'>Send</button>
                                        <button name="clear" class="btn btn-danger col-lg-4 col-sm-4 col-md-4 btn-lg my-3" name='submit'>Clear Chat</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>
    <script>
        // Timeout in milliseconds
        var timeout = 30000; // 5 seconds

        // Function to refresh the page after the timeout
        function refreshAfterTimeout() {
            // Reload the page
            location.reload();
        }

        // Set the timeout
        setTimeout(refreshAfterTimeout, timeout);
    </script>

</body>

</html>