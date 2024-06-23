
@props([ 'employer', 'width' => 90 ])
{{-- @php
    print_r($employer->logo); 
@endphp --}}
<img src="{{ asset( $employer->logo ) }}" alt="" class="rounded-xl" width="{{ $width }}">