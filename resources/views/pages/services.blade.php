@extends('layouts.home')
@section('content')
    <div id="box-size" class=" bg-slate-500 aspect-[5/1] w-full my-2"></div>
    {{-- {{ dd($cards) }} --}}
    <div class="flex justify-between my-5">
        @foreach ($cards as $card)
            @php
                $i = $loop->index +1
            @endphp
            <div class="card card-compact w-96 bg-base-100 shadow-xl rounded-none">
                <figure><img src="https://placeimg.com/400/225/arch" alt="Shoes" /></figure>
                <div class="card-body">
                    <h2 class="card-title">{{$card['title']}} {{$i}}</h2>
                    <p>{{$card['content']}} {{$i}}</p>
                    <div class="card-actions justify-end">
                        <button class="btn btn-primary">Buy Now</button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
