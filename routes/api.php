use illuminate\Support\Facades\Route;

Route::get('/cars', function (){
    return response()->json([
        ['id' =>1, 'name' => 'Carro A', 'price' => 50000],
        ['id' =>2, 'name' => 'Carro B', 'price' => 60000],
        ['id' =>3, 'name' => 'Carro C', 'price' => 70000],
        ]);
    })
