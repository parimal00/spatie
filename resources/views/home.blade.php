@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>

            <div class="card">
                <div class="card-header">Posts</div>

                <div class="card-body">
                  <table>
                      <tr>
                          <th>Title</th>
                          <th>Body</th>
                          <th>Writen By</th>

                      </tr>
                      @foreach($posts as $post)
                    <tr>
                        <td>{{$post->title}}</td>
                        <td>{{$post->body}}</td>
                        <td>{{$post->name}}</td>
                        @role('editor')
                       <td> <a href="edit/{{$post->post_id}}"> Edit</a></td>
                       @endrole
                    </tr>
                    @endforeach
                  </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<style>
    table{
       
        width: 100%;
    }
    th{
        
        width:30%;
        padding:20px;
    }
    td{
        
        width:30%;
        padding:20px;
    }
    </style>