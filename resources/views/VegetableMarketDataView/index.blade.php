<html>
    <head>
       <title> VegetableMarketData</title>>
    </head>
    <body>
        <h1> VegetableMarketDataModel </h1>
     <table border="1">
        @foreach ( $VegetableMarketDataModels as $VegetableMarketDataModel )
        <tr>
           <td> {{$VegetableMarketDataModel->year}} </td>
           <td> {{$VegetableMarketDataModel->type }} </td>
           <td> {{$VegetableMarketDataModel->cate }} </td>
           <td> {{$VegetableMarketDataModel->plant_picture}} </td>
           <td> {{$VegetableMarketDataModel->total_average_price }} </td>
           <td> {{$VegetableMarketDataModel->total_yield }} </td>
           <td> {{$VegetableMarketDataModel->market }} </td>
           <td> {{$VegetableMarketDataModel->average_price }} </td>
           <td> {{$VegetableMarketDataModel->yield }} </td>          
        </tr>          
        @endforeach
     </table> 
    </body>

</html>