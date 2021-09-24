@extends('layouts.gacha_default')

@section('content')
@include('components.gacha_nav')    
<div class="lg:ml-64 ml-5 mt-3">
    <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-show-count="false"></a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
</div>
    <english-word/>
 
@endsection
