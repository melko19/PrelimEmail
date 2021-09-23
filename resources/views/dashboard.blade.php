@extends('base')
<img src="/images/sas.jpg" alt="">
@section('content')
    <div class="container fixed-bottom ">
        <h1 style="text-align:center;">Welcome to Dashboard</h1>
        <hr>
        
    </div>
@endsection
<style>
    .container{
        margin-bottom:10%;
    }
    img{
        width:100%;
        height:100%;
        background-position:cover;
	    background-repeat: no-repeat;
    }
    .container h1{
        margin-top:10%;
    }
    .container a{
        margin-left:50%;
        transform: translateX(-50%);
        color: #fff;
        background: grey;
        padding:6px 12px; 
        font-size: 1em;
        font-weight: 100;
    }
    .container a:hover{
        background: red;
    }
</style>