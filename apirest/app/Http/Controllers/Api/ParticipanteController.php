<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Participante;
use Illuminate\Http\Request;

class ParticipanteController extends Controller
{
    public function index()
    {
        $participantes = Participante::all();
        return response()->json($participantes);
    }

    public function show($id)
    {
        $participante = Participante::find($id);
        if (is_null($participante)) {
            return response()->json(['message' => 'Participante not found'], 404);
        }
        return response()->json($participante);
    }

    public function store(Request $request)
    {
        $participante = Participante::create($request->all());
        return response()->json($participante, 201);
    }

    public function update(Request $request, $id)
    {
        $participante = Participante::find($id);
        if (is_null($participante)) {
            return response()->json(['message' => 'Participante not found'], 404);
        }
        $participante->update($request->all());
        return response()->json($participante);
    }

    public function updatePartial(Request $request, $id)
    {
        $participante = Participante::find($id);
        if (is_null($participante)) {
            return response()->json(['message' => 'Participante not found'], 404);
        }
        $participante->fill($request->all());
        $participante->save();
        return response()->json($participante);
    }

    public function destroy($id)
    {
        $participante = Participante::find($id);
        if (is_null($participante)) {
            return response()->json(['message' => 'Participante not found'], 404);
        }
        $participante->delete();
        return response()->json(null, 204);
    }
}
