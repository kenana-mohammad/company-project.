@extends('backend.layout.master')
@section('content')
<div class="card shadow mb-4">
<div class="row">

<div class="card-header py-3 col-lg-10">
    <h4 class="m-0 font-weight-bold text-primary">All company </h4>
</div>

<div class="card-header py-3 col-lg-2">
<a href="{{route('company.create')}}" class="btn btn-success  "> Add company </a></div>
</div>
                     
@if(Session::has('add'))
                            <div class="alert alert-success" role="alert">
                            {{ session('add') }}
                          </div>@endif
                       
                        <div class="card-body">
                            <div class="table-responsive ">
                                
                                <table class="table table-bordered data-table" id="dataTable" >
                                    <thead>
                                        <tr> 
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>email</th>
                                            <th>phone</th>
                                            <th>Primary Image</th>
                                            <th>Action</th>
                                    
                                        </tr>
                                    </thead>
                               
                                    <tbody>
                                        @foreach($company as $companies)
                                        <tr>
                                            <td>{{$companies->id}}</td>
                                            <td>{{$companies->name}}</td>
                                            <td>{{$companies->email}}</td>
                                            <td>{{$companies->phone}}</td>

                                            <td>
                                                
                                                <img src="{{asset('storage/'.$companies->primary_image)}}" width="70px" height="70px" alt="">
                                            </td>

                              
                                         
                                            <td>   
                        
                     <a href="{{route('company.show',$companies->id)}}" class="btn btn-primary"> show </a>
                       
                  
                        </td>
                                  
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                     
                            </div>
                        </div>
                    </div>
@endsection