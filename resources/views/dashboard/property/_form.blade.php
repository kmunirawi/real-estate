<div class="card-body">
    <div class="row">

        <div class="form-group col-6">
            <label for="name">Name</label>
            <input value="{{ old('name') ? old('name') : $property->name }}" name="name" type="text"
                class="form-control" id="name" placeholder="Enter name">
        </div>
        <div class="form-group col-6">
            <label for="area">Area</label>
            <input value="{{ old('area') ? old('area') : $property->area }}" name="area" type="number"
                class="form-control" id="area" placeholder="Enter area">
        </div>
    </div>
    <div class="form-group">
        <label for="rooms">Rooms:</label>
        <input value="{{ old('rooms') ? old('rooms') : $property->rooms }}" name="rooms" type="number"
            class="form-control" id="rooms" placeholder="Enter Rooms">
    </div>
    <div class="form-group">
        <label for="name">Price:</label>
        <input value="{{ old('price') ? old('price') : $property->price }}" name="price" type="text"
            class="form-control" id="price" placeholder="Enter price">
    </div>



    <div class="form-group">
        <label for="name">Kind:</label>
        <div class="row">

            <div class="col-lg-6">

                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <input name="kind" value="1" type="radio"></span>
                    </div>
                    <input disabled value="SALE" type="text" class="form-control">
                </div>
            </div>
            <!-- /.col-lg-6 -->
            <div class="col-lg-6">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <input name="kind" value="2" type="radio"></span>
                    </div>
                    <input disabled value="RENT" type="text" class="form-control">
                </div>
                <!-- /input-group -->
            </div>
            <!-- /.col-lg-6 -->
        </div>





    </div>
    <div class="form-group" data-select2-id="29">
        <label>Type</label>
        <select name="type_id" class="form-control select2 select2-hidden-accessible" style="width: 100%;"
            data-select2-id="1" tabindex="-1" aria-hidden="true">
            <option selected disabled>Choose Type</option>
            @foreach ($types as $type)
                <option value="{{$type->id}}">{{ $type->name }}</option>
            @endforeach
            {{-- <option data-select2-id="40">Alaska</option> --}}
        </select>
        {{-- <span class="select2 select2-container select2-container--default select2-container--below select2-container--open select2-container--focus" dir="ltr" data-select2-id="2" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="true" tabindex="0" aria-disabled="false" aria-labelledby="select2-8amm-container" aria-owns="select2-8amm-results" aria-activedescendant="select2-8amm-result-lll1-Delaware"><span class="select2-selection__rendered" id="select2-8amm-container" role="textbox" aria-readonly="true" title="Alabama">Alabama</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span> --}}
    </div>
    <div class="form-group" data-select2-id="29">
        <label>City</label>
        <select name="city_id" class="form-control select2 select2-hidden-accessible" style="width: 100%;"
            data-select2-id="1" tabindex="-1" aria-hidden="true">
            <option selected disabled>Choose City</option>
            @foreach ($cities as $city)
                <option value="{{$city->id}}">{{ $city->name }}</option>
            @endforeach
            {{-- <option data-select2-id="40">Alaska</option> --}}
        </select>
        {{-- <span class="select2 select2-container select2-container--default select2-container--below select2-container--open select2-container--focus" dir="ltr" data-select2-id="2" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="true" tabindex="0" aria-disabled="false" aria-labelledby="select2-8amm-container" aria-owns="select2-8amm-results" aria-activedescendant="select2-8amm-result-lll1-Delaware"><span class="select2-selection__rendered" id="select2-8amm-container" role="textbox" aria-readonly="true" title="Alabama">Alabama</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span> --}}
    </div>



</div>
<!-- /.card-body -->

<div class="card-footer">
    <button type="submit" class="btn btn-primary">Save</button>
</div>
