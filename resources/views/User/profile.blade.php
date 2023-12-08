@extends('main')
<link rel="stylesheet" href="{{ asset('css/User/profile.css') }}">

<div class="content">
    <div class="container" style="max-width: 720px; min-height: 1001px">
        <div class="col d-flex p-4">
            <a href="/" class="back">
                <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor" class="bi bi-arrow-left mx-3" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8"/>
                </svg>
            </a>
            Edit Profile
        </div>
    <form action="{{ route('user.Update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="profileIMG mx-5">
            <div class="py-2 mt-1 d-flex-col">
                <p>Photo Profile</p>
                <div class="photo-profile">
                    <div class="profile-dtl">
                        @if (Auth::user()->photo)
                            <a href="" onclick="document.getElementById('fileInput').click(); return false;"><img src="{{ asset('/storage/photo/' . Auth::user()->photo) }}" alt="" height="90px" width="90px" style="border-radius: 100%" class="photo-display-after"/></a>
                        @else
                            <a href="" onclick="document.getElementById('fileInput').click(); return false;"><img src="{{ asset('/img/blank.jpg') }}" alt="" height="90px" width="90px" style="border-radius: 100%" id="profileImg" class="photo-display-before"/></a>
                        @endif
                    </div>
                    <input type="file" class="inputIMG" name="photo" id="fileInput" style="display: none;" onchange="handleFileSelect(this)">
                </div>
            </div>
        </div>
        
        <div class="mx-4">
            <p class="mx-4" style="height: 10px">Username</p>
            <div class="mb-4 mx-5 d-flex-col">
                <input type="text" id="name" name="name" class="field-data" value="<?= Auth::user()->name ?>">
            </div>

            <p class="mx-4" style="height: 10px">Email</p>
            <div class="mb-4 mx-5 d-flex-col">
                <input type="text" id="email" name="email" class="field-data" value="<?= Auth::user()->email ?>">
            </div>
        </div>
            
        <div class="mx-4">
            <p class="mx-4" style="height: 10px">Phone Number</p>
            <div class="mb-4 mx-5 d-flex-col">
                <input type="text" id="number" name="number" class="field-data" value="<?= Auth::user()->number ?>">
            </div>

            <p class="mx-4">Gender</p>
            <div class="py-2 mt-1 mx-5 d-flex-col">
                <select name="gender" id="gender" class="field-data" aria-label="Default select example">
                    {{ $selectedGender = Auth::user()->gender; }}

                    <option value="{{ $selectedGender }}" selected>{{ $selectedGender }}</option>
                    
                    @if ($selectedGender !== 'Man')
                        <option value="Man">Man</option>
                    @endif

                    @if ($selectedGender !== 'Woman')
                        <option value="Woman">Woman</option>
                    @endif
                </select>
            </div>
        </div>

        <div class="py-2 mt-1 mx-5 d-flex-col">
            <button type="submit" class="btn btn-danger">Edit Profile</button>
        </div>
    </div>
    </form>
</div>
</div>