@extends('backend.layout.master')
@section('content')
<div class="panel-body px-5">
<h4 class="m-0 font-weight-bold text-primary">Add company </h4>

  
                            <div class="row">
                                <div class="col-lg-12 py-3">
                                    <form action="{{route('company.store')}}" method="POST"  enctype="multipart/form-data" >
                                        @csrf
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" class="form-control"  placeholder="Name" name="name" value="{{old('name')}}">
                                        </div>

                                        <div class="form-group">
                                        <label for="email">email </label>
                                <input type="email"  class="form-control"  placeholder="email" name="email" id="email" required>
  </div>

                                        <div class="form-group">
                                        <label for="phone_number">phone </label>
                               <input type="text"   class="form-control"  placeholder="phone" name="phone" id="phoner" required>
     </div>

 
                                      
                                        <div class="form-group">
                                            <label>image primary</label>
                                            <div class="input-group">
                                            <input type="file" class="form-control"  name="primary_image" id="primary_image" >
                                                            </div>
                        
                                        </div>
                                        <!-- secandary image -->
                                        <div class="form-group">
                                            <label>image secandary</label>
                                            <div class="input-group">
                                            <input type="file" class="form-control" name="secondary_images[]" id="secondary_images" multiple>
                                                            </div>
                        
                                        </div>
                                    
                               
                                  
                                      
                                      
                                      
                                     
                                        <button type="submit" class="btn btn-primary">Add company </button>
                                        <button type="submit" class="btn btn-secondary">Cancle</button>
                                    </form>
                                </div>
@endsection
