@extends('layouts.app')

@section('content')
<section style="display: content; padding:0;">
    <div class="feature-photo">
        <figure><img src="images/timeline-1.jpg" alt=""></figure>
        <div class="add-btn">

        </div>
        <form class="edit-phto">
            <i class="fa fa-camera-retro"></i>
            <label class="fileContainer">
                Edit Cover Photo
                <input type="file" />
            </label>
        </form>
        <div class="container-fluid">
            <div class="row merged">
                <div class="col-lg-2 col-sm-3">
                    <div class="user-avatar">
                        <figure>
                            <img src="images/user-avatar.jpg" alt="">
                            <form class="edit-phto">
                                <i class="fa fa-camera-retro"></i>
                                <label class="fileContainer">
                                    Edit Display Photo
                                    <input type="file" />
                                </label>
                            </form>
                        </figure>
                    </div>
                </div>
                <div class="col-lg-10 col-sm-9">
                    <div class="timeline-info">
                        <ul>
                            <li class="admin-name">
                                <h5>{{$user->name}}</h5>
                                <span>{{$user->email}}</span>
                            </li>
                            <li>
                                <a class="active" href="time-line.html" title="" data-ripple="">About</a>
                                <a class="" href="timeline-photos.html" title="" data-ripple="">Following</a>
                                <a class="" href="timeline-videos.html" title="" data-ripple="">Followers</a>

                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- top area -->


@yield('profile')

@endsection
