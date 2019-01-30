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
            <h1 class="title">Edit User</h1>

            <form action="{{ route('users.update', $user->id) }}" method="POST">
                {{ method_field('PUT') }}
                {{ csrf_field() }}
                <div class="field">
                    <label for="name" class="label">Name</label>
                    <p class="control">
                        <input type="text" class="input" name="name" id="name" value="{{ $user->name }}">
                    </p>
                </div>

                <div class="field">
                    <label for="email" class="label">Email</label>
                    <p class="control">
                        <input type="email" class="input" name="email" id="email" value="{{ $user->email }}">
                    </p>
                </div>

                <div class="field">
                    <label for="password" class="label">Password</label>
                    <b-radio-group v-model="password_options">
                        <div class="field">
                            <b-radio name="password_options" value="keep">Do Not Change Password</b-radio>
                        </div>
                        <div class="field">
                            <b-radio name="password_options" value="auto">Auto-Generate New Password</b-radio>
                        </div>
                        <div class="field">
                            <b-radio name="password_options" value="manual">Manually Set New Password</b-radio>
                            <p class="control">
                                <input type="text" class="input" name="password" id="password" v-if="password_options == 'manual'" placeholder="Manually give a password to this user">
                            </p>
                        </div>
                    </b-radio-group>
                </div>

                <button class="button is-primary">Edit User</button>
            </form>
        </div>
    </div>
</div>

@endsection


@section('scripts')
    <script>
        var app = new Vue({
            el: '#app',
            data: {
                password_options: 'keep'
            }
        });
    </script>
@endsection