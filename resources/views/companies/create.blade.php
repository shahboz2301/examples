@extends('app')
@section('content')

    <h1 class="text-center p-3"> Tashkilot qo'shish sahifasi </h1>

    <div class="row">
    <div class="col-md-6">

{{--        <!-- /resources/views/post/create.blade.php -->--}}

{{--        <h1>Create Post</h1>--}}

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
    @endif

    <!-- Create Post Form -->

        <form method="post" action="{{ route('companies.store') }}">

        @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Tashkilot nomi</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
            </div>

            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" id="address" name="address"  value="{{ old('name') }} ">
            </div>

            <div class="mb-3 form-check">
                <label for="phone" class="form-label">Tashkilot telefon raqami</label>
                <input type="text" class="form-control" id="phone" name="phone" value="{{ old('name') }}" >

            </div>
            <button type="submit" class="btn btn-primary">Saqlash</button>
        </form>

    </div>
</div>




@endsection
