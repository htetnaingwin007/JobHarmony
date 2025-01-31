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
            <li class="breadcrumb-item"><a href="{{route('backend.companyprofile.index')}}">Companyprofiles</a></li>
            
            <li class="breadcrumb-item active">Update</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Companyprofile Update
            </div>
            <div class="card-body">
                <form action="{{route('backend.companyprofile.update',$companyprofile->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="mb-3">
                        <label for="name" class="form-label">Company Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{$companyprofile->name}}">
                        @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Company Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{$companyprofile->email}}">
                        @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="phone" class="form-label">Company Phone</label>
                        <input type="number" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{$companyprofile->phone}}">
                        @error('phone')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="website" class="form-label">Company Website</label>
                        <input type="text" class="form-control @error('website') is-invalid @enderror" id="website" name="website" value="{{$companyprofile->website}}">
                        @error('website')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="mb-3">
                        <label for="facebook" class="form-label">Facebook</label>
                        <input type="text" class="form-control @error('facebook') is-invalid @enderror" id="facebook" name="facebook" value="{{$companyprofile->facebook}}">
                        @error('facebook')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="twitter" class="form-label">Twitter</label>
                        <input type="text" class="form-control @error('twitter') is-invalid @enderror" id="twitter" name="twitter" value="{{$companyprofile->twitter}}">
                        @error('twitter')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="linkin" class="form-label">LinkedIn</label>
                        <input type="text" class="form-control @error('linkin') is-invalid @enderror" id="linkin" name="linkin" value="{{$companyprofile->linkin}}">
                        @error('linkin')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="image-tab" data-bs-toggle="tab" data-bs-target="#image-tab-pane" type="button" role="tab" aria-controls="image-tab-pane" aria-selected="true">Image</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="new_image-tab" data-bs-toggle="tab" data-bs-target="#new_image-tab-pane" type="button" role="tab" aria-controls="new_image-tab-pane" aria-selected="false">New Image</button>
                            </li>
                            
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="image-tab-pane" role="tabpanel" aria-labelledby="image-tab" tabindex="0">
                                <img src="{{$companyprofile->logo}}" alt="" class="w-25 h-25 m-2">
                                <input type="hidden" name="old_image" id="" value="{{$companyprofile->logo}}">
                            </div>
                            <div class="tab-pane fade" id="new_image-tab-pane" role="tabpanel" aria-labelledby="new_image-tab" tabindex="0">
                                <input type="file" accept="image/*" class="m-2 form-control @error('image') is-invalid @enderror" id="image" aria-label="Upload" name="logo">
                            </div>
                                
                        </div>
                    </div>

                    

                    <div class="mb-3">
                        <label for="tagline" class="form-label">Company Tagline</label>
                        <input type="text" class="form-control @error('tagline') is-invalid @enderror" id="tagline" name="tagline" value="{{$companyprofile->tagline}}">
                        @error('tagline')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="mb-3">
                        <div class="">
                            <label for="description" class="form-label">Descriptions</label>
                            <textarea class="form-control @error('description') is-invalid @enderror" id="description" style="height: 100px" name="description">{{$companyprofile->description}}</textarea>
                        </div>
                        @error('description')
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