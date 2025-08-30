<!-- resources/views/docentes/edit.blade.php -->

<h1>Editar Docente</h1>

<form action="{{ route('docentes.update', $docente->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Nombre:</label>
    <input type="text" name="nombre" value="{{ $docente->nombre }}" required><br>

    <label>Apellido:</label>
    <input type="text" name="apellido" value="{{ $docente->apellido }}" required><br>

    <label>Email:</label>
    <input type="email" name="email" value="{{ $docente->email }}" required><br>

    <button type="submit">Actualizar</button>
</form>

<a href="{{ route('docentes.index') }}">⬅️ Volver</a>
