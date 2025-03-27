<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PracticeController extends Controller
{
    public function litigation()
    {
        return view('practices.litigation');
    }

    public function corporate()
    {
        return view('practices.corporate');
    }

    public function entertainment()
    {
        return view('practices.entertainment');
    }

    public function technology()
    {
        return view('practices.technology');
    }

    public function property() {
        return view('practices.property');
    }

    public function employment() {
        return view('practices.employment');
    }

    public function finance() {
        return view('practices.finance');
    }

    public function energy() {
        return view('practices.energy');
    }

    public function family() {
        return view('practices.family');
    }

    public function criminal() {
        return view('practices.criminal');
    }

    public function immigration() {
        return view('practices.immigration');
    }

    public function regulation() {
        return view('practices.regulation');
    }

    public function islamic() {
        return view('practices.islamic');
    }
}
