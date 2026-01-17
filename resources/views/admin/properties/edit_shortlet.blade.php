<!--  You can switch " data-color="purple"   with one of the next bright colors: "green", "orange", "red", "blue"       -->
<div class="wizard-header">
   <h3 class="wizard-title">
      Edit Apartment
   </h3>
</div>
<div class="wizard-navigation">
   <ul>
      <li><a href="wizard.html#ProductData" data-toggle="tab">Reservation Data</a></li>
      <li><a href="wizard.html#Cancelation" data-toggle="tab">Cancelation </a></li>
   </ul>
</div>
<div class="tab-content">
   <div class="tab-pane" id="ProductData">
      <h4 class="info-text ">Enter Property Details</h4>
      <div class="row">
         <div class="col-md-8">
            <div class="row">
               <div class="col-md-8">
                  <div class="form-group {{ isset($property) ? ''  : 'label-floating is-empty' }}">
                     <label class="control-label">Property Name</label>
                     <input required="true" name="apartment_name" data-msg="" value="{{ isset($property) ? $property->name :  old('apartment_name') }}" class="form-control" type="text">
                  </div>
               </div>


               <div class="col-md-4">

               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="form-group {{ isset($property) ? ''  : 'label-floating is-empty' }}">
                     <label class="control-label">Address</label>
                     <input required="true" name="address" data-msg="" value="{{ isset($property) ? $property->address :  old('address') }}" class="form-control" type="text">
                  </div>
               </div>
            </div>

            <div class="row">
               <div class="col-md-12">
                  {{$property->city}}
                  <div class="form-group {{ isset($property) ? ''  : 'label-floating is-empty' }}">
                     <label class="control-label">City</label>
                     <input required="true" name="city" data-msg="" value="{{ isset($property) ? $property->city :  old('city') }}" class="form-control" type="text">
                  </div>
               </div>
            </div>



            <div class="row">
               <div class="col-md-12">
                  <div class="form-group">
                     <label>Description</label>
                     <div class="form-group ">
                        <label class="control-label"> Enter description here</label>
                        <textarea name="description" id="description" class="form-control" rows="50">
                        {{ isset($property) ? $property->description : old('description') }}
                        </textarea>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-6">
                  <legend>
                     Enable/Disable
                  </legend>
                  <div class="togglebutton">
                     <label>
                        <input {{ isset($property) && $property->allow == 1 ? 'checked' : ''}} name="allow" value="1" type="checkbox" checked>
                        Enable/Disable
                     </label>
                  </div>
               </div>
               <div class="col-md-6">
                  <legend>
                     Featured Apartment
                  </legend>
                  <div class="togglebutton">
                     <label>
                        <input {{ isset($property) && $property->featured == 1 ? 'checked' : '' }} name="featured" value="1" type="checkbox">
                        Yes/No
                     </label>
                  </div>
               </div>
            </div>
            <div class="clearfix"></div>
         </div>
         <div class="col-md-4">
            <div class="">
               <div class="row mb-3">

               </div>
            </div>

         </div>
      </div>
   </div>
   <div class="tab-pane" id="Cancelation">
      <div class="row">
         <div class="col-md-6">
            <div class="card-content">
               <div class="form-group">
                  <label class="label-control">Check in iime</label>
                  <input type="text" required="true" name="check_in_time" class="form-control timepicker" value="{{ $property->check_in_time }}" />
               </div>
            </div>
         </div>
         <div class="col-md-6">
            <div class="card-content">
               <div class="form-group">
                  <label class="label-control">Check out Time</label>
                  <input name="check_out_time" required="true" type="text" class="form-control timepicker" value="{{ $property->check_out_time }}" />
               </div>
            </div>
         </div>
         <div class="col-md-12 mt-3 pr-5 ">
            <h5>Cancellation </h5>
            <div class="togglebutton cancel form-inline">
               <label>
                  <input name="is_refundable" id="allow_cancellation" value="1" type="checkbox" {{ isset($property) &&  $property->is_refundable ? 'checked' : ''}}>
                  Refundable
               </label>
            </div>
         </div>
         <div class="col-sm-7  cancellation-message   {{ isset($property) &&  $property->allow_cancellation ? '' : 'd-none'}} ">
            <div class="form-group">
               <label for="cancellation_message">Cancellation Policy</label>
               <textarea class="form-control" name="cancellation_message" id="cancellation_message" rows="5">{{ isset($property) ?   $property->cancellation_message : '' }}</textarea>
            </div>
         </div>

      </div>
   </div>
   <div class="tab-pane" id="ProductVariations">
      <h4 class="info-text">Apartment </h4>
      <div class="clearfix"></div>
      <div class="col-md-12">
         <div class="form-group">
            <label class="control-label">Apartment Type</label>
            <select name="type" id="apartment-type" class="form-control" required="true" title="Please select product type" title="" data-size="7">
               <option value="multiple">Multiple</option>
            </select>
         </div>
      </div>
      <div class="simple-apartment hide">

      </div>

   </div>
   <div class="wizard-footer">
      <div class="pull-right">
         <input type='button' class='btn btn-next btn-fill btn-rose btn-round btn-wd' name='next' value='Next' />
         <input type='submit' class='btn btn-finish btn-fill btn-rose   btn-round  btn-wd' name='finish' value='Finish' />
      </div>
      <div class="pull-left">
         <input type='button' class='btn btn-previous btn-fill btn-primary  btn-round  btn-wd' name='previous' value='Previous' />
      </div>
      <div class="clearfix"></div>
   </div>