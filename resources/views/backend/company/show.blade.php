@extends('backend.layout.master')
@section('content')
<div class="row">
    <div class="col-lg-10">

    <h2 class="m-0 font-weight-bold text-primary">Show</h2>
        </div>
<div class="col-lg-2">
            <a class="btn btn-primary" href="{{ route('company.index') }}"> Back</a>
       
    </div>
</div>


<div class="card mb-3 m-5" style="max-width: 540px;">
  <div class="row g-0">
  <div class="col-md-4"> 
       
       <img src="{{asset('storage/'.$company->primary_image)}}" width="150px">
       </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">  {{ $company->name }}</h5>
        <p class="card-text"> <strong>email:</strong>
            {{ $company->email }}</p>
            <p class="card-text"> <strong>phone:</strong>
            {{ $company->phone }}</p>
            <!-- if secandary image Found -->
            @if ($secondaryImages->count() > 0)
    <h2>Secondary Images</h2>
    <div>
    <div class="row">
    <div class="col-md-3"> 

        @foreach ($secondaryImages as $secondaryImage)

            <img src="{{ asset('storage/' . $secondaryImage->secondary_images) }}" alt="Secondary Image" width="300px">
        @endforeach
    </div>
@else
    <p>No secondary images available.</p>
@endif
            
            <div> <div class="col-xs-12 col-sm-12 col-md-12">
     
    </div>
</div>
      </div>
    </div>
  </div>
</div>

@endsection