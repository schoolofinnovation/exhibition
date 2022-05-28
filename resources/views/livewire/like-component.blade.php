@guest
    <a href="{{asset('/login')}}"><i class="bi bi-hand-thumbs-up" aria-hidden="true"></i> likes</a>
        
    @else
        <a href="#" onclick="document.getElementById('like-form-{{$post->user->id}}').submit();">	
        <i class="bi bi-hand-thumbs-up" aria-hidden="true"></i> 
        </a>
        <form action="{{route('post.like',$post->user->id)}}" method="POST" style="display:none" id="like-form-{{$post->user->id}}">
            @csrf
        </form>
        
    @endguest