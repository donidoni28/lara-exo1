<div>
    @php

        $url = Route::getCurrentRoute()->uri();
        preg_match_all("/[a-z]*/",$url,$arr);

    @endphp
    <h2>{{ucfirst(trans($arr[0][2]))}} <span>Subheading</span></h2>
    <p class="block text-black bg-gray-200 font-semibold py-1 px-3"><span class=" text-blue-400 ">{{ucfirst(trans($arr[0][0]))}} </span>/ {{ucfirst(trans($arr[0][2]))}}</p>
</div>