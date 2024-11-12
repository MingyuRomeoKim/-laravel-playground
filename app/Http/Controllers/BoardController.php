<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BoardController extends Controller
{
    public function index()
    {

    }

    public function show(string $id)
    {
        return view('retro.board.show', ['id' => $id]);
    }
}
