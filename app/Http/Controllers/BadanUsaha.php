<?php

namespace App\Http\Controllers;

use App\Models\BadanUsaha as ModelsBadanUsaha;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BadanUsaha extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ModelsBadanUsaha::all();
        return view('index', compact('data'));
    }

    public function getBadanUsaha(Request $request)
    {
        $draw = $request->get('draw');
        $start = $request->get('start');
        $length = $request->get('length');
        $search = $request->get('search');
        $order = $request->get('order');
        $columns = $request->get('columns');

        $columnIndex = $order[0]['column'];
        $columnName = $columns[$columnIndex]['data'];
        $columnSortOrder = $order[0]['dir'];
        $searchValue = $search['value'];

        $totalRecords =  ModelsBadanUsaha::count();
        $totalRecordswithFilter = ModelsBadanUsaha::where('nama', 'like', '%' . $searchValue . '%')
            ->orWhere('email', 'like', '%' . $searchValue . '%')
            ->orWhere('jenis_usaha', 'like', '%' . $searchValue . '%')
            ->count();

        $records = ModelsBadanUsaha::orderBy($columnName, $columnSortOrder)
            ->where('nama', 'like', '%' . $searchValue . '%')
            ->orWhere('email', 'like', '%' . $searchValue . '%')
            ->orWhere('jenis_usaha', 'like', '%' . $searchValue . '%')
            ->skip($start)
            ->take($length)
            ->get();


        return response()->json([
            "draw" => intval($draw),
            "iTotalRecords" => $totalRecords,
            "iTotalDisplayRecords" => $totalRecordswithFilter,
            "aaData" => $records
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string|max:255|unique:badan_usaha',
            'email' => 'required|email|max:255|unique:badan_usaha',
        ]);

        if ($validator->fails()) {

            return redirect()
                ->route('home')
                ->withErrors($validator)
                ->withInput();
        }
        ModelsBadanUsaha::create($request->all());
        return redirect()->route('home')->with('success', 'Data berhasil ditambahkan');
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
        //
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
        ModelsBadanUsaha::where('id', $id)->update($request->except('_token'));
        return redirect()->route('home')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ModelsBadanUsaha::destroy($id);
        return redirect()->route('home')->with('success', 'Data berhasil dihapus');
    }
}
