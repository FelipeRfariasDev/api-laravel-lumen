<?php
namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    private $usuario;

    public function __construct(Usuario $usuario)
    {
        $this->usuario = $usuario;
    }

    public function index()
    {
        $usuario = $this->usuario->paginate(10);

        return response()
            ->json(['data' => [
                    'usuario' => $usuario
                ]
            ]);
    }

    public function show(int $id)
    {
        $usuario =  $this->usuario->findOrFail($id);
        return response()
            ->json(['data' => [
                    'usuario' => $usuario
                ]
            ]);
    }

    public function store(Request $request)
    {
        $usuario = $this->usuario->create($request->all());

        return response()
            ->json(
                ['data' =>
                    [
                        'message' => 'Usuario foi criado com sucesso!',
                        'usuario' => $usuario
                    ]
            ]);
    }

    public function update(int $id, Request $request)
    {
        $usuario = $this->usuario->find($id);

        $usuario_update = $usuario>update($request->all());

        return response()
            ->json(
                [
                    'data' =>
                        [
                            'message' => 'Usuario foi criado com sucesso!',
                            'usuario_atualizado' => $usuario_update
                        ]
                ]);
    }


    public function destroy(int $id)
    {
        $usuario = $this->usuario->find($id);

        $usuario->delete();

        return response()
            ->json(
                [
                    'data' =>
                        [
                            'message' => 'Usuario foi removido com sucesso!'
                        ]
                ]
            );
    }
}
