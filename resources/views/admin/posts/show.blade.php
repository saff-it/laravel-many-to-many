
<div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">{{$post -> title}}</h5>
      <h6 class="card-title">Tags:
          @if (isset($post->tags))
          @foreach ($post->tags as $tag)
              {{ $tag->name }}
          @endforeach
          @endif
      </h6>
      <p class="card-text">{{$post -> post_content}}</p>
    </div>
  </div>

