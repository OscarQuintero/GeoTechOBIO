@extends('layouts.basic')
@section('content')
	<h2 class="my-6 text-2xl font-semibold text-main-color-obio-marron dark:text-main-color-obio-amarillo">{{ $producto }}</h2>

            <img src="{{ asset('img/prod.png')}}">

            <p>
            	 Descripción del producto
           	</p>
           	<br>
           	<h3>$46.56</h3>
            <br/>
            <div class="px-6 my-6">
            <button
              class="flex items-center justify-between px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
            >
              Agregar al carrito
              <span class="ml-2" aria-hidden="true">+</span>
            </button>
          </div>
			
@endsection
