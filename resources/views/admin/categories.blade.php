@extends('layouts.admin')

@section('content')
<div class="col-lg-6">

    <div class="panel panel-default">
        <div class="panel-heading">
            @if(isset($acat))
            
            <h3 class="panel-title">Edit Category</h3>
            @else
            <h3 class="panel-title">Create New Category</h3>
            @endif
        </div>
        <div class="panel-body">
            @if(isset($acat))
            
             <form class="form-horizontal" method="post" action="{{url('/admin/cats/newcat')}}">
                {{ csrf_field() }}
                <input type="hidden" class="form-control" name="catid" value="{{$acat->cat_id}}">
                <div class="box-body">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-4 control-label">Category Code</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="catcode" id="inputEmail3" placeholder="Category Code" value="{{$acat->cat_code}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-4 control-label">Category Name</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="catname" value="{{$acat->cat_name}}" id="inputPassword3" placeholder="Category Name">
                        </div>
                    </div>
                    
                </div><!-- /.box-body -->
                <div class="box-footer">
                    
                    <button type="submit" class="btn btn-info pull-right">Save</button>
                </div><!-- /.box-footer -->
            </form>
            @else
           
           
            <form class="form-horizontal" method="post" action="{{url('/admin/cats/editcat')}}">
                {{ csrf_field() }}
                
                <div class="box-body">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-4 control-label">Category Code</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="catcode" id="inputEmail3" placeholder="Category Code">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-4 control-label">Category Name</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="catname" id="inputPassword3" placeholder="Category Name">
                        </div>
                    </div>
                    
                </div><!-- /.box-body -->
                <div class="box-footer">
                    
                    <button type="submit" class="btn btn-info pull-right">Save</button>
                </div><!-- /.box-footer -->
            </form>
             @endif
        </div>
    </div>
</div>


<!--Show the categories-->
@if(isset($cats))
<div class="">
    <table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>Cat ID</td>
            <td>Cat Code</td>
            <td>Cat Name</td>
            <td>Actions</td>
        </tr>
    </thead>
    <tbody>
    @foreach($cats as $key => $value)
        <tr>
            <td>{{ $value->cat_id }}</td>
            <td>{{ $value->cat_code }}</td>
            <td>{{ $value->cat_name }}</td>
            

            <!-- we will also add show, edit, and delete buttons -->
            <td>

                <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
                <!-- we will add this later since its a little more complicated than the other two buttons -->

                <!-- show the nerd (uses the show method found at GET /nerds/{id} -->
                

                <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
                <a class="btn btn-small btn-info" href="{{ '/admin/cats/?cid=' . $value->cat_id }}">Edit Now</a>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>

</div>
@endif
@endsection
