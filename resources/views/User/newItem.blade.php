@extends('main')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<link rel="stylesheet" href="{{ asset('css/User/inventory.css') }}">

    <div class="content">
        
        <div class="container p-5 inv" style="max-width: 1440px; min-height: 1001px">
            <div class="col d-flex">
                <a href="{{ route('user.Inventory') }}" class="back">
                    <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor" class="bi bi-arrow-left mx-3" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8"/>
                    </svg>
                </a>
                Insert New Item
            </div>
            <div class="row p-5">
                <div class="col-5">
            <form action="{{ route('user.insertItem') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="container">
                <select name="table_game" id="table_game" class="select-game mb-4" aria-label="Default select example">
                    <option value="" selected>Dota 2</option>
                </select>

                <div class="field-dota">
                    <div class="row mb-3">
                        <input type="text" class="field" name="nm_item_dt" placeholder="Item Name">
                        @if (count($errors) > 0)
                              <div class="div" style="color: white">
                                {{ $errors -> first('nm_item_dt') }}
                              </div>
                        @endif
                    </div>
                    <div class="row itemPreview mb-3">
                        <label for="profileImg">Item Photo</label>
                        <a href="" onclick="document.getElementById('fileInput').click(); return false;"><img src="{{ asset('/img/blank.jpg') }}" height="100" width="160px" id="itemPreview" class="itemPreview"/></a>
                        <input type="file" class="inputIMG" name="pic_item_dt" id="fileInput" style="display: none;" onchange="handleDisplaySelect(this)">
                        @if (count($errors) > 0)
                              <div class="div" style="color: white">
                                {{ $errors -> first('pic_item_dt') }}
                              </div>
                        @endif
                    </div>
                    <div class="row mb-3">
                        <select name="qual_item" class="field">
                            <option value="Standard" selected>Standard</option>
                            <option value="Inscribed">Inscribed</option>
                            <option value="Auspicious">Auspicious</option>
                            <option value="Autographed">Autographed</option>
                            <option value="Genuine">Genuine</option>
                            <option value="Heroic">Heroic</option>
                            <option value="Frozen">Frozen</option>
                            <option value="Cursed">Cursed</option>
                            <option value="Exalted">Exalted</option>
                            <option value="Corrupted">Corrupted</option>
                            <option value="Infused">Infused</option>
                        </select>
                    </div>
                    <div class="row mb-3">
                        <select name="rty_item" class="field">
                            <option value="Common" selected>Common</option>
                            <option value="Mythical">Mythical</option>
                            <option value="Rare">Rare</option>
                            <option value="Uncommon">Uncommon</option>
                            <option value="Immortal">Immortal</option>
                            <option value="Legendary">Legendary</option>
                            <option value="Seasonal">Seasonal</option>
                            <option value="Arcana">Arcana</option>
                        </select>
                    </div>
                    <div class="row mb-3">
                        <select name="hero" class="field">
                            <option value="" selected aria-placeholder="Hero">--</option>
                            <option value="Crystal Maiden">Crystal Maiden</option>
                            <option value="IO">IO</option>
                            <option value="Legion Commander">Legion Commander</option>
                            <option value="Lina">Lina</option>
                            <option value="Ogre Magi">Ogre Magi</option>
                            <option value="Pudge">Pudge</option>
                            <option value="Rubick">Rubick</option>
                            <option value="Terrorblade">Terrorblade</option>
                        </select>
                        @if (count($errors) > 0)
                              <div class="div" style="color: white">
                                {{ $errors -> first('hero') }}
                              </div>
                        @endif
                    </div>

                    <button type="submit" class="btn btn-danger">Insert Item</button>
                    </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>






 

