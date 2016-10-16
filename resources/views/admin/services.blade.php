@extends('layouts.admin')

@section('content')
<div class="nav-tabs-custom">
    <ul class="nav nav-tabs">
        <li class="active"><a href="#Ser_List" data-toggle="tab">Service List</a></li>
        <li><a href="#newservice" data-toggle="tab">New Service</a></li>
        <li><a href="#price" data-toggle="tab">Prices</a></li>

    </ul>
    <div class="tab-content">
        <div class="tab-pane active" id="Ser_List">
            @if(isset($services))
            <div class="">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>SN</th>
                            <th>Service Name</th>
                            <th>Service Code</th>
                            <th>Category Code</th>
                            <th>Edit</th>
                            <th>Add Logo</th>
                        </tr>
                    </thead>
                    <tbody>
                       
                        @foreach($services as $key => $value)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{ $value->ser_name }}</td>
                            <td>{{ $value->ser_code }}</td>
                            <td>{{ $value->cat_name }}</td>
                            <td><a href="{{'/service/?sercode='.$value->ser_code}}">Edit </a></td>
                            

                            <!-- we will also add show, edit, and delete buttons -->
                            <td>

                                <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
                                <!-- we will add this later since its a little more complicated than the other two buttons -->

                                <!-- show the nerd (uses the show method found at GET /nerds/{id} -->


                                <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
                                <a class="btn btn-small btn-info" href="{{ '/service?sercode=' . $value->ser_code }}">Add Logo</a>

                            </td>
                        </tr>
                        
                        @endforeach
                    </tbody>
                </table>

            </div>
            @endif
            
            
        </div><!-- /.tab-pane -->
        <div class="tab-pane" id="newservice">

            <form class="form-horizontal" method="post" action="{{url('/admin/service/NewService')}}">
                {{ csrf_field() }}

                <div class="box-body">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-4 control-label">Service Code</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="sercode" id="inputEmail3" placeholder="Service Code" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-4 control-label">Service Name</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="sername" value="" id="inputPassword3" placeholder="Service Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-4 control-label">Service Category</label>
                        <div class="col-sm-8">
                            <select name="catcode" class="form-control">
                                @foreach($cats as $key => $value)
                                <option value="{{$value->cat_code}}">{{$value->cat_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div><!-- /.box-body -->
                <div class="box-footer">

                    <button type="submit" class="btn btn-info pull-right">Save</button>
                </div><!-- /.box-footer -->
            </form>

        </div><!-- /.tab-pane -->
        <div class="tab-pane" id="price">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
            when an unknown printer took a galley of type and scrambled it to make a type specimen book.
            It has survived not only five centuries, but also the leap into electronic typesetting,
            remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
            sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
            like Aldus PageMaker including versions of Lorem Ipsum.
        </div><!-- /.tab-pane -->
    </div><!-- /.tab-content -->
</div>

@endsection
