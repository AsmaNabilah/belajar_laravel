<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    Public function home(){
        return view('welcome');

    }
    Public function datadiri(){
        return 'Nama: Asma Nabilah <br> NIM : D212011042 <br> Kelas : KA-7B';
    } 
    Public function about(){
        return 'About Us';

    }
    

