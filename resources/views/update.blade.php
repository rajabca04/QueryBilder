@extends('base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <form action="{{  route('modify',['id'=>$item->id]) }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="">name</label>
                                <input type="text" name="name" value="{{$item->name}}" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">contact</label>
                                <input type="text" name="contact" value="{{$item->contact}}" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">address</label>
                                <input type="text" name="address" value="{{$item->address}}" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">email</label>
                                <input type="text" name="email" value="{{$item->email}}" class="form-control">
                            </div>
                            <div class="mb-3">
                                <input type="submit" class="btn btn-success w-100">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
