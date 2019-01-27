<?php

namespace App\Http\Controllers;

use App\Models\gallery;
use App\Models\bgImages;
use App\Http\Controllers\Controller;
use App\Http\Requests\GalleriesFormRequest;
use Exception;
use Illuminate\Support\Facades\DB;
use Validator;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class GalleriesController extends Controller
{

    /**
     * Display a listing of the galleries.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $galleries = gallery::all();
        
        $bkimages = bgImages::all();

        return view('companyadminpanel.gallery.galleryListIndex', compact('galleries'));
    }

    
    public function indexHome() {
        $galleries = gallery::all();
        $bkimages = bgImages::all();
        return view('divira.clients.goodsaltz.gallery', compact(['galleries','bkimages']));
    }
    /**
     * Show the form for creating a new gallery.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        
        
        return view('companyadminpanel.gallery.addGalleryItem');
    }

    /**
     * Store a new gallery in the storage.
     *
     * @param App\Http\Requests\GalleriesFormRequest $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getDataInsertion($request);
             if ($data->fails()) { 
                 throw new Exception($data->messages());
            }
            $data = $request->all();
            if($request->hasFile("image")){
                if (isset($data['image']) &&!empty($data['image'])){ 
                    $imageName = 'menuItems'.time().'.'.$data['image']->getClientOriginalExtension();
                    $data['image']->move(public_path('/gallery'), $imageName);
                    $data['image'] = $imageName;
                } 
            }
            DB::beginTransaction();
            gallery::create($data);

            DB::commit();
            return redirect()->route('galleries.gallery.index')
                             ->with('success_message', 'Gallery was successfully added!');

        } catch (Exception $exception) {
            DB::rollBack();
            return back()->withInput()
                         ->withErrors(['unexpected_error' => $exception->getMessage()]);
        }
    }

    /**
     * Display the specified gallery.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $gallery = gallery::findOrFail($id);

        return view('galleries.show', compact('gallery'));
    }

    /**
     * Show the form for editing the specified gallery.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $gallery = gallery::findOrFail($id);
        

        return view('galleries.edit', compact('gallery'));
    }

    /**
     * Update the specified gallery in the storage.
     *
     * @param  int $id
     * @param App\Http\Requests\GalleriesFormRequest $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function update($id, GalleriesFormRequest $request)
    {
        try {
            
            $data = $request->getData();
            
            $gallery = gallery::findOrFail($id);
            $gallery->update($data);

            return redirect()->route('galleries.gallery.index')
                             ->with('success_message', 'Gallery was successfully updated!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }        
    }

    /**
     * Remove the specified gallery from the storage.
     *
     * @param  int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $gallery = gallery::where('galleryId',$id)->get();
            if(count($gallery)>0){
                $gallery[0]->delete();
            }

            return redirect()->route('galleries.gallery.index')->with('success_message', 'Gallery was successfully deleted!');

        } catch (Exception $exception) {
            return back()->withInput()->withErrors(['unexpected_error' => $exception->getMessage()]);
        }
    }


    protected function getDataInsertion(Request $request)
    {
        $rules = [
            'image' => 'required|Image',
        ];
        
        $messages =[
            'image.required' => 'Please import an Image',
        ];
        $data = Validator::make($request->all(), $rules, $messages);
        return $data;
    }

}
