<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GeoTech OBIO - Dashboard</title>
    <link type=”image/png” href=”/favicon.png” sizes="16x16" rel=”icon” />
    
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="{{asset('windmill/assets/css/tailwind.output.css')}}" />
    <script
      src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"
      defer
    ></script>
    <script src="{{ asset('windmill/assets/js/init-alpine.js')}}"></script>
  </head>
  <body>
    <div
      class="flex h-screen bg-gray-50 dark:bg-gray-900"
      :class="{ 'overflow-hidden': isSideMenuOpen}"
    >
      <!-- Sidebar -->
      @include('layouts.sidebar')


      <div class="flex flex-col flex-1">
        <!-- Navigation bar-->

        @include('layouts.header')
        <main class="h-full pb-16 overflow-y-auto">
          <!-- Remove everything INSIDE this div to a really blank page -->
          <div class="container px-6 mx-auto grid">
            
              @yield('content')
            </h2>
          </div>
        </main>
        
      </div>
    </div>
  </body>
</html>