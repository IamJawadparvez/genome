<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
        
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
        
        <style type="text/css">
        
        body{
        background-color: #35abdf;
        }
        .domain-search {
        margin: 0;
        padding:206px 0;
        }
        .bg-pblue {
        background-color: #35abdf;
        }
        .domain-search .form-title {
        margin-top: 0;
        margin-bottom: 2px;
        color: #fff;
        font-family: "Poppins", sans-serif;
        font-weight: 100;
        }
        .domain-search p {
        color: #B0E7FF;
        margin: 0;
        }
        .domain-search .input-group {
        -webkit-box-shadow: 0px 4px 18px 0px rgba(0, 0, 0, 0.1);
        box-shadow: 0px 4px 18px 0px rgba(0, 0, 0, 0.1);
        }
        .domain-search .input-group-addon {
        border: none;
        }
        .domain-search .form-title strong {
        display: block;
        }
        .domain-search .form-control {
        height: 60px;
        border-radius: 0;
        border: none;
        }
        .domain-search .form-control:focus {
        box-shadow: 0px 0px 0px 0px #ffffff !important;
        }
        .input-group .input-group-addon [type="submit"], .input-group .input-group-addon button {
        border: none;
        border-radius: 0;
        }
        .domain-search .btn {
        padding: 0 54px;
        line-height: 60px;
        }
        .btn-primary {
        padding: 0 28px;
        line-height: 54px;
        background: #ff6726;
        color: #fff;
        }
        .btn-primary:hover {
        color: #fff;
        background-color: #286090;
        border-color: #204d74;
        }
        .domain-search .input-group + p {
        color: #fff;
        font-size: 15px;
        font-family: "Poppins", sans-serif;
        font-weight: 100;
        margin-top: 15px;
        margin-bottom: 0;
        }
        .domain-search .input-group + p strong {
        margin-right: 40px;
        }
        .img-style{
        margin-top: -15px;
        }
        .ui-menu .ui-menu-item{
        padding-left: 40px;
        padding-right: 20px;
        padding-bottom: 10px;
        padding-top: 10px;
        font-size: 15px;
        }
        .latest-stories-item-1 a{
        color: #fff;
        }
        .search-button{
        height: 61px;
        border: none;
        }
        </style>
    </head>
    <body class="antialiased">
        <form class="row domain-search bg-pblue">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <h2 class="form-title">
                        <img alt="HGNC - HUGO Gene Nomenclature Committee" src="{{asset('logo.svg')}}" class="img-style"> </h2>
                    </div>
                    <div class="col-md-9 d-flex">
                        <form method="get" action="{{route('advanced-search')}}">
                            <input class="form-control" required  id="autosearch" name="search" type="text" placeholder="   Search By Symbol Name...">
                            <input type="submit" value="Search" class="btn btn-primary search-button">
                        </form>
                    </div>
                </div>
            </div>
        </form>
        <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
        <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <script type="text/javascript">
        // CSRF Token
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        $(document).ready(function(){
        
        $( "#autosearch" ).autocomplete({
        source: function( request, response ) {
        // Fetch data
        $.ajax({
        url:"{{route('autosearch')}}",
        type: 'post',
        dataType: "json",
        data: {
        _token: CSRF_TOKEN,
        search: request.term
        },
        success: function( data ) {
        response( data );
        }
        });
        },
        select: function (event, ui) {
        // Set selection
        //console.log(ui);
        //$('#autosearch').val(ui.item.label); // display the selected text
         window.location.href= "advanced-search?symbol="+ui.item.label;
        return false;
        }
        });
        });
        </script>
    </body>
</html>