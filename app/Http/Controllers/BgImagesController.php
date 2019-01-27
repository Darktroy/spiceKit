<?php

namespace App\Http\Controllers;

use App\Models\bgImages;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Support\Facades\DB;
use Validator;
use Illuminate\Validation\Rule;

class BgImagesController extends Controller
{

    /**
     * Display a listing of the bg images.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $bgImagesObjects = bgImages::paginate(25);

        return view('companyadminpanel.bgImages.bgImagesListIndex', compact('bgImagesObjects'));
    }

    /**
     * Show the form for creating a new bg images.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        return view('companyadminpanel.bgImages.addbgImageItem');
    }

    /**
     * Store a new bg images in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
//            dd($request->all()); bgImages
            $data = $this->getDataInsertion($request);
             if ($data->fails()) { 
                 throw new Exception($data->messages());
            }
            $data = $request->all();
            if($request->hasFile("bgImages")){
                if (isset($data['bgImages']) &&!empty($data['bgImages'])){ 
                    $imageName = 'bgImages'.time().'.'.$data['bgImages']->getClientOriginalExtension();
                    $data['bgImages']->move(public_path('/bgImages'), $imageName);
                    $data['bgImages'] = $imageName;
                } 
            }
            DB::beginTransaction();
            bgImages::create($data);

            DB::commit();
            return redirect()->route('bg_images.bg_images.index')
                             ->with('success_message', 'Back ground image was successfully added!');

        } catch (Exception $exception) {
            DB::rollBack();
            return back()->withInput()
                         ->withErrors(['unexpected_error' => $exception->getMessage()]);
        }
    }

    /**
     * Display the specified bg images.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $bgImages = bgImages::findOrFail($id);

        return view('bg_images.show', compact('bgImages'));
    }

    /**
     * Show the form for editing the specified bg images.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $bgImages = bgImages::findOrFail($id);
        

        return view('bg_images.edit', compact('bgImages'));
    }

    /**
     * Update the specified bg images in the storage.
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
            
            $bgImages = bgImages::findOrFail($id);
            $bgImages->update($data);

            return redirect()->route('bg_images.bg_images.index')
                             ->with('success_message', 'Bg Images was successfully updated!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }        
    }

    /**
     * Remove the specified bg images from the storage.
     *
     * @param  int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $bgImages = bgImages::findOrFail($id);
            $bgImages->delete();

            return redirect()->route('bg_images.bg_images.index')
                             ->with('success_message', 'Bg Images was successfully deleted!');

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
            'bgImages_id' => 'required|numeric|min:0|max:4294967295',
            'bgImages' => 'numeric|nullable',
     
        ];
        
        $data = $request->validate($rules);


        return $data;
    }
protected function getDataInsertion(Request $request)
    {
//    bgImages
        $rules = [
            'bgImages' => 'required|Image',
        ];
        
        $messages =[
            'bgImages.required' => 'Please import an Image',
        ];
        $data = Validator::make($request->all(), $rules, $messages);
        return $data;
    }
}
