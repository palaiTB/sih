@extends('layouts.app')

@section('content')

    <div class="content">
        <div class="loader" style="color: black">
            <img src="https://media1.tenor.com/images/c1ffb54572cdf998a6d7a753c747a7a1/tenor.gif?itemid=14739718">
        </div>
        <div class="image">
            <div class="container">
                <div class="row pt-5 pb-5">
                    <div class="col-12 pt-5 pb-5 ">
                        <h3>Introducing the first-ever mentor outreach platform</h3>
                        <br>
                        <p class="pb-3">
                            <br>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Imperdiet dui accumsan sit amet nulla facilisi. Tristique senectus et netus et malesuada. Aliquam sem fringilla ut morbi tincidunt augue. Egestas fringilla phasellus faucibus scelerisque eleifend. Cras adipiscing enim eu turpis egestas pretium. Quam id leo in vitae turpis. Leo duis ut diam quam nulla porttitor massa id neque. Dui sapien eget mi proin. Bibendum enim facilisis gravida neque convallis a cras semper auctor. Lectus sit amet est placerat in egestas erat. Vivamus arcu felis bibendum ut. Molestie at elementum eu facilisis. Aliquet eget sit amet tellus cras. Feugiat scelerisque varius morbi enim nunc faucibus.
                        </p>

                        <button data-toggle="modal" data-target="#exampleModalLong" class="btn btn-outline-light btn-lg">Why Us</button>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="container">
            <div class="row p-5">
                <div class="col-6  pb-5 text-left">
                    <h3>What is Startup_Hunt</h3>
                    <br>
                    <p class="pb-3">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>
                <div class="col-6">
                    <img src="https://s3.amazonaws.com/mentoring.redesign/s3fs-public/480x310-two-business-women-table.jpg" style="min-width: 100%" alt="">
                </div>
            </div>
        </div>

        <div class="container-fluid text-center p-5" style="background-color: #1b1e21; color: white">
            <h1>Beat the odds!</h1>
            <br>
            <h4 style="color: #d3d3d3">Passionate Founders + Great Ideas + Startup community = Unstoppable</h4>
            <br>
            <a href="/register" class="btn btn-outline-light">Sign Up </a>
        </div>

        <div class="container-fluid text-center p-5">
            <div class="row">
                <div class="col-6">
                    <h1 class="mt-5">It's not a zero sum game!</h1>
                    <br>
                    <h4 class="pt-3">
                        The startup game is positive sum, you don’t lose when a person succeeds. As an ecosystem matures, the winners help create more winners.
                    </h4>
                </div>
                <div class="col-6">
                    <img width="70%" src="https://www.unsolved.xyz/assets/illustration-3-c123f1d9ca227e7f10812307596a7b287f326761df67a598da9709765ffc794f.png" alt="">
                </div>
            </div>
        </div>

    </div>

    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title" id="exampleModalLongTitle">This is why !! <img class="pb-2" src="https://img.icons8.com/pastel-glyph/25/000000/wink.png"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="{{asset('images/cpm.png')}}"width="100%"  alt=""> <br><br>
                    The aforegiven graph represents the number of startups from grass root level that are registered on our platforms. Also implying what all skills are in demand. For instance , a Tech based startup won't be requiring e-commerce assistance. And since the startups have a decent funding, they can be even willing to pay for the mentors
                    <hr>
                    <img src="{{asset('images/inv.png')}}" width="100%" alt=""> <br><br>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Imperdiet dui accumsan sit amet nulla facilisi. Tristique senectus et netus et malesuada.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection
