@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10 text-center">
            <div class="card bg-info text-white">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="display-2">Anything?</h3>
                        </div>
                        <div class="col-md-12">
                            <p class="display-6">
                                Let's discuss how we can help your business with a complimentary
                                consultation call to talk about your project or ideas.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group row">
                        <div class="col-md-12">
                            <label for="inputFullName">Full Name</label>
                            <input type="text" class="form-control" id="inputFullName">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12">
                            <label for="inputFullName">Email</label>
                            <input type="email" class="form-control" id="inputFullName">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <div class="col-md-12">
                            <label for="inputFullName">Company</label>
                            <input type="text" class="form-control" id="inputFullName">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12">
                            <label for="inputFullName">Phone</label>
                            <input type="text" class="form-control" id="inputFullName">
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <label for="inputFullName">What can we help?</label>
                    <textarea class="form-control" name="" id="" cols="30" rows="5"></textarea>
                </div>
                <div class="col-md-12 mt-3">
                    <button class="btn">Submit</button>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection