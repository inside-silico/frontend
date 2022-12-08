@include('header')
@include('menu')



<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4 border-bottom">

    <h2>Dolar MEP 48hs</h2>
    <div class="table-responsive">
      <table class="table table-striped table-sm">
            <tr>
                <th>Ticker Pesos</td>
                <th>Bid Pesos</td>
                <th>Ask Pesos</td>
                <th>Last Pesos</td>
                <th>Ticker Dolar</td>
                <th>Bid Dolar</td>
                <th>Ask Dolar</td>
                <th>Last Dolar</td>
                <th>MEP Bid</td>
                <th>MEP Ask</td>
                <th>MEP Last</td>
                    
            </tr>

            <tbody id="vehicleList">
            </tbody>
      </table>
    </div>
  </main>
</div>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        // Fetch the initial table
        refreshTable();

        // Fetch every 5 seconds
        setInterval(refreshTable, 15000);
    });

    function refreshTable(){
        $.getJSON('{{ env('DEFIANT_ORDER_API') }}'+"/api/arg/mep", function(data) {
            var vehicleListData = '';
            $.each(data, function(key, value) {
                vehicleListData += '<tr id="rowVehicleStatus" class="">';
                vehicleListData += '<td>'+value.symbolARS+'</td>';
                vehicleListData += '<td>'+value.bidARS+'</td>';
                vehicleListData += '<td>'+value.askARS+'</td>';
                vehicleListData += '<td>'+value.lastARS+'</td>';

                vehicleListData += '<td>'+value.symbolUSD+'</td>';
                vehicleListData += '<td>'+value.bidUSD+'</td>';
                vehicleListData += '<td>'+value.askUSD+'</td>';
                vehicleListData += '<td>'+value.lastUSD+'</td>';

                vehicleListData += '<td>'+value.MEPbid+'</td>';
                vehicleListData += '<td>'+value.MEPask+'</td>';
                vehicleListData += '<td>'+value.MEPlast+'</td>';
                vehicleListData += '</tr>';     
            });

            // We use .html instead of .append here, to make sure we don't add the same
            // entries when the interval is ran for the n-th time.
            $('#vehicleList').html(vehicleListData);
        });
    }
</script>
<script src="js/script.js"></script>

@include('footer')
        
