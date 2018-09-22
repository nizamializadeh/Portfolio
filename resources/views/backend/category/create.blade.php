@extends('layouts.index')

@section('homepage')
    <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Created Category
                            </h2>

                        </div>
                        <div class="body">
                                <form  action="{{ route('category.store') }}"   method="post"  >
                                @csrf
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="name" id="icon" class="form-control" value="">
                                        <label class="form-label">Name</label>
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