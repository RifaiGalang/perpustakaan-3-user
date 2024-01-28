<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    function index()
    {
        echo "selamat datang admin";
        echo "<a href='logout'><ol>logout>></a>";
    }
    function admin()
    {
        echo "selamat datang admin";
        echo "<a href='/logout'><ol>logout>></a>";
    }
    function petugas()
    {
        echo "selamat datang petugas";
        echo "<a href='/logout'><ol>logout>></a>";
    }
    function peminjam()
    {
        echo "selamat datang peminjam";
        echo "<a href='/logout'><ol>logout>></a>";
    }
}
