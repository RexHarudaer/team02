<!DOCTYPE html>
<html lang="{{app()->getLocale()}}">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewPort" content="width=device-width,inital-scale=1">
<title> @yield('title','Home page')</title>
<title>team 02</title>
  <link rel="stylesheet" href="styles.css">
  <style>
   /* 基本的页面重置 */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
/* 页眉样式 */
header {
  background-color: #407925;
  color: white;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 15px 30px;
}
header .logo h1 {
  font-size: 48px;
}

header nav ul {
  list-style-type: none;
  display: flex;
}

header nav ul li {
  margin-left: 20px;
}

header nav ul li a {
  color: white;
  text-decoration: none;
  font-size: 18px;
}

/* 容器样式 */
.container {
  display: flex;
  padding: 20px;

}
table {
    width: 100%;
    border-collapse: collapse; /* 去掉邊框間隙 */
    margin: 0 auto;
    background-color: #eef4ec;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}
th, td {
    padding: 12px 20px; /* 增加內邊距 */
    text-align: left;
    border: 1px solid #dbeed4; /* 邊框顏色 */
}
th {
    background-color: #3498db; /* 表頭背景顏色 */
    color: #fff; /* 表頭文字顏色 */
}
tr:nth-child(even) {
    background-color: #a8b4a7; /* 偶數行背景顏色 */
}

tr:hover {
    background-color: #5d665e; /* 滑鼠懸停顯示顏色 */
}
/* 侧边栏样式 */
.sidebar {
  width: 200px;
  background-color: #f4f4f4;
  padding: 15px;
}

.sidebar h2 {
  font-size: 20px;
  margin-bottom: 10px;
}

.sidebar ul {
  list-style-type: none;
}

.sidebar ul li {
  margin: 10px 0;
}

.sidebar ul li a {
  text-decoration: none;
  color: #333;
}

/* 主内容区样式 */
.main-content {
  flex: 1;
  padding: 20px;
  background-color: #ffffff;
}

.main-content h2 {
  font-size: 24px;
  margin-bottom: 12px;
}

.main-content p {
  font-size: 26px;
  line-height: 1.6;
}

/* 页脚样式 */
footer {
  background-color: #333;
  color: white;
  text-align: center;
  padding: 10px;
  position: fixed;
  width: 100%;
  bottom: 0;
}
td {
    font-size: 1em;
}

/* 響應式設計 */
@media (max-width: 768px) {
    table {
        width: 100%;
        font-size: 0.9em;
    }
    th, td {
        padding: 10px;
    }
}
  </style>
</head>

<body>
<div class="flex-center">
    <div class="content">
        @include('VegetableMarketDataView.header')
        @yield('contents')
        @include('VegetableMarketDataView.fotter')
    </div>    
</div>
</body>
</html>    