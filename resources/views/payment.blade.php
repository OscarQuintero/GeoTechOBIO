@extends('layouts.basic')
@section('content')
	<h2
              class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
            >Métodos de Pago</h2>

            <p>
            	Métodos de pago variables: tarjeta de crédito o débito, se podrá realizar el pago al contado o en pagos con tarjeta de crédito generadas por una fintech o vinculadas a la misma, también se aceptan las tarjetas de crédito o débito que forman parte de cualquier otra institución financiera (no aplica para el formato “en pagos”). 
				Oxxo: se generará un código QR y uno de barras para poder pagar en cualquier tienda Oxxo (para tener la posibilidad de hacer el pago en efectivo), tienes 3 días para pagar; una vez pagado el producto, se actualizará el estatus del mismo automáticamente y procederemos a enviarlo.
            </p>
            <br/>
			<ul>
				<li>Pagos mensuales con tarjeta de crédito (creada directamente con nuestra fintech o asociada a la misma)</li>
				<li>Tarjeta de débito </li>
				<li>Tarjeta de crédito para pago de contado.</li>
				<li>Pago en efectivo a través de Oxxo</li>
			</ul>
@endsection
