@extends('layouts.app')

@section('content')

    <h1>メッセージ一覧</h1>
    
    
    
    @if(count($messages)>0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Title</th>
                    <th>Message</th>
                </tr>
            </thead>
            <tbody>
                @foreach($messages as $message)
                <tr>
                    <td>{!! link_to_route('messages.show',$message->id,['id'=>$message->id]) !!}</td>
                    <td style="white-space: nowrap">{{$message->title}}</td>
                    <td>{{$message->content}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    {!! link_to_route('messages.create','新規メッセージの投稿',null,['class'=>'btn btn-primary pull-right']) !!}

@endsection