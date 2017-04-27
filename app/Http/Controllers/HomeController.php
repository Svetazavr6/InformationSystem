<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function index()
    {
        return view('home');
    }
        public function menu()
    {
        return view('menu');
    }
    public function add_patient()
    {
        return view('add-patients');
    }
     public function osmotri()
    {
        return view('osmotri');
    }
     public function analizi()
    {
        return view('analizi');
    }
    public function Dannie()
    {
        return view('dannie');
    }
    public function Pervicka()
    {
        return view('pervicka');
    }
    public function palata()
    {
        return view('palata');
    }
    public function palati()
    {
        return view('palati');
    }
    public function GlavOsmotr()
    {
        return view ('GlavOsmotr');
    }
    public function ListNaznacheniy()
    {
        return view ('ListNaznacheniy');
    }
    public function ListNaznacheniy2()
    {
        return view ('ListNaznacheniy2');
    }
    public function Soglasie()
    {
        return view ('Soglasie');
    }
    public function patients()
    {
        return view ('patients');
    }
    public function diagnozi()
    {
        return view ('diagnozi');
    }
        public function patient_operations()
    {
        return view ('patient_operations');
    }
    public function dokumenti()
    {
        return view ('dokumenti');
    }
        public function oak()
    {
        return view ('oak');
    }
    public function klin_razbor()
    {
        return view ('klin_razbor');
    }
    public function operacia()
    {
        return view ('operacia');
    }
    
    public function Gistologiya()
    {
        return view ('Gistologiya');
    }
    public function patients_vievs()
    {
        return view ('patients_vievs');
    }
    public function viev_pa()
    {
        return view ('viev_pa');
    }
    
}
