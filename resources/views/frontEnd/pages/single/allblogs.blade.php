@extends('frontEnd.layout.master')


@section('content')
<div class="page-nav row">
    <div class="container">
        <div class="row">
            <h2>News and Update</h2>
            <ul>
                <li> <a href="#"><i class="fas fa-home"></i> Home</a></li>
                <li><i class="fas fa-angle-double-right"></i> Our Blog</li>
            </ul>
        </div>
    </div>
</div>

@include('frontEnd.pages.blog')
@endsection
