<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        .list-group{
            overflow-y: scroll;
            height: 200px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row" id="app">
            <div class="col-4 offset-4 offset-sm-1 col-sm-10">
                <li class="list-group-item active">Chat Room</li>
                <div class="badge badge-pill badge-primary" v-if="typing"> @{{ typing }} </div>
                <ul class="list-group" v-chat-scroll>
                    <message-component v-for="(message,index) in chat.message" :key = "index" :color="chat.color[index]" :user="chat.user[index]" :time="chat.time[index]">
                        @{{ message }}
                    </message-component>

                </ul>
                <input type="text" v-model="message" v-on:keyup.enter="send()" class="form-contrl col-12" placeholder="Type your message here...">
            </div>
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
