@extends('layouts.app')

@section('content')

<vue-product-show  :product = "{{$product}}"  />

@endsection