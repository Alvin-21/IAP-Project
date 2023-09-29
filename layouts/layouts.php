<?php

class layouts
{
    public function header()
    {
?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
            <title>IAP-Project</title>
        </head>

        <body class="container">
            <div>
                <header class="d-flex justify-content-center py-3">
                    <ul class="nav nav-pills">
                        <li class="nav-item"><a href="index.php" class="nav-link active" aria-current="page">Home</a></li>
                        <li class="nav-item"><a href="userDetails.php" class="nav-link">User Table</a></li>
                        <!-- <li class="nav-item"><a href="#" class="nav-link">Pricing</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">FAQs</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">About</a></li> -->
                    </ul>
                </header>
            </div>
        <?php
    }

    public function footer()
    {
        ?>
            <footer class="pt-3 mt-4 text-body-secondary border-top">
                Copyright &copy; <?php print "IAP-Project" . " " . date("Y"); ?>
            </footer>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        </body>

        </html>

<?php
    }
}
