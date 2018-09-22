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
                            <form action=" {{route('category.update',['category' =>$category->id])}}"   method="post"  >
                                {{ method_field('PUT') }}
                                @csrf
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="name" id="icon" class="form-control" value="{{$category->name}}">
                                        <label class="form-label">name</label>
                                    </div>
                                </div>

                                <br>
                                <div class="row clearfix demo-button-sizes">
                                    <div class="col-xs-6 col-sm-3 col-md-2 col-lg-2">
                                        <button type="submit" class="btn btn-primary m-t-15 waves-effect">Update</button>

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>

@endsection
