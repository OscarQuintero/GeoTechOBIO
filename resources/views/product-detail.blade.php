@extends('layouts.basic')
@section('content')
	<h2 class="my-6 text-2xl font-semibold text-main-color-obio-marron dark:text-main-color-obio-amarillo">{{ $producto }}</h2>

        	<img src="{{ asset('img/prod.png')}}">

        
        	<div class="grid gap-6 mb-8 md:grid-cols-2">           

	       	 	<div class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
		            <h4 class="mb-4 font-semibold text-gray-600 dark:text-gray-300">
		              $46.56
		            </h4>
		            <p class="text-gray-600 dark:text-gray-400">
		              Café Tostado y Molido La Organización, café de altura, café de Oaxaca.
						Café de aroma florar, de avellanas y fruta seca, acidez muy fina, cuerpo redondo y cremoso, sabor dulce acaramelado.
						Los granos se cultivan en un rango de altitud de 900 a 1700 metros, en cuatro regiones Oaxaca: Mixteca, Sierra Sur, Costa y Sierra Norte; por 4500 pequeños productores de café sustentable orgánico y de comercio justo, integrados en la Coordinadora Estatal de Productores de Café de Oaxaca (CEPCO), creada para conquistar un mercado nacional que demanda café de alta calidad.
		            </p>
		        </div>
	        </div>

        
            <div class="px-6 my-6">
            <button
              class="flex items-center justify-between px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
            >
              Agregar al carrito
              <span class="ml-2" aria-hidden="true">+</span>
            </button>
          </div>
			
@endsection
