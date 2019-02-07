<?php

namespace App\Http\Controllers;

use App\Models\homepage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;

class HomepagesController extends Controller
{

    /**
     * Display a listing of the homepages.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $homepages = homepage::paginate(25);

        return view('homepages.index', compact('homepages'));
    }

    /**
     * Show the form for creating a new homepage.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        
        
        return view('homepages.create');
    }

    /**
     * Store a new homepage in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            homepage::create($data);

            return redirect()->route('homepages.homepage.index')
                             ->with('success_message', 'Homepage was successfully added!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }

    /**
     * Display the specified homepage.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $homepage = homepage::findOrFail($id);

        return view('homepages.show', compact('homepage'));
    }

    /**
     * Show the form for editing the specified homepage.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $homepage = homepage::findOrFail($id);
        

        return view('homepages.edit', compact('homepage'));
    }

    /**
     * Update the specified homepage in the storage.
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
            
            $homepage = homepage::findOrFail($id);
            $homepage->update($data);

            return redirect()->route('homepages.homepage.index')
                             ->with('success_message', 'Homepage was successfully updated!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }        
    }

    /**
     * Remove the specified homepage from the storage.
     *
     * @param  int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $homepage = homepage::findOrFail($id);
            $homepage->delete();

            return redirect()->route('homepages.homepage.index')
                             ->with('success_message', 'Homepage was successfully deleted!');

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
            'p1' => 'string|min:1|nullable',
            'p2' => 'string|min:1|nullable',
            'title' => 'string|min:1|max:255|nullable',
     
        ];
        
        $data = $request->validate($rules);


        return $data;
    }
    
    
    public function indexSetting() {
        $name = 'SpiceKitchen';
        $data = homepage::first();
        return view('companyadminpanel.showEditHomeSetting',compact(['name','data']));
    }
    
    public function indexSettingUpdate(Request $request) {
        $data = $this->getData($request);
        $name = 'SpiceKitchen';
        $homepage = homepage::first();
            $homepage->update($request->all());
        return view('companyadminpanel.showEditHomeSetting',compact(['name','data']));
        
    }
    
    

}
