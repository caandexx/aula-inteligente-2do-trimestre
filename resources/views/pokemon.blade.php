<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gráfico de Pokémon</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
<div style="width: 80%; margin: 50px auto;">
    <h1>Gráfico de Tipos de Pokémon</h1>
    <canvas id="pokemonChart" width="800" height="400"></canvas>
</div>

<script>
const ctx = document.getElementById('pokemonChart').getContext('2d');

async function fetchPokemonTypes() {
    const response = await fetch('https://pokeapi.co/api/v2/pokemon?limit=20');
    const data = await response.json();

    // Traer todos los detalles en paralelo
    const promises = data.results.map(pokemon => fetch(pokemon.url).then(res => res.json()));
    const allPokemon = await Promise.all(promises);

    const typeCounts = {};
    allPokemon.forEach(pokeInfo => {
        pokeInfo.types.forEach(type => {
            typeCounts[type.type.name] = (typeCounts[type.type.name] || 0) + 1;
        });
    });

    return typeCounts;
}

async function createChart() {
    const typeCounts = await fetchPokemonTypes();
    const labels = Object.keys(typeCounts);
    const data = Object.values(typeCounts);

    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: labels,
            datasets: [{
                label: 'Cantidad de Pokémon por tipo',
                data: data,
                backgroundColor: [
                    '#FF5733', '#33FF57', '#3357FF', '#FF33A6',
                    '#A633FF', '#33FFF6', '#FF8C33', '#FF33FF',
                    '#33FF8C', '#8C33FF'
                ],
                borderColor: '#fff',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: { position: 'top' },
                tooltip: {
                    callbacks: {
                        label: function(tooltipItem) {
                            return `${tooltipItem.label}: ${tooltipItem.raw} Pokémon`;
                        }
                    }
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    title: { display: true, text: 'Cantidad de Pokémon' }
                },
                x: {
                    title: { display: true, text: 'Tipos de Pokémon' }
                }
            }
        }
    });
}

// Ejecutar la función
createChart();
</script>
</body>
</html>
