@extends('app')
@section('contents')
    <!-- Main Content Area -->
  
    <main class="main-content">
      <p>
        
         <table border="1">
          <tr>
            <th>年份</th>
            <th>種類</th>
            <th>作物</th>
            <th>產地價格(元/公斤)</th>
            <th>總平均價(元/公斤)</th>
            <th>總交易量(公噸)</th>
            <th>市場</th>
            <th>平均價(元/公斤)</th>
            <th>交易量(公噸)</th>
            <th>詳細</th>
          </tr>
           
            <tr>
               <td> {{$VegetableMarketDataModels->year}} </td>
               <td> {{$VegetableMarketDataModels->type }} </td>
               <td> {{$VegetableMarketDataModels->cate }} </td>
               <td> {{$VegetableMarketDataModels->plant_picture}} </td>
               <td> {{$VegetableMarketDataModels->total_average_price }} </td>
               <td> {{$VegetableMarketDataModels->total_yield }} </td>
               <td> {{$VegetableMarketDataModels->market }} </td>
               <td> {{$VegetableMarketDataModels->average_price }} </td>
               <td> {{$VegetableMarketDataModels->yield }} </td> 
               <td><a href="{{route('home')}}">返回</a></td>
              </tr>          
         </table> 
      </p>
    </main>
  </div>
@endsection
