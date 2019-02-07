<?php

namespace App\Http\Controllers;

use App\Models\contactUs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\bgImages;
use App\Models\menu;
use Exception;

class ContactUsesController extends Controller
{

    /**
     * Display a listing of the contact uses.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $contactUses = contactUs::all();
        $name = 'SpiceKitchen';
        return view('companyadminpanel.contactUsListIndex',compact('name','contactUses'));
    }

    /**
     * Show the form for creating a new contact us.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        
        $bkimages = bgImages::all();
        $menus = menu::all();
        return view('divira.clients.goodsaltz.contactUs',compact(['bkimages','menus']));
    }

    /**
     * Store a new contact us in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            contactUs::create($data);

            return redirect('/');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }

    /**
     * Display the specified contact us.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $contactUs = contactUs::findOrFail($id);

        return view('contact_uses.show', compact('contactUs'));
    }

    /**
     * Show the form for editing the specified contact us.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $contactUs = contactUs::findOrFail($id);
        

        return view('contact_uses.edit', compact('contactUs'));
    }

    /**
     * Update the specified contact us in the storage.
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
            
            $contactUs = contactUs::findOrFail($id);
            $contactUs->update($data);

            return redirect()->route('contact_uses.contact_us.index')
                             ->with('success_message', 'Contact Us was successfully updated!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }        
    }

    /**
     * Remove the specified contact us from the storage.
     *
     * @param  int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $contactUs = contactUs::findOrFail($id);
            $contactUs->delete();            
            return redirect()->route('showContactUs.index')->with('success_message', 'Message successfully deleted!');


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
            'message' => 'string',
            'phone' => 'numeric|min:1',
            'name' => 'string|min:1|max:255',
            'email' => 'email',
     
        ];
        
        $data = $request->validate($rules);


        return $data;
    }

}
