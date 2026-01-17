<!--  You can switch " data-color="purple"   with one of the next bright colors: "green", "orange", "red", "blue"       -->
<div class="wizard-header">
   <h3 class="wizard-title">
      Upload Property
   </h3>
</div>
<div class="wizard-navigation">
   <ul>
      <li><a href="wizard.html#ProductData" data-toggle="tab">Property Data</a></li>
      <li><a href="wizard.html#Cancelation" data-toggle="tab">Cancelation/Rules/Facilities </a></li>
   </ul>
</div>
<div class="tab-content">
   <div class="tab-pane" id="ProductData">
      @include('admin.properties.apartment_data')
   </div>
   <div class="tab-pane" id="Cancelation">
      <div class="row">
         <div class="col-md-6">
            <div class="card-content">
               <div class="form-group">
                  <label class="label-control">Check in iime</label>
                  <input type="text" required="true" name="check_in_time" class="form-control timepicker" value="14:00" />
               </div>
            </div>
         </div>
         <div class="col-md-6">
            <div class="card-content">
               <div class="form-group">
                  <label class="label-control">Check out Time</label>
                  <input name="check_out_time" required="true" type="text" class="form-control timepicker" value="14:00" />
               </div>
            </div>
         </div>

         <div class="col-md-12 mt-3 pr-5 ">
            <h4 class="card-title">Cancellation</h4>
            <div class="togglebutton cancel form-inline">
               <label>
                  <input name="is_refundable" id="allow_cancellation" value="1" type="checkbox">
                  Refundable
               </label>
            </div>
         </div>

         <div class="col-sm-7  cancellation-message  d-none  {{ isset($apartment) &&  $apartment->allow_cancellation ? '' : ''}} ">
            <div class="form-group">
               <label for="cancellation_message">Cancellation Policy</label>
               <textarea class="form-control" name="cancellation_message" id="cancellation_message" rows="5">{{ isset($apartment) ?   $apartment->is_refundable : '' }}</textarea>
            </div>
         </div>
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