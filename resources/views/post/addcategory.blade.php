@extends('welcome')

@section('content')
	<div class="container">
		<div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <a href="{{URL::to('/add_category')}}" class="btn btn-danger">Add Category</a>
        <a href="{{URL::to('/all_category')}}" class="btn btn-info">All Category</a>
        <hr>
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
  @endif
        <form action="{{URL::to('/store_category')}}" method="post">
          @csrf
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Category Name</label>
              <input type="text" class="form-control" placeholder="Please Enter Post Category" name="name" >
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <br>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Slug Name</label>
              <input type="text" class="form-control" placeholder="Please Enter Post Slug" name="slug">
              <p class="help-block text-danger"></p>
            </div>
          </div> 
          <br>
 
          <div id="success"></div>
          <button type="submit" class="btn btn-primary" >Ad Category</button>
        </form>
      </div>
    </div>
    </div>
@endsection