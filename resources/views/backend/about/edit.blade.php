@extends('layouts.index')

@section('homepage')
    <section class="content">
        <div class="container-fluid">

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Edit About
                            </h2>

                        </div>
                        <div class="body">
                            <form action=" {{route('about.update',['about' =>$s->id])}}"   method="post"  >
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
                                        <input type="text" name="content" id="link" class="form-control" value="{{$s->content}}">
                                        <label class="form-label">content</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="link" id="link" class="form-control" value="{{$s->link}}">
                                        <label class="form-label">link</label>
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
