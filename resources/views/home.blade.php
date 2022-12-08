@include('header')
@include('menu')

<style>
    .box-area h2 {
        text-transform: uppercase;
        font-size: 50px;
    }
    .box-area p {
        line-height: 2;
    }
    .box-area {
        width: 75%;
    }
    .section {
        display: grid;
        place-items: center;
        min-height: 100vh;
        text-align: center;
    }
</style>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4 border-bottom" style="text-align: center;">
    <div class="section">
        <div class="box-area">
            <h2 style="color: #2b2626;font-weight: 800;">Proyecto Silico</h2>
        </div>
    </div>
</main>

<script src="js/script.js"></script>
<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>

@include('footer')
