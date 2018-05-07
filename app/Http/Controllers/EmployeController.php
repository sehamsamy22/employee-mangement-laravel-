<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Employe;
use file;
use storage;
class EmployeController extends Controller
{
    public function index()
    {
        $employes = Employe::latest()->paginate(10);
        return view('employes.index',compact('employes'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employes.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'fristname' => 'required',
            'lastname' => 'required',
            'image'       => 'required'

        ]);


        $image= "";
        if ($request->hasFile('image')) {
          $destinationPath="image";
          $file= $request->image;
          $extension=$file->getClientOriginalExtension();
          return Storages::putFile('public/image',$request->file('image'));
          $fileName= rand(1111,9999). "." .$extension;
          $file->move($destinationPath,$fileName);

        $image = $fileName;
}
 Storage::disk('public/image')->put('fileName', $file);


        Employe::create($request->all());
        return redirect()->route('employes.index')
                        ->with('success','employes created successfully');

          }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Employe $employe)

    {
        return view('employes.show',compact('employe'));  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function searchcontent (Employe $employe)
    {   
       $searchkey=\Request::get('title');
        $employes=Employe::where('fristname', 'like','%' .$searchkey. '%')->paginate(10);
        return view('employes.searchcontent',['employes'=>$employes]);  
    }


    public function edit(Employe $employe)
    {
        return view('employes.edit',compact('employe'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Employe $employe)
    {
        request()->validate([
            'fristname' => 'required',
            'lastname' => 'required',
        ]);
        $employe->update($request->all());
        return redirect()->route('employes.index')
                        ->with('success','employe updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Employe::destroy($id);
        return redirect()->route('employes.index')
                        ->with('success',' employe deleted successfully');
    }
}
