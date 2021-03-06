<?php

namespace App\Http\Controllers\Camada;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\Register as ModelsRegister;
use Illuminate\Http\Request;

class CrudAjaxController extends Controller
{

    protected $registers;
    protected $requests;

    public function __construct(ModelsRegister $register, Request $request)
    {
        $this->requests = $request;
        $this->registers = $register;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = $this->registers->all();

        return view('layout.componet.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layout.componet.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RegisterRequest $registerRequest)
    {
        $data = $registerRequest->all();

        $redir = $this->registers->create($data);

        if (!$redir) {
            return Response()->json($data);
        }else {
            return Response()->json("cadastrado");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        if (!$data = $this->registers->find($id))
            return redirect()->back();

        return view("layout.componet.edit", compact('data'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        if (!$data = $this->registers->find($id))
            return redirect()->back();

           $dat = $this->requests->all();

           $redir =  $data->update($dat);

        if (!$redir) {
            return Response()->json($dat);
        }else {
            return Response()->json("alterado com sucesso");
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
       $dat = $this->registers->find($id);
        $dat->delete();
        $data = $this->registers->all();
        return redirect()->back();
    }
}
