@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                   
                    <form action="" method="post">
                    @csrf
                        <h2>
                            Title
                        </h2>
                      
                        <input type="text" value="{{$post[0]->title}}">
                        <h2>
                            Body
                        </h2>
                        <input type="text" value="{{$post[0]->body}}">
                        <button>Edit post</button>
                    </form>
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