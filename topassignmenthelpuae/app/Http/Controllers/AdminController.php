<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        $pagesCount = DB::table('pages')->count();
        $ordersCount = DB::table('orders')->count();
        $recentOrders = DB::table('orders')->orderBy('created_at', 'desc')->limit(5)->get();
        
        return view('admin.dashboard', compact('pagesCount', 'ordersCount', 'recentOrders'));
    }

    // Pages CRUD
    public function pagesIndex()
    {
        $pages = DB::table('pages')->orderBy('created_at', 'desc')->get();
        return view('admin.pages.index', compact('pages'));
    }

    public function create()
    {
        return view('admin.pages.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:pages',
            'seo_title' => 'nullable|string|max:255',
            'seo_description' => 'nullable|string',
            'seo_keywords' => 'nullable|string',
            'content' => 'nullable|string',
            'meta_image' => 'nullable|string',
            'is_active' => 'boolean',
        ]);

        DB::table('pages')->insert([
            'title' => $validatedData['title'],
            'slug' => $validatedData['slug'],
            'seo_title' => $validatedData['seo_title'],
            'seo_description' => $validatedData['seo_description'],
            'seo_keywords' => $validatedData['seo_keywords'],
            'content' => $validatedData['content'],
            'meta_image' => $validatedData['meta_image'],
            'is_active' => $request->has('is_active') ? 1 : 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('admin.pages.index')->with('success', 'Page created successfully!');
    }

    public function show($id)
    {
        $page = DB::table('pages')->where('id', $id)->first();
        if (!$page) {
            return redirect()->route('admin.pages.index')->with('error', 'Page not found!');
        }
        return view('admin.pages.show', compact('page'));
    }

    public function edit($id)
    {
        $page = DB::table('pages')->where('id', $id)->first();
        if (!$page) {
            return redirect()->route('admin.pages.index')->with('error', 'Page not found!');
        }
        return view('admin.pages.edit', compact('page'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:pages,slug,' . $id,
            'seo_title' => 'nullable|string|max:255',
            'seo_description' => 'nullable|string',
            'seo_keywords' => 'nullable|string',
            'content' => 'nullable|string',
            'meta_image' => 'nullable|string',
            'is_active' => 'boolean',
        ]);

        DB::table('pages')->where('id', $id)->update([
            'title' => $validatedData['title'],
            'slug' => $validatedData['slug'],
            'seo_title' => $validatedData['seo_title'],
            'seo_description' => $validatedData['seo_description'],
            'seo_keywords' => $validatedData['seo_keywords'],
            'content' => $validatedData['content'],
            'meta_image' => $validatedData['meta_image'],
            'is_active' => $request->has('is_active') ? 1 : 0,
            'updated_at' => now(),
        ]);

        return redirect()->route('admin.pages.index')->with('success', 'Page updated successfully!');
    }

    public function destroy($id)
    {
        DB::table('pages')->where('id', $id)->delete();
        return redirect()->route('admin.pages.index')->with('success', 'Page deleted successfully!');
    }
}
