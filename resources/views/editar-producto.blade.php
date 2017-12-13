@extends('layouts.html_base')

@section('cuerpo')

			@foreach($errors->all() as $error)
				<li style="color:red">{{ $error }}</li>
			@endforeach
		</ul>
	</p>
	@endif

	<div>

		<form method="POST" action="{{ route('editar-producto', $producto ) }}">
			{{ csrf_field() }}



			<div>
				<button type="submit">Guardar</button>
			</div>

		</form>
@endforelse
	</div>


@endsection
