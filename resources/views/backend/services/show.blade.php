@extends('layouts.index')

@section('homepage')
    <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Services
                            </h2>

                        </div>
                        <div class="body table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Icon</th>
                                    <th>Header</th>
                                    <th>Content</th>
                                    <th>Create_at</th>
                                    <th>Updated_at</th>
                                </tr>

                                </thead>
                                <tbody>


                                @foreach($service as $data)
                                    <tr>
                                        <th scope="row">{{$data->id}}</th>
                                        <th scope="row">{{$data->icon}}</th>
                                        <th scope="row">{{$data->header}}</th>
                                        <th scope="row">{{$data->content}}</th>
                                        <th scope="row">{{$data->created_at}}</th>
                                        <th scope="row">{{$data->updated_at}}</th>
                                        <th scope="row">
                                            <td>
                                            <a href="{{route('service.edit',['service' => $data->id])}}">  <button  type="button" class="btn bg-brown waves-effect">Edit</button></a>
                                        </td>
                                        <td>
                                            <a href="{{route('service.destroy',['service' => $data->id])}}"> <button  type="button" class="btn bg-brown waves-effect">Delete</button></a>
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