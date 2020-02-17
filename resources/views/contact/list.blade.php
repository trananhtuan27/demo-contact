@extends('layout')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="container">
                    <div class="col-6 float-right">
                        <form class="form-group float-right" action="{{route('contact.search')}}" method="get">
                            <div class="input-group">
                                <input type="text"
                                       id="search-user"
                                       class="form-control bg-light border-bottom"
                                       placeholder="Search for..."
                                       name="keyword">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit">
                                        <i class="fas fa-search fa-sm">Search</i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-8">
                    <a class="btn btn-primary" href="{{route('contact.create')}}">Create Users</a>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>STT</th>
                            <th>Name</th>
                            <th>Họ</th>
                            <th>Email</th>
                            <th>Địa chỉ</th>
                            <th>Avatar</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($contacts as $key => $contact)
                            <tr>
                                <th>{{++$key}}</th>
                                <td>{{$contact->name}}</td>
                                <td>{{$contact->surname}}</td>
                                <td>{{$contact->email}}</td>
                                <td>{{$contact->address}}</td>
                                <td>{{$contact->avatar}}</td>
                                <td>
                                    <a href="{{route('contact.destroy',$contact->id)}}"
                                       onclick="return confirm('Bạn có muốn xóa không')">Delete</a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <th colspan="6">No data</th>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>

            </div>
        </div>

@endsection
