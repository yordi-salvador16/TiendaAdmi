@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('front.partials.msg')
            @foreach ($products as $item)
                <div class="col-3">
                    <div class="card">
                        <img src="/img/{{$item->iamge}}" class="card-img-top">
                        <div class="card-body text-center">
                            <h2>{{$item->name}}</h2>
                            <p>Precio {{$item-> price}}</p>
                            <div class="card-footer">
                                <form action=" {{route('add') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$item->id}}" >
                                    <input type="submit" name="btn" class="btn btn-success w-100" value="addToCart">
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            @endforeach    
    </div>
</div>
@endsection
