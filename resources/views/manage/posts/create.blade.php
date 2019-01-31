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
            <div class="columns m-t-10 m-b-0">
              <div class="column">
                <h1 class="title is-admin is-4">Add New Blog Post</h1>
              </div>
              <div class="column">
                {{-- <a href="{{route('users.create')}}" class="button is-primary is-pulled-right"><i class="fa fa-user-plus m-r-10"></i> Create New User</a> --}}
              </div>
            </div>
            <hr class="m-t-0">

            <form action="{{route('posts.store')}}" method="post">
              {{ csrf_field() }}
              <div class="columns">
                <div class="column is-three-quarters-desktop is-three-quarters-tablet">
                  <b-field>
                    <b-input type="text" placeholder="Post Title" size="is-large" v-model="title">
                    </b-input>
                  </b-field>

                  <slug-widget url="{{url('/')}}" subdirectory="blog" :title="title" @copied="slugCopied" @slug-changed="updateSlug"></slug-widget>
                  <input type="hidden" v-model="slug" name="slug" />

                  <b-field class="m-t-40">
                    <b-input type="textarea"
                        placeholder="Compose your masterpiece..." rows="20">
                    </b-input>
                  </b-field>
                </div> <!-- end of .column.is-three-quarters -->

                <div class="column is-one-quarter-desktop is-narrow-tablet">
                  <div class="card card-widget">
                    <div class="author-widget widget-area">
                      <div class="selected-author">
                        <img src="https://placehold.it/50x50"/>
                        <div class="author">
                          <h4>Buba Manjang</h4>
                          <p class="subtitle">
                            (Software Developer)
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="post-status-widget widget-area">
                      <div class="status">
                        <div class="status-icon">
                          <b-icon icon="assignment" size="is-medium"></b-icon>
                        </div>
                        <div class="status-details">
                          <h4><span class="status-emphasis">Draft</span> Saved</h4>
                          <p>A Few Minutes Ago</p>
                        </div>
                      </div>
                    </div>
                    <div class="publish-buttons-widget widget-area">
                      <div class="secondary-action-button">
                        <button class="button is-info is-outlined is-fullwidth">Save Draft</button>
                      </div>
                      <div class="primary-action-button">
                        <button class="button is-primary is-fullwidth">Publish</button>
                      </div>
                    </div>
                  </div>
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
        title: '',
        slug: '',
        api_token: '{{Auth::user()->api_token}}'
      },
      methods: {
        updateSlug: function(val) {
          this.slug = val;
        },
        slugCopied: function(type, msg, val) {
          notifications.toast(msg, {type: `is-${type}`});
        }
      }
    });
  </script>
@endsection
