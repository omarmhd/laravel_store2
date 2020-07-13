<div class="inbox_people">
    <div class="headind_srch">
      <div class="recent_heading">
        <h4>الاشخاص</h4>
      </div>
    </div>
    <div class="inbox_chat">
     
      @php
          $user = true;
      @endphp
      @foreach ($threads as $key => $thread)
        
        @if ($thread->withUser->id === $withUser->id)
          @php
             $user = false;
         @endphp
        @endif
        <div class="chat_list  @if ($thread->withUser->id === $withUser->id) active_chat @endif">
        <div class="chat_people">
          @if ($thread->lastMessage)
          <a href="/messenger/t/{{$thread->withUser->id}}" class="thread-link">
              <div class="
              @if (
                  !$thread->lastMessage->is_seen &&
                  $thread->lastMessage->sender_id != auth()->id()
              )
                  unseen
              @endif
              @if ($thread->withUser->id === $withUser->id)
                  current
              @endif
              ">


              <div class="chat_img"> <img src="{{ asset('profile/'.$thread->withUser->image) }}" alt="sunil"> </div>
              <div class="chat_ib">
                <h5 class="thread-user"> {{$thread->withUser->name}}</h5>
                <p>  @if ($thread->lastMessage->sender_id === auth()->id())
                  <i class="fa fa-reply" aria-hidden="true"></i>
              @endif
              {{substr($thread->lastMessage->message, 0, 20)}}</p>
              </div>
            
              </div>
          </a>
      @endif
      
        </div>
      </div>
   
      @endforeach
      @if ($user)
      <div class="chat_list  active_chat">
        <div class="chat_people">
   
          <a href="/messenger/t/{{$withUser->id}}" class="thread-link">
              <div class="">
              <div class="chat_img"> <img src="{{ asset('profile/'.$withUser->image) }}" alt="sunil"> </div>
              <div class="chat_ib">
                <h5 class="thread-user"> {{$withUser->name}}</h5>
                {{-- <p>  @if ($thread->lastMessage->sender_id === auth()->id())
                  <i class="fa fa-reply" aria-hidden="true"></i>
              @endif --}}
              {{-- {{substr($thread->lastMessage->message, 0, 20)}}</p> --}}
              </div>
            
              </div>
          </a>
      
        </div>
      </div>
      @endif
    

    </div>
  </div>