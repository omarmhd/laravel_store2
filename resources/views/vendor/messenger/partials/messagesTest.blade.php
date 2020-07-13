@php
$authId = auth()->id();
@endphp

@if ($messages)
    @foreach ($messages as $key => $message)
    @if ($message->sender_id !== $authId)
    <div class="incoming_msg message-row">
        <div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
        <div class="received_msg">
          <div class="received_withd_msg">
            <p title="{{date('d-m-Y h:i A' ,strtotime($message->created_at))}}"class="sent">
                {{$message->message}}
            </p>
            <i class="fa fa-ellipsis-h fa-2x pull-right" aria-hidden="true">
                <div class="delete" data-id="{{$message->id}}">حذف</div>
            </i>
        </div>
      </div>
    </div>
      @else
      <div class="outgoing_msg message-row">
        <div class="sent_msg">
            <p title="{{date('d-m-Y h:i A' ,strtotime($message->created_at))}}" class="received">{{$message->message}}</p>
            <i class="fa fa-ellipsis-h fa-2x pull-right" aria-hidden="true">
                <div class="delete" data-id="{{$message->id}}">حذف</div>
            </i>
         </div>
    </div>
      @endif



  @endforeach
  @endif