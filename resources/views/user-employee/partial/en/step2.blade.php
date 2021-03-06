<div class="row setup-content" id="step-2">
          <div class="col-xs-12">
            <div class="col-md-12 well text-center">
              <h1 class="text-center" style="font-family: 'Droid Arabic Kufi', Tahoma, Geneva, sans-serif; font-size: 13px;">next step </h1>
              <div class="col-sm-8 col-sm-offset-2" style="font-family: 'Droid Arabic Kufi', Tahoma, Geneva, sans-serif; font-size: 13px;">
                <h3 class="m-t-0" style="font-family: 'Droid Arabic Kufi', Tahoma, Geneva, sans-serif; font-size: 13px;"></h3>
                education and knowledge data<hr class="m-t-0">
                <div class="row">
                  <div class="col-sm-6 col-xs-12" style="">
                    <div class="form-group">
                      <label style="" for="deg_name"> the last qualification obtained<sup class="color-red ">*</sup> @if ($errors->has('degree_name'))
                <span class="" style="font-size: 9px; color: red;">
                 required
               </span>
               @endif</label>
                      <select name="degree_name[]" class="form-control" required="" style="width: 98%;<?php if ($errors->has('degree_name')) echo 'border: 1px solid red;';?>">
                      @foreach(\App\degree::get() as $degree)
                        <option value="{{$degree->name}}">{{$degree->name}}</option>
                        @endforeach
                      </select>
                      
                    </div>
                  </div>

                  <div class="col-sm-6 col-xs-12" style="">
                    <div class="form-group">
                      <label for="al_phone" style="">study area @if ($errors->has('university_name[0]'))
                <span class="" style="font-size: 9px; color: red;">
                 required
               </span>
               @endif</label>
                      <input type="text" class="form-control" name="university_name[]" value="" style="width: 98%;<?php if ($errors->has('university_name[0]')) echo 'border: 1px solid red;';?>" id="university" placeholder="study area" required>
                    </div>
                  </div>
                  
                  <div class="col-sm-6 col-xs-12" style="">
                    <div class="form-group">
                      <label for="cgp" style="">specialization  @if ($errors->has('cgp[0]'))
                <span class="" style="font-size: 9px; color: red;">
                 required
               </span>
               @endif</label>
                      <input type="text" class="form-control" name="cgp[]" id="cgp" value=""style="width: 98%;<?php if ($errors->has('cgp[0]')) echo 'border: 1px solid red;';?>" placeholder="specialization" required>
                    </div>
                  </div>
                  <div class="col-sm-6 col-xs-12" style="">
                    <div class="form-group">
                      <label style="" for="al_phone">passing year @if ($errors->has('passing_year[]'))
                <span class="" style="font-size: 9px; color: red;">
                 required
               </span>
               @endif</label>
                      @include('partial.year')
                    </div>

                  </div>
                  <center>
                    <button id="add_row" type="button" class="btn btn-info pull-left"><i class="fa fa-plus m-r-5" aria-hidden="true"></i>Add more</button>
                    <a id="delete_row" class="btn btn-danger pull-right">delete</a>
                  </center>

                  <table class="table table-bordered table-hover" id="tab_logic">

                    <tbody>
                      <tr id='addr0'>

                      </tr>
                      <tr id='addr1'></tr>
                    </tbody>
                  </table>
                  <!-- talanted and langauge -->
                  @include('partial.en.talantedLangaugeTraining')
                  <!-- ./talanted and langauge -->

                </div>



              </div>
              <div class="clearfix"></div>
              <center>
               <button style="background-color: #b39c6a !important; border-color: #a18c5f;" type="button" id="activate-step-1" class="btn btn-primary btn-md"> Pre << </button>
               
               <button style="background-color: #b39c6a !important; border-color: #a18c5f;" type="button" id="activate-step-3" class="btn btn-primary btn-md"> Next >></button>

             </center>

           </div>
         </div>
       </div>