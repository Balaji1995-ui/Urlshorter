<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link   rel="stylesheet" href="{{url('assets/css/style.css')}}">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>URL Shorter</title>
</head>
<body>
    <form  action="{{url('/')}}" method="POST">

        <div class="form-group p-5 mt-6 bg-light rounded-1">
        <h1 class="text-center p-3 fa-1">URL SHORTER</h1>
@if(Session::has('errors'))

<script>

sweetAlert("Oops...", "{{$errors->first('link') }}", "error");
</script>


@endif
@if (Session::has('messages'))

<script>

sweetAlert("Oops...", "{{Session::get('messages')}}", "error");
</script>


@endif
@if (Session::has('link'))

<h3 class="error text-center"><a href="{{url(Session::get('link'))}}">{{url(Session::get('link'))}}</a> is your short URL</h3>
@endif
        <input name="link" class="form-control" placeholder="Enter the URL Here..."/>

@csrf
    </div>
    </form>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
