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
                <h1 class="title">Manage Permissions</h1>
              </div>
              <div class="column">
                <a href="{{route('permissions.create')}}" class="button is-primary is-pulled-right"><i class="fa fa-user-plus m-r-10"></i> Create New Permission</a>
              </div>
            </div>

            <div class="card">
              <div class="card-content">
                <table class="table is-narrow">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Slug</th>
                      <th>Description</th>
                      <th></th>
                    </tr>
                  </thead>
        
                  <tbody>
                    @foreach ($permissions as $permission)
                      <tr>
                        <th>{{$permission->display_name}}</th>
                        <td>{{$permission->name}}</td>
                        <td>{{$permission->description}}</td>
                        <td class="has-text-right"><a class="button is-outlined is-small m-r-5" href="{{route('permissions.show', $permission->id)}}">View</a><a class="button is-outlined is-small" href="{{route('permissions.edit', $permission->id)}}">Edit</a></td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div> <!-- end of .card -->
          </div>
        </div>
    </div>
</div>

@endsection
