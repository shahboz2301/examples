<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveCompanieRequest;
use App\Models\Companie;
use App\Rules\PhoneNumber;
use Illuminate\Http\Request;

class CompaniesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {

        $companies=Companie::orderByDesc('created_at')->paginate(10);

            return view('companies.index',[
               'companies'=> $companies
            ]);

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {

         $companie=new Companie();
        return view('companies.create', [
           'companie'=>$companie
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(SaveCompanieRequest  $request)
    {
        Companie::create($request->validated());

        return redirect()->route('companies.index');

   //     dd($data);

// jadvalga malumot qoshish 2-usuli

//   $Companie = Companie::create($data);



//  jadvalga malumot qoshishni 1-usuli
//     $Companie = new Companie;
//     $Companie->name = $data['name'];
//     $Companie->address = $data['address'];
//     $Companie->phone = $data['phone'];
//     $Companie->save();



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show( $companie)
    {
      $companie = Companie::findOrFail($companie);

        return view('companies.show',[
         'companie'=> $companie
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Companie $companie)
    {
        return view('companies.edit',[
          'companie'=> $companie
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SaveCompanieRequest $request, Companie $companie)
    {

        $companie->update($request->validated());

        return redirect()->route('companies.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( Companie $companie)
    {
        $companie->delete();
        return redirect()->route('companies.index');
    }


}
