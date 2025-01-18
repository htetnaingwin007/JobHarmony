@extends('layouts.admin')
@section('content')
<div class="container-fluid px-4">
        <div class="my-3">
            <h1 class="mt-4 d-inline">Job Types</h1>
            <a href="{{route('backend.jobpost.index')}}" class="btn btn-danger float-end">
                Cancel
            </a>

        </div>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('backend.dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{route('backend.jobtype.index')}}">JobTypes</a></li>
            
            <li class="breadcrumb-item active">Create</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                    Job Type Lists
            </div>
            <div class="card-body">
                <form action="{{route('backend.jobtype.update',$jobtype->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="mb-3">
                        <label for="type" class="form-label">Job Type</label>
                        <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" name="type" value="{{$jobtype->type}}">
                        @error('type')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3 row mx-1">
                        <button class="btn btn-lg btn-primary">Update</button>
                    </div>
                    </form>
            </div>
        </div>
        
    </div>
    <div>

</div>
@endsection