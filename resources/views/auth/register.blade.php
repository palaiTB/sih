@extends('layouts.app')

@section('content')
<div class="container p-5 text-center">
    <h1>Register</h1>
    <br>
    <div class="row">
        <div class="col-4">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80" alt="Card image cap">
                <div class="card-body">
                    <h4>Startup</h4>
                    <p class="card-text">
                        Some quick example text to build on the card title and make up the bulk of the card's content.
                        <br>
                        <a href="/register/startup" class="mt-4 btn btn-outline-dark">Register </a>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="https://images.unsplash.com/photo-1496902526517-c0f2cb8fdb6a?ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80" alt="Card image cap">
                <div class="card-body">
                    <h4>Mentor</h4>
                    <p class="card-text">
                        Some quick example text to build on the card title and make up the bulk of the card's content.
                        <br>
                        <a href="/register/mentor" class="mt-4 btn btn-outline-dark">Register </a>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="https://images.unsplash.com/photo-1507679799987-c73779587ccf?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1051&q=80" alt="Card image cap">
                <div class="card-body">
                    <h4>Invest</h4>
                    <p class="card-text">
                        Some quick example text to build on the card title and make up the bulk of the card's content.
                        <br>
                        <a href="/register/crowdsource" class="mt-4 btn btn-outline-dark">Register </a>
                    </p>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
