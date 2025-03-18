

<header>
    <div class="logo">
     
        <h1>聯合國永續發展目標 (SDGs)</h1>
        <p>17個全球永續發展的共同目標</p>
    </div>
    <nav>
      <ul>
        <li><a href="http://127.0.0.1:8001/">首頁</a></li>
        <li><a href="http://127.0.0.1:8001/VegetableMarketDataController">表格</a></li>

        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
          @if (Route::has('login'))
              <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                  @auth
                      <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                  @else
                      <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                      @if (Route::has('register'))
                          <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                      @endif
                  @endauth
              </div>
          @endif

        <!-- <li><a href="#">服務</a></li>
        <li><a href="#">聯繫我們</a></li>-->
      </ul>
    </nav>
  </header>
