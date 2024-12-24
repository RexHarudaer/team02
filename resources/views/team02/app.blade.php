<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', '蔬菜市場調查資料')</title>
    <style>
        /* 全局樣式 */
        body {
            font-family: Arial, sans-serif;
            background-image: url("Iamge/flo.jpg"); 
            background-size: 100%;
            background-position: center;
            color: #cfbf43;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        table {
            width: 90%;
            max-width: 1000px;
            border-collapse: collapse;
            margin: 20px 0;
            background-color: #f93c3c;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 12px;
            text-align: center;
            border-bottom: 1px solid #01e0f9;
        }

        th {
            background-color: #4c4caf;
            color: rgb(0, 0, 0);
        }

        tr:nth-child(even) {
            background-color: #4978f9;
        }

        tr:hover {
            background-color: #fefefe;  
        }
    </style>
    <style>
        /* 調整「市場」欄的寬度，並防止文字換行 */
        th:nth-child(7), td:nth-child(7) {
            min-width: 30px; /* 自行調整欄位寬度 */
            white-space: nowrap;
        }
    </style>
</head>
<body>
    {{-- 只在未設置 hideHeader 或 hideHeader 為 false 時載入 header --}}
    @if (!isset($hideHeader) || !$hideHeader)
        @include('team02.header')
    @endif

    <main>
        @yield('content')
    </main>
    @include('team02.footer')
</body>
</html>

