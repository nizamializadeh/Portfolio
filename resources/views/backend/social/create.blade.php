@extends('layouts.index')

@section('homepage')
    <section class="content">
        <div class="container-fluid">


            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Created Social
                            </h2>

                        </div>
                        <div class="body">
                            <form  action="{{ route('social.store') }}"   method="post"  >
                                @csrf
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="icon" id="icon" class="form-control">
                                        <label class="form-label">Icon</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="link" id="link" class="form-control">
                                        <label class="form-label">Link</label>
                                    </div>
                                </div>
                                <br>
                                <button type="submit" class="btn btn-success waves-effect">Create</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>

@endsection