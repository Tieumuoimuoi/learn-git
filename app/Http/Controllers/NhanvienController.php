<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nhanvien;

class NhanvienController extends Controller
{
    public function index()
    {
        $nhanviens = Nhanvien::all();
        return view('nhanvien.index', ['nhanviens' => $nhanviens]);
    }

    public function create()
    {
        return view('nhanvien.create');
    }

    public function store(Request $request)
    {
        $nhanvien = new Nhanvien();
        $nhanvien->name = $request->input('name');
        $nhanvien->age = $request->input('age');
        $nhanvien->address = $request->input('address');
        $nhanvien->phone = $request->input('phone');
        $nhanvien->save();

        return redirect()->route('nhanvien.index');
    }

    public function edit($id)
    {
        $nhanvien = Nhanvien::find($id);
        return view('nhanvien.edit', ['nhanvien' => $nhanvien]);
    }

    public function update(Request $request, $id)
    {
        $nhanvien = Nhanvien::find($id);
        $nhanvien->name = $request->input('name');
        $nhanvien->age = $request->input('age');
        $nhanvien->address = $request->input('address');
        $nhanvien->phone = $request->input('phone');
        $nhanvien->save();

        return redirect()->route('nhanvien.index');
    }

    public function destroy($id)
    {
        $nhanvien = Nhanvien::find($id);
        $nhanvien->delete();

        return redirect()->route('nhanvien.index');
    }

    public function add()
    {
        return view('nhanvien.create');
    }

    public function search(Request $request)
    {
        $keyword = $request->input('keyword');

        $nhanviens = NhanVien::where('name', 'like', '%' . $keyword . '%')
                            ->orWhere('address', 'like', '%' . $keyword . '%')
                            ->get();

        return view('nhanvien.index', ['nhanviens' => $nhanviens]);
    }


    public function refresh()
    {
        return redirect()->route('nhanvien.index');
    }
}
