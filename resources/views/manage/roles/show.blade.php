@extends('layouts.manage')

@section('content')


<div class="content login">
    <div class="background" style="background-image: url( {{ URL('images/bg.jpg') }} )"></div>
  

    <div class="columns dashboard">
        <div class="column sidebar">
            <aside class="side__menu">
                <p class="title">General</p>
                <ul class="side__menu-list">
                    <li><a href="{{route('manage.dashboard')}}">Dashboard</a></li>
                    <li><a href="#">Blog Posts</a></li>
                </ul>

                <p class="title">Administration</p>
                <ul class="side__menu-list">
                    <li><a href="{{route('users.index')}}">Manage Users</a></li>
                    <li><a href="{{ route('roles.index') }}">Roles</a></li>
                    <li><a href="{{ route('permissions.index') }}">Permissions</a></li>
                    <li><a>Cloud Storage Environment Settings</a></li>
                    <li><a>Authentication</a></li>
                </ul>

                <p class="title">Transactions</p>
                <ul class="side__menu-list">
                    <li><a>Payments</a></li>
                    <li><a>Transfers</a></li>
                    <li><a>Balance</a></li>
                </ul>
            </aside>
        </div>

        <div class="column is-two-thirds">
                  
          <div class="flex-container">
            <div class="columns m-t-10">
              <div class="column">
                <h1 class="title">{{$role->display_name}}<small class="m-l-25"><em>({{$role->name}})</em></small></h1>
                <h5>{{$role->description}}</h5>
              </div>
              <div class="column">
                <a href="{{route('roles.edit', $role->id)}}" class="button is-primary is-pulled-right"><i class="fa fa-user-plus m-r-10"></i> Edit this Role</a>
              </div>
            </div>
            <hr class="m-t-0">

            <div class="columns">
              <div class="column">
                <div class="box">
                  <article class="media">
                    <div class="media-content">
                     
                        <h2 class="title">Permissions:</h1>
                        <ul>
                          @foreach ($role->permissions as $r)
                            <li>{{$r->display_name}} <em class="m-l-15">({{$r->description}})</em></li>
                          @endforeach
                        </ul>
                    
                    </div>
                  </article>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
</div>

@endsection
