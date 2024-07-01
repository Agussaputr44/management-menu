<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\User;
use App\Models\MenuLevel;

class MenuController extends Controller
{
    public function getMenu()
    {
        $menuItems = Menu::all();
        return view('layout.partial.sidebar', ['menuItems' => $menuItems]);
    }

    public function create()
    {
        $levels = MenuLevel::all();
        return view('menu.create', compact('levels'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'menu_id' => 'required|string|max:3',
            'id_level' => 'required|string|max:3',
            'menu_name' => 'required|string|max:300',
            'menu_link' => 'required|string|max:300',
            'menu_icon' => 'required|string|max:300',
            'parent_id' => 'nullable|string|max:30',
        ]);

        $menuData = $request->all();
        $menuData['create_by'] = "admin";
        $menuData['delete_mark'] = "0";
        $menuData['create_date'] = now();
        $menuData['update_by'] = "admin";
        $menuData['update_date'] = now();

        Menu::create($menuData);

        return redirect('/dashboard')->with('success', 'Menu created successfully.');
    }


    public function tracking()
    {
        $users = User::all(); // Fetch all users
        return view('menu.tracking', compact('users'));
    }

    public function destroy($id)
    {
        $menu = Menu::find($id);

        if (!$menu) {
            return redirect('/dashboard')->with('error', 'Menu not found.');
        }

        $menu->delete();

        return redirect('/dashboard')->with('success', 'Menu deleted successfully.');
    }
}
