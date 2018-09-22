@extends('layouts.index')

@section('homepage')
    <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Socials
                            </h2>

                        </div>
                        <div class="body table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Header</th>
                                    <th>Link</th>
                                    <th>Category</th>
                                    <th>Image</th>
                                    <th>Create_at</th>
                                    <th>Updated_at</th>
                                </tr>

                                </thead>
                                <tbody>


                                @foreach($portfolio as $data)
                                    <tr>
                                        <th scope="row">{{$data->id}}</th>
                                        <th scope="row">{{$data->header}}</th>
                                        <th scope="row">{{$data->link}}</th>
                                        <th scope="row">{{$data->category->name}}</th>
                                        <th scope="row"><img style="width: 200px;" class="img-responsive" src="{{ asset('/images/'.$data->image) }}">
                                            </th>
                                        <th scope="row">{{$data->created_at}}</th>
                                        <th scope="row">{{$data->updated_at}}</th>
                                        <th scope="row">
                                            <td>
                                            <a href="{{route('portfolio.edit',['portfolio' => $data->id])}}">  <button  type="button" class="btn bg-brown waves-effect">Edit</button></a>
                                        </td>
                                        <td>
                                            <a href="{{route('portfolio.destroy',['portfolio' => $data->id])}}"> <button  type="button" class="btn bg-brown waves-effect">Delete</button></a>
                                        </td>
                                        </th>

                                    </tr>
                                    @endforeach



                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>

@endsection