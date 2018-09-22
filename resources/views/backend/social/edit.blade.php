@extends('layouts.index')

@section('homepage')
    <section class="content">
        <div class="container-fluid">


            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Edit Social
                            </h2>

                        </div>
                        <div class="body">
                            <form   method="post" action="{{route('social.update',['social' => $social->id])}}"  >
                                {{ method_field('PUT') }}
                                @csrf
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="icon" id="icon" class="form-control" value="{{$social->icon}}">
                                        <label class="form-label">Icon</label>

                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="link" id="password" class="form-control" value="{{$social->	link}}">
                                        <label class="form-label">Link</label>
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