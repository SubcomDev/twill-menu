@extends('frontend.layout.Site')

@section('content')
    <p>{!! $item->renderBlocks(false) !!} </p>
@endsection
