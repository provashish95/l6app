@extends('layouts.posts')
@section('titlr','Create new post')
@section('content')
@component('components.message',['title'=>'<span>Component Title</span>'])
This is a slot message
@endcomponent

<form action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    Name:  <input type="text" name="name">
    @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <br><br>
    Email: <input type="text" name="email" value="<?php echo old('email') ;?>">
    <br>
    @error('email')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
<br><br>
    <label for="">computer:<input type="checkbox" name="check['computer']['id']" value="computer"></label>
    <label for="">civil:<input type="checkbox" name="check['computer']['id']" value="civil"></label>
    <label for="">bangla:<input type="checkbox" name="check['bangla']['id']" value="bangla"></label>
    <label for="">english:<input type="checkbox" name="check['english']['id']" value="english"></label>
    @error('check')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <br><br>
    <label for="">Accept TOS:<input type="checkbox" name="tos" value="0"></label>
    @error('tos')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <br><br>
    <label for="">Start Date:<input type="date" name="start_date"></label>
    @error('start_date')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <br>
    <br>
    <label for="">End Date:<input type="date" name="end_date"></label>
    @error('end_date')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <br>
    <br>


    <label for="">website url:<input type="url" name="website"></label>
    @error('website')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <br>
    <label for="title">Post Title</label>

    <input id="title" type="text" class="@error('title') is-invalid @enderror">

    @error('title')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <br><br>
    <input type="submit" name="submit">
</form>
@endsection
