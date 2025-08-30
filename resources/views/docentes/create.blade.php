<!-- resources/views/docentes/create.blade.php -->

<h1>Agregar Docente</h1>

<form action="{{ route('docentes.store') }}" method="POST">
    @csrf

    <label>Nombre:</label>
    <input type="text" name="nombre" required><br>

    <label>Apellido:</label>
    <input type="text" name="apellido" required><br>

    <label>Email:</label>
    <input type="email" name="email" required><br>

    <button type="submit">Guardar</button>
</form>

<a href="{{ route('docentes.index') }}">⬅️ Volver</a>
