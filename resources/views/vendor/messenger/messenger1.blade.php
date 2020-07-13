@extends('layouts.app')

@section('css-styles')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('vendor/messenger/css/messenger.css') }}">
    
<style>
        .container{max-width:1170px; margin:auto;}
        img{ max-width:100%;}
        .inbox_people {
        background: #f8f8f8 none repeat scroll 0 0;
        float: right;
        overflow: hidden;
        width: 40%; border-right:1px solid #c4c4c4;
        }
        .inbox_msg {
        border: 1px solid #c4c4c4;
        clear: both;
        overflow: hidden;
        }
        .top_spac{ margin: 20px 0 0;}


        .recent_heading {
    float: right;
    /* width: 40%; */
}
        .srch_bar {
        display: inline-block;
        text-align: right;
        width: 60%; padding:
        }
        .headind_srch{ padding:10px 29px 10px 20px; overflow:hidden; border-bottom:1px solid #c4c4c4;}

        .recent_heading h4 {
        color: #05728f;
        font-size: 21px;
        margin: auto;
        }
        .srch_bar input{ border:1px solid #cdcdcd; border-width:0 0 1px 0; width:80%; padding:2px 0 4px 6px; background:none;}
        .srch_bar .input-group-addon button {
        background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
        border: medium none;
        padding: 0;
        color: #707070;
        font-size: 18px;
        }
        .srch_bar .input-group-addon { margin: 0 0 0 -27px;}

        .chat_ib h5{ font-size:15px; color:#464646; margin:0 0 8px 0;}
        .chat_ib h5 span{ font-size:13px; float:right;}
        .chat_ib p{ font-size:14px; color:#989898; margin:auto}
        .chat_img {
            float: right;
        width: 11%;
        }
        .chat_ib {
            float: right;
        padding: 0 0 0 15px;
        /* width: 88%; */
        }

        .chat_people{ overflow:hidden; clear:both;}
        .chat_list {
        border-bottom: 1px solid #c4c4c4;
        margin: 0;
        padding: 18px 16px 10px;
        }
        .inbox_chat { height: 550px; overflow-y: scroll;}

        .active_chat{ background:#ebebeb;}

        .incoming_msg_img {
        display: inline-block;
        width: 6%;
        }
        .received_msg {
        display: inline-block;
        padding: 0 0 0 10px;
        vertical-align: top;
        width: 92%;
        }
        .received_withd_msg p {
        background: #ebebeb none repeat scroll 0 0;
        border-radius: 3px;
        color: #646464;
        font-size: 14px;
        margin: 0;
        padding: 5px 10px 5px 12px;
        width: 100%;
        }
        .time_date {
        color: #747474;
        display: block;
        font-size: 12px;
        margin: 8px 0 0;
        }
        .received_withd_msg { width: 57%;}
        .mesgs {
        float: left;
        padding: 30px 15px 0 25px;
        width: 60%;
        }

        .sent_msg p {
        background: #05728f none repeat scroll 0 0;
        border-radius: 3px;
        font-size: 14px;
        margin: 0; color:#fff;
        padding: 5px 10px 5px 12px;
        width:100%;
        }
        .outgoing_msg{ overflow:hidden; margin:26px 0 26px;}
        .sent_msg {
        float: right;
        width: 46%;
        }
        .input_msg_write input {
        background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
        border: medium none;
        color: #4c4c4c;
        font-size: 15px;
        min-height: 48px;
        width: 100%;
        }

        .type_msg {border-top: 1px solid #c4c4c4;position: relative;}
        .msg_send_btn {
    background: #05728f none repeat scroll 0 0;
    border: medium none;
    border-radius: 50%;
    color: #fff;
    cursor: pointer;
    font-size: 17px;
    height: 33px;
    position: absolute;
    left: 10px;
    top: 11px;
    width: 33px;
}
        .messaging { padding: 0 0 50px 0;}
        .msg_history {
        height: 516px;
        overflow-y: auto;
        }
</style>
@endsection

@section('content')
<div class="container">
    <h3 class=" text-center">الرسائل</h3>
   
    <div class="messaging">
        
          <div class="inbox_msg">
            @include('messenger::partials.threadsTest')
            <div class="mesgs">
              <div class="msg_history messenger-body messenger">
                @include('messenger::partials.messagesTest')
              </div>
              <div class="type_msg">
                  
                <div class="input_msg_write">
                  <input type="hidden" name="receiverId" value="{{$withUser->id}}">
                  <textarea id="message-body" name="message" rows="2" placeholder="اكتب هنا....."></textarea>
                  {{-- <input type="text" class="write_msg" id="message-body" name="message" placeholder="اكتب هنا....." /> --}}
                  <button class="msg_send_btn" type="submit" id="send-btn"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
                </div>
              </div>

              {{-- <div class="panel-footer">
                <input type="hidden" name="receiverId" value="{{$withUser->id}}">
                <textarea id="message-body" name="message" rows="2" placeholder="Type your message..."></textarea>
                <button type="submit" id="send-btn" class="btn btn-primary">SEND</button>
            </div> --}}

            </div>
          </div>
          
    
        </div>
    </div>
</div>


{{-- <div class="container">
    <div class="row">
        <div class="col-md-3 threads">
            @include('messenger::partials.threads')
        </div>

        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading"><h4>{{$withUser->name}}</h4></div>

                <div class="panel-body">
                    <div class="messenger">
                         @if( is_array($messages) )
                            @if (count($messages) === 20)
                                <div id="messages-preloader"></div>
                            @endif

                            <div id="messages-preloader"></div>
                        @else
                            <p class="start-conv">Conversation started</p>
                        @endif
                        <div class="messenger-body">
                            @include('messenger::partials.messages')
                        </div>
                    </div>
                </div>

                <div class="panel-footer">
                    <input type="hidden" name="receiverId" value="{{$withUser->id}}">
                    <textarea id="message-body" name="message" rows="2" placeholder="Type your message..."></textarea>
                    <button type="submit" id="send-btn" class="btn btn-primary">SEND</button>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-heading"><h4>Profile</h4></div>

                <div class="panel-body">
                    <p>
                        <span>Name</span> {{$withUser->name}}
                    </p>
                    <p>
                        <span>Email</span> {{$withUser->email}}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div> --}}

@endsection

@section('js-scripts')
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src=" {{ asset('vendor/messenger/js/pusher.min.js') }}"></script>
    <script type="text/javascript">
        var withId        = {{$withUser->id}},
            authId        = {{auth()->id()}},
            messagesCount = {{is_array($messages) ? count($messages) : '0'}};
            pusher        = new Pusher('{{config('messenger.pusher.app_key')}}', {
              cluster: '{{config('messenger.pusher.options.cluster')}}'
            });
    </script>
    <script src="{{ asset('vendor/messenger/js/messenger-chat.js') }}" charset="utf-8"></script>
@endsection
