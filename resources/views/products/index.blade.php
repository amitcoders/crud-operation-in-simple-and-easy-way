@extends('layouts.app')
@section('content')
<div style="margin-left: 87px;">
    <div class="container">
        <div class="row">
            {{-- <form action="{{ route('products.store')}}" method="POST">
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Name</label>
                  <input type="text" class="form-control" id="email" name="name" aria-describedby="emailHelp" placeholder="enter name">
                </div>
                <div class="mb-3">
                  <label for="Email" class="form-label">Email</label>
                  <input type="text" class="form-control" id="email" placeholder="enter email">
                </div>
                <div class="mb-3">
                  <label for="phone" class="form-label">Phone</label>
                  <input type="text" class="form-control" id="phone" name="phone" placeholder="enter phone">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
              </form> --}}
              <div class="col-lg-12">
                <div class="panel panel-default">

                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example1">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $amit)
                                    <tr class="odd gradeX">
                                        <td>{{$amit->id}}</td>
                                        <td>{{$amit->name}}</td>
                                        <td>{{$amit->email}}</td>
                                        <td>{{$amit->phone}}</td>

                                        <td>
                                            <a href="{{ route('products.create')}}">create</a>
                                            <a href="{{ route('products.edit', $amit->id)}}">Edit</a>
                                            <a href="{{ route('products.delete',$amit->id)}}">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
        </div>
    </div>
</div>

@endsection
