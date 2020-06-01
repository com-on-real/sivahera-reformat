<?php

function listLang()
{
    //     <img width="32" height="32" alt="{{ session('locale') }}"
    //                 src="{!! asset('img/' . session('locale') . '.png') !!}"/>

//         @foreach(config('app.locales') as $locale)
            
//             @if($locale != session('locale'))

//                 <a href="{{ route('language', $locale) }}">
//                     <img width="32" height="32" alt="{{ session('locale') }}"
//                             src="{!! asset('img/' . $locale . '.png') !!}"/>
//                 </a>
//             @endif
//         @endforeach


    return "
        <li>
            <a href='/en'>English</a>
        </li>
        <li>
            <a href='/fr'>Français</a>
        </li>
    ";
}