@extends('layouts.index')

@section('homepage')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Social>Create</h2>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Created Social
                            </h2>

                        </div>
                        <div class="body">
                                <form  action="{{ route('news.store') }}"   method="post"  enctype="multipart/form-data" >
                                @csrf
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="header" id="icon" class="form-control" value="">
                                        <label class="form-label">header</label>
                                    </div>
                                </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" name="content" id="link" class="form-control">
                                            <label class="form-label">content</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" name="link" id="link" class="form-control">
                                            <label class="form-label">link</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="datetime-local" name="time" id="time" class="form-control">
                                            <label class="form-label">time</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="file" name="file" id="link" class="form-control">
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