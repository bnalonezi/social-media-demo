@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="{{$user->profile->profileImage()}}" class="rounded-circle w-100" style="width: 200px">
        </div>
        <div class="col-9 p-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <div class="d-flex align-items-center pb-4">
                    <div class="h4">{{ $user->username  }}</div>

                    <follow-button user-id="{{$user->id}}" follows="{{ $follows  }}"></follow-button>
                </div>


                @can('update', $user->profile)
                    <a href="/p/create"> Add new post </a>
                @endcan
            </div>
            @can('update', $user->profile)
                <a href="/profile/{{$user->id}}/edit"> Edit profile </a>
            @endcan
            <div class="d-flex">
                <div class="pr-5"><strong>{{ $postCount }} </strong>Post</div>
                <div class="pr-5"><strong>{{ $followersCount }} </strong>Followers</div>
                <div class="pr-5"><strong>{{ $followingCount }} </strong>Following</div>
            </div>
            <div class="pt-4 font-weight-bold">
                {{ $user->profile->title  }}
            </div>
            <div>
                {{ $user->profile->description  }}
            </div>
            <div>
                {{ $user->profile->url  }}
            </div>
        </div>
    </div>


    <div class="row pt-5">
        @foreach($user->posts as $post)
        <div class="col-4 pb-4">
            <a href="/p/{{$post->id}}">
                <img src="/storage/{{$post->image}}" class="w-100">
            </a>
        </div>
        @endforeach
    </div>

</div>
@endsection
