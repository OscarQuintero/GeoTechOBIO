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
              <img src="{{ asset('img/prod.png')}}" width="80px" class="rounded-full">
                
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
                <img src="{{ asset('img/prod.png')}}" width="80px" class="rounded-full">
                <div>
                  <p class="mb-2 text-sm font-medium text-white-600 dark:text-gray-400">
                    Café la organi...
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
                <img src="{{ asset('img/prod.png')}}" width="80px" class="rounded-full">
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
                <img src="{{ asset('img/prod.png')}}" width="80px" class="rounded-full">
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
                <img src="{{ asset('img/prod.png')}}" width="80px" class="rounded-full">
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
                <img src="{{ asset('img/prod.png')}}" width="80px" class="rounded-full">
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
                <img src="{{ asset('img/prod.png')}}" width="80px" class="rounded-full">
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
                <img src="{{ asset('img/prod.png')}}" width="80px" class="rounded-full">
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
                <img src="{{ asset('img/prod.png')}}" width="80px" class="rounded-full">
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
                <img src="{{ asset('img/prod.png')}}" width="80px" class="rounded-full">
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


