@extends('layout')
@section('content')
    <div class="row justify-content-center">

        <div class="col-md-4">

            <form method="post" action="{{route('contact.store')}}">
                @csrf
                <div class="form-group">
                    <label>Name </label>
                    <input type="text" class="form-control" name="name">
                    @if($errors->has('name'))
                        <p class="text-danger">{{$errors->first('name')}}</p>
                    @endif
                </div>


                <div class="form-group">
                    <label>Họ</label>
                    <input type="text" class="form-control" name="surname">
                    @if($errors->has('surname'))
                        <p class="text-danger">{{$errors->first('surname')}}</p>
                    @endif
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email">
                    @if($errors->has('cart'))
                        <p class="text-danger">{{$errors->first('email')}}</p>
                    @endif
                </div>

                <div class="form-group">
                    <label>địa chỉ</label>
                    <input type="text" class="form-control" name="address">
                    @if($errors->has('address'))
                        <p class="text-danger">{{$errors->first('address')}}</p>
                    @endif
                </div>

                <div class="form-group">
                    <label>Avatar</label>
                    <input type="text" class="form-control" name="avatar">
                    @if($errors->has('avatar'))
                        <p class="text-danger">{{$errors->first('avatar')}}</p>
                    @endif
                </div>

                <button type="submit" class="btn btn-primary">Thêm</button>
            </form>
        </div>
    </div>
    @endsection
