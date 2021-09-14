@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Edit Module tag</h1>
@stop

@section('content')
    <div class="container">
        <form action="POST" method="">
            <input type="hidden" name="id" value=""/>
            <div class="form-group">
              <label for="exampleFormControlInput1">Name</label>
              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter new name">
            </div>
        
          </form>
          <input type="submit" class="btn btn-warning" value="Update"/>
    </div>
@stop