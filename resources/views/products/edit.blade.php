@extends('layouts.app')
@section('content')
<div style="margin-left: 87px;">
    <div class="container">
        <div class="row">
            <form action="{{ route('products.update')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <input type="hidden" name="id" value="{{ $amit['id']}}">
                  <label for="exampleInputEmail1" class="form-label">Name</label>
                  <input type="text" value="{{ $amit['name'] }}" class="form-control" id="email" name="name" value="" placeholder="enter name">
                </div>
                <div class="mb-3">
                  <label for="Email" class="form-label">Email</label>
                  <input type="email" value="{{ $amit['email'] }}" name="email" class="form-control" id="email" placeholder="enter email">
                </div>
                <div class="mb-3">
                  <label for="phone" class="form-label">Phone</label>
                  <input type="text" value="{{ $amit['phone']}}" class="form-control" id="phone" name="phone" placeholder="enter phone">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
    </div>
</div>

@endsection
