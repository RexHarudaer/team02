<!DOCTYPE html>
<html>
<head>
    <title>蔬菜市場調查資料</title>
    <style>
        /* 全局樣式 */
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        h1 {
            color: #2e7d32;
            margin: 20px 0;
        }

        /* 表格樣式 */
        table {
            width: 90%;
            max-width: 1000px;
            border-collapse: collapse;
            margin: 20px 0;
            background-color: #fff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 12px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #4caf50;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #e1f5fe;
        }

        /* 圖片樣式 */
        img {
            width: 80px;
            height: auto;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <h1>蔬菜市場調查資料</h1>

    <table border="1">
        <thead>
            <tr>
                <th>年份</th>
                <th>種類</th>
                <th>分類</th>
                <th>作物圖片價格</th>
                <th>平均總價</th>
                <th>總產量</th>
                <th>市場</th>
                <th>平均價格</th>
                <th>產量</th>
            </tr>
        </thead>
        <tbody>
            @foreach ( $vegetablemarketdata as $vegetablemarketdata ) 
            <tr> 
                <td>{{$vegetablemarketdata->year}}</td>
                <td>{{$vegetablemarketdata->type}}</td> 
                <td>{{$vegetablemarketdata->cate}}</td> 
                <td>{{$vegetablemarketdata->plant_picture}}</td>
                <td>{{$vegetablemarketdata->total_average_price}}</td>
                <td>{{$vegetablemarketdata->total_yield}}</td >
                <td>{{$vegetablemarketdata->market}}</td>
                <td>{{$vegetablemarketdata->average_price}}</td>
                <td>{{$vegetablemarketdata->yield}}</td>
            @endforeach 
        </tbody>
    </table>
</body>
</html>
