<?php

namespace App\Repository;

use App\Repository\Contracts\PersonaRepositoryInterface;
use App\Models\Persona;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Str;
use Illuminate\Http\Request;


class PersonaRepository implements PersonaRepositoryInterface
{
    public Persona $personaModel;

    function __construct(Persona $personaModel)
    {
        $this->personaModel = $personaModel;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $persona = Persona::inRandomOrder()
            ->take(100)
            ->get();
        return response()->json($persona);
    }

    public function store($data)
    {
        return $this->personaModel->create($data);
    }

    public function update($request, $persona)
    {
        $persona->fill($request);

        if ($persona->isDirty()) {
            return $persona->save();
        } else {
            $response = ['estado' => 'noChanges', 'data' => $request->all(), 'message' => 'No se realizaron modificaciones'];
            return $response;
        }
    }
    public function destroy($id)
    {
        return $this->personaModel->destroy($id);
    }
    public function show($id)
    {
        $persona = Persona::all()->find($id);
        return response()->json($persona);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function buscardni($request)
    {

        $persona = Persona::where('documento', $request)
            ->orWhere('documento', 'like', '%' . $request . '%')
            ->limit(10)
            ->get();
            return response()->json($persona);
    }


    public function buscarnombre($request)
    {
        $nombremay = Str::upper($request);
        $persona = Persona::where('nombre', $nombremay)
            ->orWhere('nombre', 'like', '%' . $nombremay . '%')
            ->limit(10)
            ->get();
            return response()->json($persona);
    }

    public function edit($id)
    {
        $persona = Persona::all()->find($id);
        return response()->json($persona);
    }
}
