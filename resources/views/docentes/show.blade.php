<!-- resources/views/docentes/show.blade.php -->

<h1>Detalle del Docente</h1>

<p><strong>Nombre:</strong> {{ $docente->nombre }}</p>
<p><strong>Apellido:</strong> {{ $docente->apellido }}</p>
<p><strong>Email:</strong> {{ $docente->email }}</p>

<a href="{{ route('docentes.index') }}">⬅️ Volver</a>
