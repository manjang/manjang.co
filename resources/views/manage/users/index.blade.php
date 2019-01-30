@extends('layouts.manage')

@section('content')

<div class="content login m-t-35">
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
                    <h1 class="title">Manage Users</h1>
                    </div>
                    <div class="column">
                    <a href="{{route('users.create')}}" class="button is-primary is-pulled-right"><i class="fa fa-user-plus m-r-10"></i> Create New User</a>
                    </div>
                </div>

                <hr class="m-t-0">

                <div class="card">
                    <div class="card-content">
                        <table class="table is-narrow">
                            <thead>
                            <tr>
                                <th>id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Date Created</th>
                                <th></th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach ($users as $user)
                                <tr>
                                <th>{{$user->id}}</th>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->created_at->toFormattedDateString()}}</td>
                                <td class="has-text-right"><a class="button is-outlined m-r-5" href="{{route('users.show', $user->id)}}">View</a><a class="button is-light" href="{{route('users.edit', $user->id)}}">Edit</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div> <!-- end of .card -->

                {{$users->links()}}
                
            </div>
        </div>
    </div>
</div>

@endsection