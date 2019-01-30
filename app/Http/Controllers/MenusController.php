<?php

namespace App\Http\Controllers;

use App\Models\menu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;

class MenusController extends Controller
{

    /**
     * Display a listing of the menus.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $menus = menu::paginate(25);

        return view('menus.index', compact('menus'));
    }

    /**
     * Show the form for creating a new menu.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        
        
        return view('menus.create');
    }

    /**
     * Store a new menu in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            menu::create($data);

            return redirect()->route('menus.menu.index')
                             ->with('success_message', 'Menu was successfully added!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }

    /**
     * Display the specified menu.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $menu = menu::findOrFail($id);

        return view('menus.show', compact('menu'));
    }

    /**
     * Show the form for editing the specified menu.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $menu = menu::findOrFail($id);
        

        return view('menus.edit', compact('menu'));
    }

    /**
     * Update the specified menu in the storage.
     *
     * @param  int $id
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            $menu = menu::findOrFail($id);
            $menu->update($data);

            return redirect()->route('menus.menu.index')
                             ->with('success_message', 'Menu was successfully updated!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }        
    }

    /**
     * Remove the specified menu from the storage.
     *
     * @param  int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $menu = menu::findOrFail($id);
            $menu->delete();

            return redirect()->route('menus.menu.index')
                             ->with('success_message', 'Menu was successfully deleted!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }

    
    /**
     * Get the request's data from the request.
     *
     * @param Illuminate\Http\Request\Request $request 
     * @return array
     */
    protected function getData(Request $request)
    {
        $rules = [
            'menu_id' => 'nullable',
            'menu_name' => 'string|min:1|nullable',
     
        ];
        
        $data = $request->validate($rules);


        return $data;
    }

}
