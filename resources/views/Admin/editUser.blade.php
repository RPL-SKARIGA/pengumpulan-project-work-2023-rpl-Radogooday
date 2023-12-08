@extends('main')
<div class="section" style="background-color: #13151d">
<div class="container" style="background-color: #13151d; min-height: 1001px">
    <div class="row">
        <div class="col-8">
            <h2 class="my-3" style="color: white">Change Role</h2>
            <form action="/admin/update/{{ $data->id_user }}" method="post" enctype="multipart/form-data">
    
                @csrf

                <div class="row mb-3" style="color: white">
                    <label for="id" class="col-sm-2 col-form-label">ID</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="id" name="id" value="{{ $data->id_user }}" @readonly(true)>
                        <div class="invalid-feedback">
                            
                        </div>
                    </div>
                </div>

                <div class="row mb-3" style="color: white">
                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" name="name" value="{{ $data->name }}" @readonly(true)>
                        <div class="invalid-feedback">
                            
                        </div>
                    </div>
                </div>

                <div class="row mb-3" style="color: white">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="email" name="email" value="{{ $data->email }}" @readonly(true)>
                        <div class="invalid-feedback">
                            
                        </div>
                    </div>
                </div>

                <div class="row mb-3" style="color: white">
                    <label for="isAdmin" class="col-sm-2 col-form-label">Role</label>
                    <div class="col-sm-10">
                        <select name="isAdmin" id="isAdmin" class="form-select" aria-label="Default select example">
                            <option value="0" {{ $data->isAdmin == 0 ? 'selected' : '' }}>Not Admin</option>
                            <option value="1" {{ $data->isAdmin == 1 ? 'selected' : '' }}>Admin</option>
                        </select>
                        <div class="invalid-feedback">
                            
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Edit Role</button>
            </form>
        </div>
    </div>
</div>
</div>