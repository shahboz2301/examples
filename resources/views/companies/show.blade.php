@extends('app')
@section('content')

    <h1 class="text-center p-3" > Tashkilot haqida malumot </h1>

    <div class="row">
        <div class="col-md-6">

        <div class="mb-3">
            <a href="{{route('companies.index')}}">Ortga</a>
        </div>

        <table class="table table-bordered">
            <tr>
                <td> Tshakilot nomi </td>
                <td> {{$companie->name}}</td>
            </tr>
            <tr>
                <td> Tashkilot manzili </td>
                <td> {{$companie->address}} </td>
            </tr>
            <tr>
                <td> Tashkilot raqami</td>
                <td> {{$companie->phone}} </td>
            </tr>
            <tr>
                <td> Qo'shilgan vaqti </td>
                <td> {{$companie->created_at}}</td>
            </tr>
        </table>

        </div>
    </div>
@endsection
