@extends('layouts.app')

@section('content')

    <h1>id:{{$message->id}}のメッセージ詳細ページ</h1>
    
    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <td>{{$message->id}}</td>
        </tr>
        <tr>
            <th>Title</th>
            <td>{{$message->title}}</td>
        </tr>
        <tr>
            <th>Message</th>
            <td>{{$message->content}}</td>
        </tr>
    </table>
    {!! link_to_route('messages.edit','このメッセージを編集',['id'=>$message->id],['class'=>'btn btn-light']) !!}

@endsection