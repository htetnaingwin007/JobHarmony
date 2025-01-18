@extends('layouts.admin')
@section('content')
<div class="container-fluid px-4">
        <div class="my-3">
            <h1 class="mt-4 d-inline">Items</h1>
            <a href="{{route('backend.jobpost.index')}}" class="btn btn-danger float-end">
                Cancel
            </a>

        </div>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('backend.dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{route('backend.jobpost.index')}}">Jobpost</a></li>
            
            <li class="breadcrumb-item active">Create Jobpost</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Post Lists
            </div>
            <div class="card-body">
                <form action="{{route('backend.jobpost.store')}}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="title" class="form-label">title</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{old('title')}}">
                        @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" accept="image/*" class="form-control @error('image') is-invalid @enderror" id="image" aria-label="Upload" name="image" value="{{old('image')}}">
                        @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="company_id" class="form-label">Company</label>
                        <input type="text" class="form-control @error('company_id') is-invalid @enderror" id="company_id" name="company_id" value="{{old('company_id')}}">
                        @error('company_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{old('email')}}">
                        @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="location_id" class="form-label">Region</label>
                        <select class="form-select @error('location_id') is-invalid @enderror" id="category" name="location_id">
                            <option value="" selected>Choose Region</option>
                            @foreach($joblocations as $joblocation)
                            <option value="{{$joblocation->id}}" {{old('location_id') == $joblocation->id ? 'selected':''}}>{{$joblocation->location}}</option>
                            @endforeach
                        </select>
                        @error('location_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="type_id" class="form-label">Types</label>
                        <select class="form-select @error('type_id') is-invalid @enderror" id="category" name="type_id">
                            <option value="" selected>Choose Region</option>
                            @foreach($jobtypes as $type)
                            <option value="{{$type->id}}" {{old('type_id') == $type->id ? 'selected':''}}>{{$type->type}}</option>
                            @endforeach
                        </select>
                        @error('type_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <div class="">
                            <label for="description" class="form-label">Descriptions</label>
                            <textarea class="form-control @error('description') is-invalid @enderror" id="description" style="height: 100px" name="description">{{old('description')}}</textarea>
                        </div>
                        @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>  

                    <div class="mb-3">
                        <div class="">
                            <label for="qualification" class="form-label">Qualification</label>
                            <textarea class="form-control @error('qualification') is-invalid @enderror" id="qualification" style="height: 100px" name="qualification">{{old('qualification')}}</textarea>
                        </div>
                        @error('qualification')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>  
                    
                    <div class="mb-3">
                        <div class="">
                            <label for="responsibility" class="form-label">Responsibility</label>
                            <textarea class="form-control @error('responsibility') is-invalid @enderror" id="responsibility" style="height: 100px" name="responsibility">{{old('responsibility')}}</textarea>
                        </div>
                        @error('responsibility')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>  

                    <div class="mb-3">
                        <label for="experience" class="form-label">Experience</label>
                        <input type="text" class="form-control @error('experience') is-invalid @enderror" id="experience" name="experience" value="{{old('experience')}}">
                        @error('experience')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="salary" class="form-label">Salary</label>
                        <input type="number" class="form-control @error('salary') is-invalid @enderror" id="salary" name="salary" value="{{old('salary')}}">
                        @error('salary')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <div class="">
                            <label for="benefits" class="form-label">Benefits</label>
                            <textarea class="form-control @error('benefits') is-invalid @enderror" id="benefits" style="height: 100px" name="benefits">{{old('benefits')}}</textarea>
                        </div>
                        @error('benefits')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>  

                    <div class="mb-3">
                        <label for="gender" class="form-label">Gender</label>
                        <select class="form-select @error('gender') is-invalid @enderror" id="gender" name="">
                            <option value="" selected>Choose Region</option>
                            
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="any">Any</option>
                            
                        </select>
                        @error('gender')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="vacancy" class="form-label">Vacancy</label>
                        <input type="number" class="form-control @error('vacancy') is-invalid @enderror" id="vacancy" name="vacancy" value="{{old('vacancy')}}">
                        @error('vacancy')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="deadline" class="form-label">Deadline</label>
                        <input type="date" class="form-control @error('deadline') is-invalid @enderror" id="deadline" name="deadline" value="{{old('deadline')}}">
                        @error('deadline')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <input type="text" class="form-control @error('status') is-invalid @enderror" id="status" name="status" value="{{old('status')}}">
                        @error('status')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3 row mx-1">
                        <button class="btn btn-lg btn-primary">Save</button>
                    </div>
                    </form>
            </div>
        </div>
        
    </div>
    <div>

</div>
@endsection