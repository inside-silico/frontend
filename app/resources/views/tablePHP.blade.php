@include('header')
@include('menu')

<div class="wrapper">
    <div >
        <div >
            <div class="box-area" >
                <h2 style="color: #2b2626;text-align: center;margin-left: 260px;">Cotizaciones Monedas</h2>
        </div>
    </div>
    <div>
        <table >
            <tr>
             <th>Moneda</td>
              <th>Compra</td>
              <th>Venta</td>
            </tr>
            <?PHP
            $myData = file_get_contents(env('DEFIANT_ORDER_API')."/dolarHoy");
            $myObject = json_decode($myData);
            foreach($myObject as $item){
            ?>
          <tr>
            <td><?PHP echo $item->moneda; ?></td>
            <td><?PHP echo $item->compra; ?></td>
            <td><?PHP echo $item->venta; ?></td>
          </tr>
         <?PHP
           }
         ?>
        </table>
    </div>
</div>

@include('footer')