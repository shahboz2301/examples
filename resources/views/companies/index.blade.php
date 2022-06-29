
  @extends('app');

  @section('content')

    <h1 class="text-center">Bu tashkilotlar ro'yxati</h1>

    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
   <a href="{{route('companies.create')}}"> <button class="btn btn-success" type="button">Tashkilot qo'shish</button> </a>

    </div>

    <br>
    <table class="table table-bordered">
       <thead>
           <tr>
               <th>T/R</th>
               <th>Tashkilot nomi</th>
               <th>Tashkilot manzili</th>
               <th>Tashkilot raqaami</th>
               <th>Amallar</th>
           </tr>
       </thead>
       <tbody>
         @foreach($companies as $companie)
             <tr>
                 <td>{{ (($companies->currentpage()-1)*$companies->perpage() + ($loop->index+1)) }}</td>
                 <td>
                  <a href="{{route('companies.show', ['company' => $companie->id])}}"> {{ $companie->name}} </a>
                 </td>
                 <td>{{ $companie->address}}</td>
                 <td>{{ $companie->phone}}</td>
                 <td>

                     <a href="{{ route('companies.edit', ['company'=>$companie->id]) }}" class="btn btn-info"><i class="bi bi-pencil-square"></i>{{ $companie->name}}</a>
                 </td>
             </tr>
         @endforeach

       </tbody>
      </table>
    {{$companies->links()}}
  @endsection
