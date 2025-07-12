<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminOrderController extends Controller
{
    public function index()
    {
        $orders = DB::table('orders')->orderBy('created_at', 'desc')->get();
        return view('admin.orders.index', compact('orders'));
    }

    public function show($id)
    {
        $order = DB::table('orders')->where('id', $id)->first();
        if (!$order) {
            return redirect()->route('admin.orders.index')->with('error', 'Order not found!');
        }
        return view('admin.orders.show', compact('order'));
    }

    public function edit($id)
    {
        $order = DB::table('orders')->where('id', $id)->first();
        if (!$order) {
            return redirect()->route('admin.orders.index')->with('error', 'Order not found!');
        }
        return view('admin.orders.edit', compact('order'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'status' => 'required|in:pending,in_progress,completed,cancelled',
            'notes' => 'nullable|string',
            'amount' => 'nullable|numeric|min:0',
        ]);

        DB::table('orders')->where('id', $id)->update([
            'status' => $validatedData['status'],
            'notes' => $validatedData['notes'],
            'amount' => $validatedData['amount'],
            'updated_at' => now(),
        ]);

        return redirect()->route('admin.orders.index')->with('success', 'Order updated successfully!');
    }

    public function destroy($id)
    {
        DB::table('orders')->where('id', $id)->delete();
        return redirect()->route('admin.orders.index')->with('success', 'Order deleted successfully!');
    }
}
