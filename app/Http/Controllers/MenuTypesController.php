<?php

namespace App\Http\Controllers;

use App\Models\menu_type;
use App\Http\Controllers\Controller;
use App\Http\Requests\MenuTypesFormRequest;
use Exception;

class MenuTypesController extends Controller
{

    /**
     * Display a listing of the menu types.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $menuTypes = menu_type::paginate(25);

        return view('menu_types.index', compact('menuTypes'));
    }

    /**
     * Show the form for creating a new menu type.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        
        
        return view('menu_types.create');
    }

    /**
     * Store a new menu type in the storage.
     *
     * @param App\Http\Requests\MenuTypesFormRequest $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(MenuTypesFormRequest $request)
    {
        try {
            
            $data = $request->getData();
            
            menu_type::create($data);

            return redirect()->route('menu_types.menu_type.index')
                             ->with('success_message', 'Menu Type was successfully added!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }

    /**
     * Display the specified menu type.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $menuType = menu_type::findOrFail($id);

        return view('menu_types.show', compact('menuType'));
    }

    /**
     * Show the form for editing the specified menu type.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $menuType = menu_type::findOrFail($id);
        

        return view('menu_types.edit', compact('menuType'));
    }

    /**
     * Update the specified menu type in the storage.
     *
     * @param  int $id
     * @param App\Http\Requests\MenuTypesFormRequest $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function update($id, MenuTypesFormRequest $request)
    {
        try {
            
            $data = $request->getData();
            
            $menuType = menu_type::findOrFail($id);
            $menuType->update($data);

            return redirect()->route('menu_types.menu_type.index')
                             ->with('success_message', 'Menu Type was successfully updated!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }        
    }

    /**
     * Remove the specified menu type from the storage.
     *
     * @param  int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $menuType = menu_type::findOrFail($id);
            $menuType->delete();

            return redirect()->route('menu_types.menu_type.index')
                             ->with('success_message', 'Menu Type was successfully deleted!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }



}
