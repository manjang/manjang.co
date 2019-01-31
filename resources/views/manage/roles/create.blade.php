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
                <h1 class="title">Create New Role</h1>
              </div>
            </div>
            
            <form action="{{route('roles.store')}}" method="POST">
              {{ csrf_field() }}
              <div class="columns">
                <div class="column">
                  <div class="box">
                    <article class="media">
                      <div class="media-content">
                          <h2 class="title">Role Details:</h1>
                          <div class="field">
                            <p class="control">
                              <label for="display_name" class="label">Name (Human Readable)</label>
                              <input type="text" class="input" name="display_name" value="{{old('display_name')}}" id="display_name">
                            </p>
                          </div>
                          <div class="field">
                            <p class="control">
                              <label for="name" class="label">Slug (Can not be changed)</label>
                              <input type="text" class="input" name="name" value="{{old('name')}}" id="name">
                            </p>
                          </div>
                          <div class="field">
                            <p class="control">
                              <label for="description" class="label">Description</label>
                              <input type="text" class="input" value="{{old('description')}}" id="description" name="description">
                            </p>
                          </div>
                          <input type="hidden" :value="permissionsSelected" name="permissions">
                        
                      </div>
                    </article>
                  </div>
                </div>
              </div>

              <div class="columns">
                <div class="column">
                  <div class="box">
                    <article class="media">
                      <div class="media-content">
                        
                          <h2 class="title">Permissions:</h1>
                          <b-checkbox-group>
                            @foreach ($permissions as $permission)
                              <div class="field">
                                <b-checkbox v-model="permissionsSelected" :native-value="{{$permission->id}}">{{$permission->display_name}} <em>({{$permission->description}})</em></b-checkbox>
                              </div>
                            @endforeach
                          </ul>
                        
                      </div>
                    </article>
                  </div> <!-- end of .box -->

                  <button class="button is-primary">Create new Role</button>
                </div>
              </div>
            </form>
          </div>
        </div>
    </div>
</div>

@endsection


@section('scripts')
  <script>

  var app = new Vue({
    el: '#app',
    data: {
      permissionsSelected: []
    }
  });

  </script>
@endsection
