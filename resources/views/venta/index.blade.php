<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>HotDogs-Gestion Ventas</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous"></head>
</head>
<body>
	
	<div class="container">
		<h4 class="my-1">Gestión de Ventas</h4>

		<div class="row">
			<div class="col-xl-12">
				<form action="{{route('ventas.index')}}" method="get">
					<div class="form-row">
						<div class="col-sm-2 my-1">
							<input type="text" class="form-control" name="mes" placeholder="Mes o Año" value="{{$texto}}">
						</div>
						<div class="col-auto my-1">
							<input type="submit" class="btn btn-primary" value="Buscar">
						</div>
					</div>
				</form>
			</div>

			<div class="col-xl-12 my-1">
				<div class="table-responsive">
					<table class="table table-striped">
						<thead class="table-dark">
							<tr>
								<th>Opciones</th>
								<th>ID</th>
								<th>Dia</th>
								<th>Mes</th>
								<th>Año</th>
								<th>Total</th>
							</tr>
						</thead>

						<tbody>
							@if(count($ventas)<=0)
								<tr>
									<td colspan="8">
										No hay resultados
									</td>
								</tr>
							@else

							@foreach ($ventas as $venta)
							<tr>
								<td>
									<button type="button" class="btn btn-primary">Editar</button>
									<button type="button" class="btn btn-danger">Eliminar</button>
								</td>
								<td>{{$venta->id_venta}}</td>
								<td>{{$venta->dia}}</td>
								<td>{{$venta->mes}}</td>
								<td>{{$venta->annio}}</td>
								<td>{{$venta->total}}</td>
							</tr>
							@endforeach
							@endif
						</tbody>
					</table>
					{{$ventas->links()}}
				</div>
			</div>
		</div>
	</div>
</body>
</html>