@extends('layouts.main')
@section('content')
<form action="{{route('post.store')}}" method="post">
    @csrf
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" name="title" class="form-control" id="title" placeholder="title">
    </div>

  <label for="post_content">Content</label>
    <textarea name="content" class="form-control" id="post_content" placeholder="Post_Content"></textarea>
    </div>


  <label for="image">Image</label>
    <input type="text" name="image" class="form-control" id="image" placeholder="image">
    </div>
  <div class="form-group">
    <label for="category">Category</label>
    <select class="form-control" id="category" name = "category_id">
      @foreach($categories as $category)
      <option value = "{{$category->id}}">{{$category->title}}</option>
      @endforeach
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Create</button>
</form>
@endsection