<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Layout</title>
        <link rel="stylesheet" href="/assets/css/bootstrap.css" />
        <link rel="stylesheet" href="/assets/css/shoppingcart.css" />
    </head>
    <body>
        <div class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="/">Shopping Cart</a>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <?= $content ?>
            </div>
        </div>

        <script src="/assets/js/jquery-1.11.3.js"></script>
        <script src="/assets/js/bootstrap.js"></script>
    </body>
</html>
