use App\Models\Elemento;

public function index()
{
    $elementos = Elemento::all(); // obtenemos todos los elementos
    return view('elementos.index', compact('elementos')); // pasamos los elementos a la vista
}
