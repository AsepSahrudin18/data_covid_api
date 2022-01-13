<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index()
    {
        # Get All Resource
        echo"menampilkan data patients";  //ini yang di cut dari file api.php pada bagian route
    }

    public function store()
    {
        # Add Resource
        echo "menambahkan resource";
    }

    public function show($id)
    {
        # Get Detail Resource
        echo"menampilkan data patients - id $id";
    }

    public function update(Request $request, $id)
    {
        # Edit Resource
        echo "mengedit data patient - id $id - $request->nama";
    }

    public function destroy($id)
    {
        # Delete Resource
        echo "menghapus data patient - id $id";
    }


    // panggil method nya kesini dari api.php search
    
}
