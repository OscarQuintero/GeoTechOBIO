@extends('layouts.basic')
@section('content')
<h2 class="my-6 text-2xl font-semibold text-main-color-obio-marron dark:text-main-color-obio-amarillo"
    >Catálogo 
    @if($estado??'' != null)
        @if(strpos($estado, 'modo-'))
            <?php
                switch ($estado) {
                    case 'modo-1':
                        $modoDeCompra = 'Menudeo';
                        break;
                    case 'modo-2':
                        $modoDeCompra = 'Medio Mayoreo';
                        break;
                    case 'modo-3':
                        $modoDeCompra = 'Mayoreo';
                        break;     
                    
                }
                
            ?>
        @else
        de {{ $estado ?? ''}}
        @endif
    @endif

</h2>

<img src="{{ asset('img/logoOBIO.png')}}" width="100px">

<br>

{{-- En esta parte aparecerá el catalgo de los productos --}}
<br>
<br>
            <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
              <!-- Card -->
              <a href="/product-detail/Café Prodyser">
              <div class="flex items-center p-4 rounded-lg shadow-xs dark:bg-gray-800"
              style="background-color: #bd9a5f;">
              <img src="{{ asset('img/prod.png')}}" width="80px">
                <div class="p-3 mr-4 text-orange-500 rounded-full dark:text-orange-100 dark:bg-orange-500"
                style="background-color: #323e48; color: white;">
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7"/>
                  </svg>
                </div>
                <div>
                  <p class="mb-2 text-sm font-medium text-white-600 dark:text-gray-400">
                    Café Prodyser
                  </p>
                  <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                    $80.45
                  </p>
                  <p>
                      Tabasco
                  </p>
                </div>
              </div>
              </a>
              <!-- Card -->

              <a href="/product-detail/Café la organización">
              <div class="flex items-center p-4 rounded-lg shadow-xs dark:bg-gray-800"
              style="background-color: #757b63;">
                <div class="p-3 mr-4 text-green-500 rounded-full dark:text-green-100 dark:bg-green-500"
                style="background-color: #323e48; color: white;">
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7" />
                  </svg>
                </div>
                <div>
                  <p class="mb-2 text-sm font-medium text-white-600 dark:text-gray-400">
                    Café la organización
                  </p>
                  <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                    $ 46.78
                  </p>
                  <p>
                      Oaxaca
                  </p>
                </div>
              </div>
              </a>
              <!-- Card -->
                <a href="/product-detail/Café MAM">
              <div class="flex items-center p-4 rounded-lg shadow-xs dark:bg-gray-800" style="background-color: #fcaf1a;">
                <div class="p-3 mr-4 text-blue-500 rounded-full dark:text-blue-100 dark:bg-blue-500"
                style="background-color: #323e48; color: white;">
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7" />
                  </svg>
                </div>
                <div>
                  <p class="mb-2 text-sm font-medium text-white-600 dark:text-gray-400">
                    Café MAM
                  </p>
                  <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                    $376.50
                  </p>
                  <p>
                      Chiapas
                  </p>
                </div>
              </div>
              </a>
              <!-- Card -->
                <a href="/product-detail/Café UICIRI">
              <div class="flex items-center p-4 rounded-lg shadow-xs dark:bg-gray-800"
              style="background-color: #ff6f4a;">
                <div class="p-3 mr-4 text-teal-500 rounded-full dark:text-teal-100 dark:bg-teal-500"
                style="background-color: #323e48; color: white;">
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7" />
                  </svg>

                </div>
                <div>
                  <p class="mb-2 text-sm font-medium text-white-600 dark:text-gray-400">
                    Café UICIRI
                  </p>
                  <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                    $300.00
                  </p>
                  <p>
                      Oaxaca
                  </p>
                </div>
              </div>
            </div>
            </a>

              <!-- Card con mas columnas-->
            
            <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-3">
              <!-- Card -->
              <a href="/product-detail/Café Prodyser">
              <div class="flex items-center p-4 rounded-lg shadow-xs dark:bg-gray-800"
              style="background-color: #bd9a5f;">
                <div class="p-3 mr-4 text-orange-500 rounded-full dark:text-orange-100 dark:bg-orange-500"
                style="background-color: #323e48; color: white;">
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7" />
                  </svg>
                </div>
                <div>
                  <p class="mb-2 text-sm font-medium text-white-600 dark:text-gray-400">
                    Café Prodyser
                  </p>
                  <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                    $80.45
                  </p>
                  <p>
                      Tabascp
                  </p>
                </div>
              </div>
              </a>
              <!-- Card -->
                <a href="/product-detail/Café la organización">
              <div class="flex items-center p-4 rounded-lg shadow-xs dark:bg-gray-800"
              style="background-color: #757b63;">
                <div class="p-3 mr-4 text-green-500 rounded-full dark:text-green-100 dark:bg-green-500"
                style="background-color: #323e48; color: white;">
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7" />
                  </svg>
                </div>
                <div>
                  <p class="mb-2 text-sm font-medium text-white-600 dark:text-gray-400">
                    Café la organización
                  </p>
                  <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                    $ 46.78
                  </p>
                  <p>
                      Oaxaca
                  </p>
                </div>
              </div>
              </a>
              <!-- Card -->
              <a href="/product-detail/Café MAM">
              <div class="flex items-center p-4 rounded-lg shadow-xs dark:bg-gray-800" style="background-color: #fcaf1a;">
                <div class="p-3 mr-4 text-blue-500 rounded-full dark:text-blue-100 dark:bg-blue-500"
                style="background-color: #323e48; color: white;">
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7" />
                  </svg>
                </div>
                <div>
                  <p class="mb-2 text-sm font-medium text-white-600 dark:text-gray-400">
                    Café MAM
                  </p>
                  <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                    $376.50
                  </p>
                  <p>
                      Chiapas
                  </p>
                </div>
              </div>
              </a>
              <!-- Card -->
              <a href="/product-detail/Café UICIRI">
              <div class="flex items-center p-4 rounded-lg shadow-xs dark:bg-gray-800"
              style="background-color: #ff6f4a;">
                <div class="p-3 mr-4 text-teal-500 rounded-full dark:text-teal-100 dark:bg-teal-500"
                style="background-color: #323e48; color: white;">
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7" />
                  </svg>

                </div>
                <div>
                  <p class="mb-2 text-sm font-medium text-white-600 dark:text-gray-400">
                    Café UICIRI
                  </p>
                  <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                    $300.00
                  </p>
                  <p>
                      Oaxaca
                  </p>
                </div>
              </div>
              </a>

              <a href="/product-detail/Café MAM">
              <div class="flex items-center p-4 rounded-lg shadow-xs dark:bg-gray-800" style="background-color: #f58234;">
                <div class="p-3 mr-4 text-blue-500 rounded-full dark:text-blue-100 dark:bg-blue-500"
                style="background-color: #323e48; color: white;">
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7" />
                  </svg>
                </div>
                <div>
                  <p class="mb-2 text-sm font-medium text-white-600 dark:text-gray-400">
                    Café MAM
                  </p>
                  <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                    $376.50
                  </p>
                  <p>
                      Chiapas
                  </p>
                </div>
              </div>
              </a>
              <!-- Card -->

              <a href="/product-detail/Café UICIRI">
              <div class="flex items-center p-4 rounded-lg shadow-xs dark:bg-gray-800"
              style="background-color: #757b63;">
                <div class="p-3 mr-4 text-teal-500 rounded-full dark:text-teal-100 dark:bg-teal-500"
                style="background-color: #323e48; color: white;">
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7" />
                  </svg>

                </div>
                <div>
                  <p class="mb-2 text-sm font-medium text-white-600 dark:text-gray-400">
                    Café UICIRI
                  </p>
                  <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                    $300.00
                  </p>
                  <p>
                      Oaxaca
                  </p>
                </div>
              </div>
              </a>


            </div>
            
           
@endsection


