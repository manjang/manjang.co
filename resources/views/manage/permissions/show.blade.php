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
                    <li><a>Roles</a></li>
                    <li><a>Permissions</a></li>
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
                <h1 class="title">View Permission Details</h1>
              </div> <!-- end of column -->

              <div class="column">
                <a href="{{route('permissions.edit', $permission->id)}}" class="button is-primary is-pulled-right"><i class="fa fa-edit m-r-10"></i> Edit Permission</a>
              </div>
            </div>

            <div class="columns">
              <div class="column">
                <div class="box">
                  <article class="media">
                    <div class="media-content">
                      
                        <p>
                          <strong>{{$permission->display_name}}</strong> <small>{{$permission->name}}</small>
                          <br>
                          {{$permission->description}}
                        </p>
                      
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
