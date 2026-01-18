<h4 class="info-text ">Enter Apartment Details</h4>


<div class="row">
    <div class="col-md-8">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group {{ isset($apartment) ? ''  : 'label-floating is-empty' }}">
                    <label class="control-label">Property Name</label>
                    <input required="true" name="apartment_name" data-msg="" value="{{ isset($property) ? $property->name :  old('apartment_name') }}" class="form-control" type="text">
                </div>
            </div>
        </div>

        @if($house_attributes)
        <div class="row">
            @if($house_attributes->count())
            @foreach($house_attributes as $key => $house_attribute)
            <div class="col-md-4">
                <div class="form-group">
                    <select name="attribute_id[]" required="true" class="form-control">
                        <option value="" selected="">--Choose {{ ucfirst($key) }}--</option>
                        @foreach($house_attribute as $house)
                        <option value="{{ $house->id }}"
                            {{ isset($property) && $helper->check(optional($property)->attributes , $house->id) ? 'selected' : '' }}>
                            {{ $house->name }}
                        </option>
                        @endforeach
                    </select>
                </div>
            </div>
            @endforeach
            @endif

        </div>
        @endif

        <div class="row">
            <div class="col-md-12">
                <div class="form-group {{ isset($apartment) ? ''  : 'label-floating is-empty' }}">
                    <label class="control-label">City</label>
                    <input required="true" name="city" data-msg="" value="{{ isset($property) ? $property->address :  old('address') }}" class="form-control" type="text">
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12">
                <div class="form-group {{ isset($apartment) ? ''  : 'label-floating is-empty' }}">
                    <label class="control-label">Address</label>
                    <input required="true" name="address" data-msg="" value="{{ isset($property) ? $property->address :  old('address') }}" class="form-control" type="text">
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Description</label>
                    <div class="form-group ">
                        <label class="control-label"> Enter description here</label>
                        <textarea
                            name="description"
                            id="description"
                            class="form-control"
                            rows="50">
                        {{ isset($property) ? $property->description : old('description') }}
                        </textarea>
                    </div>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>
    </div>
    <div class="col-md-4">
        <div class="">
            <div class="row mb-3">
                <div class="col-md-12">
                    <h4 class="info-text">Upload Image Here</h4>
                    <div class="">
                        <div id="m_image" class="uploadloaded_image text-center mb-3">
                            <div class="upload-text">
                                <a class="activate-file" href="#">
                                    <img height="60" width="60" src="{{ asset('backend/img/upload_icon.png') }}">
                                    <b>Add Image </b>
                                </a>
                            </div>
                            <div id="remove_image" class="remove_image hide">
                                <a class="delete_image" href="#">Remove</a>
                            </div>

                            <input accept="image/*" class="upload_input" data-msg="Upload  your image" type="file" id="file_upload_input" name="category_image" />
                            <input type="hidden" class="file_upload_input  stored_image" id="stored_image" name="image">
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>