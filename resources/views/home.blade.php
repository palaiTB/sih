@extends('layouts.app')

@section('content')
<div class="container data mt-5 animated fadeIn slower">
    <div class="row">
        <div class="col-3 border-right">
            <h2><a style="color: black" href="/home">Dashboard</a> <img class="pb-1" src="https://img.icons8.com/material-sharp/24/000000/dashboard.png"></h2>
            <br>
            <router-link style="color: black" to="/home/team"> <img class="pb-1 mr-3" src="https://img.icons8.com/material-sharp/24/000000/user-group-man-woman.png">  Add New</router-link>
            <br><br>
            <router-link style="color: black" to="/home/mentors"><img class="pb-1 mr-3" src="https://img.icons8.com/ios-glyphs/24/000000/coach.png">  Mentors</router-link>
            <br><br>
            <router-link style="color: black" to="#"><img class="pb-1 mr-3" src="https://img.icons8.com/android/24/000000/bonds.png">  Funds</router-link>
            <br><br>
            <router-link style="color: black" to="#"><img class="pb-1 mr-3" src="https://img.icons8.com/ios-glyphs/24/000000/community-grants.png">  Community</router-link>
            <br><br>
            <router-link style="color: black" to="/home/edit"><img class="pb-1 mr-3" src="https://img.icons8.com/android/24/000000/edit.png">  Edit</router-link>

        </div>
        <div class="col-9">
            <router-view></router-view>
        </div>
    </div>
</div>
@endsection
