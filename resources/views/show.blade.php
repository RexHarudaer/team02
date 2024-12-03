@extends('app')
@section('contents')
    <!-- Main Content Area -->
  <div class="container">
    <!-- Sidebar -->
    <aside class="sidebar">
      <h2>側邊欄</h2>
      <ul>
        <li><a href="#">新增</a></li>
        <li><a href="#">刪除</a></li>
      </ul>
    </aside>
    <!-- Main Content -->
    
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
               <td><a href="{{route('show',['id' => $VegetableMarketDataModels->id])}}">查看</a></td>
              </tr>          
         </table> 
      </p>
    </main>
  </div>
@endsection
