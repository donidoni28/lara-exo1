@extends('layouts.home')
@section('content')

    <div class="">
        <div class="card w-full bg-gray-200 rounded-none my-2 justify-center">
            <div class="card-body mx-auto">
                <h2 class="card-title">Hello CodingSchool</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem, totam.</p>
                <div class="card-actions justify-center h-15">
                    <button style="padding: 7px 90px;"
                        class="btn bg-indigo-700 rounded-2xl text-zinc-50 rounded-tl-none hover:bg-indigo-600 border-none">About</button>
                </div>
            </div>
        </div>

        <div class="container max-w-sm">
            <p>Bonus</p>
            <p>{{ url()->current() }}</p>
            <p>{{ url()->previous() }}</p>
        </div>
    </div>
@endsection
