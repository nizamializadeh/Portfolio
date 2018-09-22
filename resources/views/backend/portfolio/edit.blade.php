@extends('layouts.index')

@section('homepage')
    <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Edit Category
                            </h2>

                        </div>
                        <div class="body">
                            <form action=" {{route('portfolio.update',['portfolio' =>$s->id])}}"   method="post"  enctype="multipart/form-data" >
                                {{ method_field('PUT') }}
                                @csrf
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="header" id="icon" class="form-control" value="{{$s->header}}">
                                        <label class="form-label">header</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="link" id="link" class="form-control" value="{{$s->link}}">
                                        <label class="form-label">link</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="file" name="file" id="file" class="form-control">
                                        <label class="form-label">image</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                     <img style="width: 200px;" class="img-responsive" src="{{ asset('/images/'.$s->image) }}">
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <select name="cate_id">
                                            @foreach($catagories as $catagory)
                                                <option value="{{$catagory->id}}" >{{$catagory->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>


                                </div>
                        <br>

                        <button type="submit" class="btn btn-primary m-t-15 waves-effect">Update</button>

                        </form>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>

@endsection
