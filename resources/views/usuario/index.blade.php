<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>HotDogs-GestionUsuarios</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous"></head>
<body>
	
	<div class="container">
		<h4>Gestrión de Usuarios</h4>

		<div class="row">
			<div class="col-xl-12">
				<div class="table-responsive">
					<table class="table table-striped">
						<thead class="table-dark">
							<tr>
								<th>Opciones</th>
								<th>ID</th>
								<th>Nombre</th>
								<th>Contraseña</th>
								<th>Email</th>
							</tr>
						</thead>

						<tbody>
							@foreach ($usuario as $usuarios)
							<tr>
								<td>
									<button type="button" class="btn btn-primary">Editar</button>
									<button type="button" class="btn btn-danger">Eliminar</button>
								</td>
								<td>{{$usuarios->id}}</td>
								<td>{{$usuarios->name}}</td>
								<td>{{$usuarios->password}}</td>
								<td>{{$usuarios->email}}</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</body>
</html>