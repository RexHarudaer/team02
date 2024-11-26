@extends('app')
@section('contents')
  <div class="content">
    <!-- Sidebar -->
    <!--<aside class="sidebar">
      <h2>側邊欄</h2>
      <ul>
        <li><a href="#">選項1</a></li>
        <li><a href="#">選項2</a></li>
        <li><a href="#">選項3</a></li>
      </ul>
    </aside>-->

    <!-- Main Content -->
    
    <main class="main-content">
      <p>
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
      </p>
    </main>
  </div>
@endsection
