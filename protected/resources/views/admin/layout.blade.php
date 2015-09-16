<!DOCTYPE html>
<html ng-app="app">

    <head>
        <title>LineXTI - Desenvolvimento</title>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{ URL::to('assets/images/favicon.png') }}" rel="icon">
        <link rel="stylesheet" type="text/css" href="{{ URL::to('assets/css/angular/bootstrap.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ URL::to('assets/css/style-angular.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ URL::to('assets/js/notify/angular-notify.min.css') }}">

        <div id="urlbase" data-base-url="{{ URL::to('/') }}"></div>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>
        <div class="container">            

            <div ng-include="'{{ URL::to('assets/js/angular/views/nav.html') }}'"></div>          
            <div ng-view></div>

        </div>    

        
        <!-- AngularJS -->
        <script src="{{ URL::to('assets/js/angular/angular.min.js') }}"></script>
        <script src="{{ URL::to('assets/js/angular/angular-route.min.js') }}"></script>
        <script src="{{ URL::to('assets/js/angular/angular-resource.min.js') }}"></script>

        <script src="{{ URL::to('assets/js/notify/angular-notify.min.js') }}"></script>
        
        
         <!-- jQuery -->
        <script src="{{ URL::to('assets/js/angular/jquery-2.1.4.min.js') }}"></script>
        <script>var $jQuery = jQuery.noConflict();</script>

        <script src="{{ URL::to('assets/js/bootstrap.min.js') }}"></script>

        <script src="{{ URL::to('assets/js/angular/app.functions.js') }}"></script>
        <script src="{{ URL::to('assets/js/angular/app.js') }}"></script>
        <script src="{{ URL::to('assets/js/angular/app.controllers.js') }}"></script>
        <script src="{{ URL::to('assets/js/angular/app.services.js') }}"></script>
        <script src="{{ URL::to('assets/js/angular/app.directives.js') }}"></script>

    </body>
</html>
