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
               <td><a href="{{route('show',['id' => $VegetableMarketDataModel->id])}}">查看</a></td>
               <td>
                 <form action="{{url('/VegetableMarketDataModel/delete',['id' => $VegetableMarketDataModel->id])}}" method="post">
                  <input class="btn btn-default" type="submit" value="刪除"/>
                  @method('delete')
                  @csrf
                 </form>
              </tr>          
            @endforeach
         </table> 
      </p>
    </main>
  </div>
@endsection
