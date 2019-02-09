<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\submenu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;

class SubmenusController extends Controller
{

    /**
     * Display a listing of the submenus.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $submenus = submenu::with('menu')->paginate(25);

        return view('submenus.index', compact('submenus'));
    }

    /**
     * Show the form for creating a new submenu.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        $menus = Menu::pluck('id','id')->all();
        
        return view('submenus.create', compact('menus'));
    }

    /**
     * Store a new submenu in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            submenu::create($data);

            return redirect()->route('submenus.submenu.index')
                             ->with('success_message', 'Submenu was successfully added!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }

    /**
     * Display the specified submenu.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $submenu = submenu::with('menu')->findOrFail($id);

        return view('submenus.show', compact('submenu'));
    }

    /**
     * Show the form for editing the specified submenu.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $submenu = submenu::findOrFail($id);
        $menus = Menu::pluck('id','id')->all();

        return view('submenus.edit', compact('submenu','menus'));
    }

    /**
     * Update the specified submenu in the storage.
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
            
            $submenu = submenu::findOrFail($id);
            $submenu->update($data);

            return redirect()->route('submenus.submenu.index')
                             ->with('success_message', 'Submenu was successfully updated!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }        
    }

    /**
     * Remove the specified submenu from the storage.
     *
     * @param  int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $submenu = submenu::findOrFail($id);
            $submenu->delete();

            return redirect()->route('submenus.submenu.index')
                             ->with('success_message', 'Submenu was successfully deleted!');

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
            'submenuid' => 'string|min:1|nullable',
            'menu_id' => 'nullable',
            'submenu_name' => 'string|min:1|nullable',
     
        ];
        
        $data = $request->validate($rules);


        return $data;
    }

}
