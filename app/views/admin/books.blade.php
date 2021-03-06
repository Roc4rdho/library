@extends('layouts.admin')

{{-- web site title --}}
@section('title')
@parent
books
@stop

{{-- website content --}}
@section('content')

    <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <form role="search">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search">
      </div>
    </form>
    <ul class="nav menu">
      <li><a href="{{URL::to('admin')}}"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Dashboard</a></li>
      <li class="parent ">
        <a class="active" href="{{URL::to('admin/books')}}">
          <span data-toggle="collapse" href="#sub-item-1"><svg class="glyph stroked folder"><use xlink:href="#stroked-folder"/></svg></span> Manage Books 
        </a>
        <ul class="children collapse" id="sub-item-1">
          <li>
            <a class="" href="{{URL::to('admin/addbook')}}">
              <svg class="glyph stroked plus sign"><use xlink:href="#stroked-plus-sign"/></svg> Add Book
            </a>
          </li>
        </ul>
      </li>
      <li class="parent ">
        <a href="{{URL::to('admin/students')}}">
          <span data-toggle="collapse" href="#sub-item-2"><svg class="glyph stroked female user"><use xlink:href="#stroked-female-user"/></svg></span> Manage Students 
        </a>
        <ul class="children collapse" id="sub-item-2">
          <li>
            <a class="" href="{{URL::to('admin/addstudent')}}">
              <svg class="glyph stroked plus sign"><use xlink:href="#stroked-plus-sign"/></svg> Add Student
            </a>
          </li>
        </ul>
      </li>
      <li class="parent ">
        <a class="" href="{{URL::to('admin/employees')}}">
          <span data-toggle="collapse" href="#sub-item-3"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg></span> Manage Employees
        </a>
        <ul class="children collapse" id="sub-item-3">
          <li>
            <a class="" href="{{URL::to('admin/addemployee')}}">
              <svg class="glyph stroked plus sign"><use xlink:href="#stroked-plus-sign"/></svg> Add Employee
            </a>
          </li>
        </ul>
      </li>
    </ul>
  </div><!--/.sidebar-->
  
  <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">   
    <div class="row">
      <ol class="breadcrumb">
        <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
        <li class="active"><a href="#">Books</a></li>
      </ol>
    </div><!--/.row-->
    
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading"> Books</div>
          <div class="panel-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ISBN</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th>No. of Copies</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($books as $b)
                    <tr>
                        <td>{{$b->isbn}}</td>
                        <th>{{$b->bk_title}}</th>
                        <td>{{$b->bk_author}}</td>
                        <td>{{$b->numb_of_copy}}</td>
                        <td>
                          <a href="{{URL::to('admin/updatebook/'. $b->id . '/' . $b->isbn)}}" class="btn btn-sm btn-primary"> Edit</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
          </div>
        </div>
        
      </div><!--/.col-->
    </div><!--/.row-->
  </div>  <!--/.main-->

@stop
