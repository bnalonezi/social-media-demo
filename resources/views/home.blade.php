@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="{{ asset('img/phpLogo.png') }}" class="rounded-circle" style="width: 200px">
        </div>
        <div class="col-9 p-5">
            <div><h1>FreeCodeCamp</h1></div>
            <div class="d-flex">
                <div class="pr-5"><strong>152</strong>Post</div>
                <div class="pr-5"><strong>23K</strong>Followers</div>
                <div class="pr-5"><strong>22</strong>Following</div>
            </div>
            <div class="pt-4 font-weight-bold">
                FreeCodeCamp.org
            </div>
            <div>
                demo description, demo description,demo description,demo description,demo description,demo description,
                demo description, demo description,demo description,demo description,demo description,demo description,
                demo description, demo description,demo description,demo description,demo description,demo description,
            </div>
        </div>
    </div>

    <div class="row pt-5">
        <div class="col-4">
            <img src="https://instagram.fruh4-1.fna.fbcdn.net/vp/cb543c5413a19aaeee7153e0c71ed412/5DE7A35D/t51.2885-15/sh0.08/e35/c0.107.925.925a/s640x640/61555594_471501460067844_6848849947845320953_n.jpg?_nc_ht=instagram.fruh4-1.fna.fbcdn.net" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://instagram.fruh4-1.fna.fbcdn.net/vp/5f069f649573d63c9e1d74664c91efa1/5DED6C12/t51.2885-15/sh0.08/e35/c0.81.887.887/s640x640/66420383_162375928225341_762635906960426989_n.jpg?_nc_ht=instagram.fruh4-1.fna.fbcdn.net" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://instagram.fruh4-1.fna.fbcdn.net/vp/75f04ad74df7a2366a98aaece4d53951/5DCF224D/t51.2885-15/sh0.08/e35/c2.0.746.746a/s640x640/67509038_1248999178602698_5250499905248656732_n.jpg?_nc_ht=instagram.fruh4-1.fna.fbcdn.net" class="w-100">
        </div>

    </div>
</div>
@endsection
