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
            <h1 class="title">Create User</h1>

            <form action="{{ route('users.store') }}" method="POST">
                <div class="field">
                    <label for="name" class="label">Name</label>
                    <p class="control">
                        <input type="text" class="input" name="name" id="name" placeholder="Full Name">
                    </p>
                </div>

                <div class="field">
                    <label for="email" class="label">Email</label>
                    <p class="control">
                        <input type="email" class="input" name="email" id="email" placeholder="Email Address">
                    </p>
                </div>

                <div class="field">
                    <label for="password" class="label">Password</label>
                    <p class="control">
                        <input type="password" class="input" name="password" id="password">
                        <b-checkbox name="auto_generate" :checked="true">Auto Generate Password</b-checkbox>
                    </p>
                </div>

                <button class="button is-success">Create User</button>
            </form>
        </div>
    </div>
</div>

@endsection