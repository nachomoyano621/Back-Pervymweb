<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repository\Contracts\PersonaRepositoryInterface;
use App\Models\Persona;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\BuscarDniRequest;
use App\Http\Requests\BuscarNombreRequest;


class PersonaController extends Controller
{

    protected PersonaRepositoryInterface $personaRepositoryInterface;

    function __construct(PersonaRepositoryInterface $personaRepositoryInterface)
    {

        $this->personaRepositoryInterface = $personaRepositoryInterface;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        try {
            return  api()->ok(null, $this->personaRepositoryInterface->store($request->all()));
        } catch (\Throwable $th) {
            return api()->error($th->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Persona $id)
    {


        try {
            return api()->ok(null, $this->personaRepositoryInterface->update($request->all(), $id));
        } catch (\Throwable $th) {
            return api()->error($th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $persona  = Persona::find($id);

        try {
            return api()->ok(null, $this->personaRepositoryInterface->destroy($persona->id));
        } catch (\Throwable $th) {
            return api()->error($th->getMessage());
        }
    }

    public function show($id)
    {
        $persona = Persona::all()->find($id);
        try {
            return api()->ok(null, $this->personaRepositoryInterface->show($persona->id));
        } catch (\Throwable $th) {
            return api()->error($th->getMessage());
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function buscardni(BuscarDniRequest $request)
    {

        try {
            return api()->ok(null, $this->personaRepositoryInterface->buscardni($request->documento));
        } catch (\Throwable $th) {
            return api()->error($th->getMessage());
        }
    }

    public function buscarnombre(BuscarNombreRequest $request)
    {

        try {
            return api()->ok(null, $this->personaRepositoryInterface->buscarnombre($request->nombre));
        } catch (\Throwable $th) {
            return api()->error($th->getMessage());
        }
    }

    public function index()
    {

        try {
            return api()->ok(null, $this->personaRepositoryInterface->index());
        } catch (\Throwable $th) {
            return api()->error($th->getMessage());
        }
    }
    public function edit($id)
    {
        $persona = Persona::all()->find($id);
        try {
            return api()->ok(null, $this->personaRepositoryInterface->edit($persona->id));
        } catch (\Throwable $th) {
            return api()->error($th->getMessage());
        }
    }
}
