<!DOCTYPE html>
<html>
    <head>
        <title>Action interdite.</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                color: #333;
                display: table;
                font-weight: 100;
                font-family: 'Lato', sans-serif;
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .description {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 72px;
                margin-bottom: 40px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="description">
                <div class="title">Vous n'etes pas autorises à effectuer cette action.</div>
                <div><a class="title" href="#" onclick="window.history.back();" style="text-decoration:none; color:#333">< retour</a></div>
            </div>
        </div>
    </body>
</html>
