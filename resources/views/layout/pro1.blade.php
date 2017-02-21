@extends('layout.')
@sections('content')
<div class="centered">
<a href="{{route('life')}}">life</a>
<a href="{{route('hobby')}}">hobby</a>
<a href="{{route('choice')}}">choice</a>
<br>
<form>
<lable for="select-layout">i want to..</lable>
<select id ="select-layout" name="layout">
<option value="life">life</option>
<option value="hobby">hobby</option>
<option value="choice">choice</option>
<input type ="text" name="name"/>
<button type ="submit"></button>
</form>
</div>
