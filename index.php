<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Carputer</title>
        <meta name="description" content="Carputer Interface">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
        
        <div class="container-fluid">
            <h2>Car Stats</h2>
            <div class="row">
                <div class="col-xs-4">
                    <div class="well">
                        <div id="car-stat1">0</div>
                        <div class="caption">
                            RPM
                        </div>
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="well">
                        <div class="caption">
                            Speed
                        </div>
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="well">
                        <div class="caption">
                            Coolant Temp
                        </div>
                    </div>
                </div>
            </div>
            <h2>Music</h2>
            <div class="row">
                <div class="col-md-8">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Artist</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Song 1</td>
                                    <td>Band 1</td>
                                </tr>
                                <tr>
                                    <td>Song 2</td>
                                    <td>Band 1</td>
                                </tr>
                                <tr>
                                    <td>Song 3</td>
                                    <td>Band 2</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="well">
                        <button type="button" class="btn-default"><span class="glyphicon glyphicon-fast-backward"></span></button>
                        <button type="button" class="btn-primary">Play</button>
                        <button type="button" class="btn-default"><span class="glyphicon glyphicon-fast-forward"></span></button>
                    </div>
                </div>
            </div>
        </div>
        
        <script src="js/vendor/modernizr-3.5.0.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.0.min.js" integrity="sha256-JAW99MJVpJBGcbzEuXk4Az05s/XyDdBomFqNlM3ic+I=" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.2.0.min.js"><\/script>')</script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
        <script>
            window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date;
            ga('create','UA-XXXXX-Y','auto');ga('send','pageview')
        </script>
        <script src="https://www.google-analytics.com/analytics.js" async defer></script>
    </body>
</html>
