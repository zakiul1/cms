<?php


namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Product;
use App\Models\Contact;
use App\Models\Feature;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $counts = [
            'banners' => Banner::count(),
            'products' => Product::count(),
            'contacts' => Contact::count(),
            'features' => Feature::count(),
        ];

        $recentContacts = Contact::latest()->take(5)->get();

        return view('dashboard.index', compact('counts', 'recentContacts'));
    }
}