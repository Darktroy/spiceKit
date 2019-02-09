<?php

namespace App\Http\Controllers;

use App\Models\menuItems;
use App\Models\menu;
use App\Models\bgImages;
use App\Models\homepage;
use App\Http\Controllers\Controller;
use App\Http\Requests\MenuItemsFormRequest;
use \Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\DB;
use Validator;
use Illuminate\Validation\Rule;

class MenuItemsController extends Controller
{

    /**
     * Display a listing of the menu items.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $menuItemsObjects = menuItems::with('type')->get();
        $name = 'SpiceKitchen';
        return view('companyadminpanel.menuItemsListIndex',compact('name','menuItemsObjects'));
    }

    
    
    public function indexHome($id) {
        $menuItemsObjects = menuItems::where('menu_id',$id)->with('type')->get();
        $menus = menu::all();
        $name = 'SpiceKitchen';
        $bkimages = bgImages::all();
        $homedata = homepage::first();
        return view('divira.clients.goodsaltz.break',compact('bkimages','name','menuItemsObjects','menus','homedata'));
    }
    public function subindexHome($id,$submenuid) {
         
        $menuItemsObjects = menuItems::where('menu_id',$id)->where('submenuid',$submenuid)
                ->with('type')->get();
        
        $menus = menu::with('submenu')->get();
        $name = 'SpiceKitchen';
        $bkimages = bgImages::all();
        $homedata = homepage::first();
        return view('divira.clients.goodsaltz.break',compact('bkimages','name','menuItemsObjects','menus','homedata'));
    }
    
    
    
    /**
     * Show the form for creating a new menu items.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        
        
        $menuItemsObjects = menuItems::with('type')->get();
        $menuTypes = \App\Models\menu_type::get()->toArray();
        $menus = menu::with('submenu')->get()->toArray();
        $name = 'SpiceKitchen';
        return view('companyadminpanel.addMenuItem',compact('name','menuTypes','menus'));
    }

    /**
     * Store a new menu items in the storage.
     *
     * @param App\Http\Requests\MenuItemsFormRequest $request
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
                $temp = explode('&',$data['menu_id'] )  ;
                $data['menu_id'] = $temp[0];
                $data['submenuid'] = $temp[1];
//            if($request->hasFile("image")){
//                if (isset($data['image']) &&!empty($data['image'])){ 
//                    $imageName = 'menuItems'.time().'.'.$data['image']->getClientOriginalExtension();
//                    $data['image']->move(public_path('/menuImage'), $imageName);
//                    $data['image'] = $imageName;
//                } 
//            }
            $testingCounter = menuItems::where('menutypeId',$data['menutypeId'])->count();
            if($testingCounter>2){
                throw new Exception('this side of menu is full');
            }
            DB::beginTransaction();

            menuItems::create($data);
            
            DB::commit();
            
            return redirect()->route('menu_items.menu_items.index')->with('success_message', 'Menu Items was successfully added!');

        } catch (Exception $exception) {
            DB::rollBack();
            return back()->withInput()
                         ->withErrors(['unexpected_error' => $exception->getMessage()]);
        }
    }

    /**
     * Display the specified menu items.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $menuItems = menuItems::findOrFail($id);

        return view('menu_items.show', compact('menuItems'));
    }

    /**
     * Show the form for editing the specified menu items.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        
        
        $menuItemsObject = menuItems::with('type')->where('menuItemsId',$id)->get()->toArray();
        $menuItemsObject = $menuItemsObject[0];
        $menuTypes = \App\Models\menu_type::get()->toArray();
        $menus = menu::get()->toArray();
//        dd($menuTypes);
        $name = 'SpiceKitchen';
        return view('companyadminpanel.showEditMenuItem',compact('name','menuItemsObject','menuTypes','menus'));
    }

    /**
     * Update the specified menu items in the storage.
     *
     * @param  int $id
     * @param App\Http\Requests\MenuItemsFormRequest $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function update($id,Request $request)
    {
        try {
            
//            $data = $request->getDataUpdate();
            $data = $request->all();
            $menuItems = menuItems::findOrFail($id);
            $menuItems->update($data);

            $menuItemsObjects = menuItems::with('type')->get();
        $name = 'SpiceKitchen';
        return view('companyadminpanel.menuItemsListIndex',compact('name','menuItemsObjects'));

        } catch (Exception $exception) {
            DB::rollBack();
            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }        
    }

    /**
     * Remove the specified menu items from the storage.
     *
     * @param  int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            
            $menuItems = menuItems::where('menuItemsId',$id)->get();
            if(count($menuItems)){
                $menuItems[0]->delete();
            }
            
            $menuItemsObjects = menuItems::with('type')->get();
            $name = 'SpiceKitchen';
            return view('companyadminpanel.menuItemsListIndex',compact('name','menuItemsObjects'));
//            return redirect()->route('menu_items.menu_items.index')->with('success_message', 'Menu Items was successfully deleted!');
        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }


    protected function getDataInsertion(Request $request)
    {
        $rules = [
            'menutypeId' => 'required|int',
            'title' => 'required|string|min:0',
            'itemDescription' => 'required|string|min:0',
            'price' => 'required|integer',
            'memberprice' => 'required|integer',
//            'image' => 'required|Image',
     
        ];
        
        $messages =[
            'menutypeId.required' => 'Please Enter proper type',
            'title.required' => 'Please Enter title',
            'itemDescription.required' => 'Please Enter proper description',
            'price.required' => 'Please Enter price',
        ];
        $data = Validator::make($request->all(), $rules, $messages);
//        dd($data);
        return $data;
    }

}
