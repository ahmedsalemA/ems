<div class="row setup-content" id="step-1">
  <div class="col-xs-12">
    <div class="col-md-12 well" style="background: #fff;">
      <div class="col-sm-8 col-sm-offset-2">
        <h3 class="m-t-0" style="font-family: 'Droid Arabic Kufi', Tahoma, Geneva, sans-serif; font-size: 13px;">المعلومات الاساسية</h3><hr class="m-t-0">

        <div class="row">
          <div class="col-sm-4 col-xs-12" style="float: right;">
            <div class="form-group">
              <label for="firstname">الاسم الاول<sup class="color-red ">*</sup> @if ($errors->has('firstname'))
                <span class="" style="font-size: 9px; color: red;">
                 مطلوب
               </span>
               @endif</label>
               <input dir="rtl" type="text" style="width: 98%;<?php if ($errors->has('firstname')) echo 'border: 1px solid red;';?>" value="{{$employee->firstname}}" class="form-control" id="firstname" name="firstname" placeholder="الاسم الاول">

             </div>
           </div>
           <div class="col-sm-4 col-xs-12" style="float: right;">
            <div class="form-group">
              <label for="m_name">الاسم الاوسط <sup class="color-red ">*</sup>@if ($errors->has('middlename'))
                <span class="" style="font-size: 9px; color: red;">
                 مطلوب
               </span>
               @endif</label>
               <input type="text" style="width: 98%;<?php if ($errors->has('middlename')) echo 'border: 1px solid red;';?>" class="form-control" value="{{$employee->middlename}}" id="m_name" dir="rtl" name="middlename" placeholder="الاسم الاوسط">
             </div>
           </div>

           <div class="col-sm-4 col-xs-12" style="float: right;">
            <div class="form-group">
              <label for="l_name">الاسم العائلة <sup class="color-red ">*</sup>@if ($errors->has('last_name'))
                <span class="" style="font-size: 9px; color: red;">
                 مطلوب
               </span>
               @endif</label>
               <input type="text"  class="form-control"  id="last_name" dir="rtl" style="<?php if ($errors->has('last_name')) echo 'border: 1px solid red;';?>" value="{{$employee->last_name}}" name="last_name" placeholder="الاسم العائلة">
             </div>
           </div>

            <div class="col-sm-6 col-xs-6" style="float: right;">
            <div class="form-group">
              <label for="l_name">تاريخ الميلاد <sup class="color-red ">*</sup> @if ($errors->has('birthdate'))
                <span class="" style="font-size: 9px; color: red;">
                 مطلوب
               </span>
               @endif</label>
               <div class="input-group date">
                <div class="input-group-addon">
                 <i class="fa fa-calendar"></i>
               </div>

               <input required=""  style="<?php if ($errors->has('birthdate')) echo 'border: 1px solid red;';?>" type="text" class="form-control" value="{{$employee->birthdate}}" placeholder="شهر/يوم/سنة" onfocus="(this.type='date')"  class="form-control pull-right" name="birthdate" placeholder="" id="birthDate" />
             </div>
           </div>
         </div>

           <div class="col-sm-6 col-xs-6" style="float: left;">
            <div class="form-group">
              <label class="filter-col" style="margin-right:0;" for="pref-perpage">الجنس </label>
              <select id="pref-perpage" value="{{ old('gender') }}" class="form-control" name="gender">
                <option value="رجل" <?php  if($employee->gender == 'رجل') echo "selected";?>>ذكر</option>
                        <option value="امرأة" <?php if($employee->gender == 'امرأة') echo "selected";?>>انثى</option>
              </select>  
            </div>
          </div>

                   <div class="col-sm-6 col-xs-6" style="float: right;">
          <div class="form-group">
            <label for="nationality">الجنسية<sup class="color-red ">*</sup> @if ($errors->has('nationality'))
              <span class="" style="font-size: 9px; color: red;">مطلوب</span>
              @endif</label>


              <select name="nationality" value="" v-model="nationality" v-on:change="nationalitychange()" style="<?php if ($errors->has('nationality')) echo 'border: 1px solid red;';?> width: 99%;" class="form-control">
               <option value="{{$employee->nationality}}" selected="">{{$employee->nationality}}</option>
                @include('partial.countries')
              </select>

            </div>
          </div>
         

          <div class="col-sm-6 col-xs-6" style="float: left;">
            <div class="form-group">
              <label for="city_id">خلاصة القيد <button type="button" style="background: #fff;border: 0;" id="pop2" title="" data-content="<b>لمواطني دولة الامارات فقط</b>" data-placement="left" data-toggle="popover" class="fa fa-info-circle" data-original-title="" data-html="true"></button><sup class="color-red ">*</sup></label>
              <select name="Summary_of_enrollment" class="form-control">
                
                @foreach(\App\City::get() as $city)
                <option value="{{$city->id}}" <?php if($employee->Summary_of_enrollment == $city->id) echo "selected";?>>{{$city->name}}</option>
                @endforeach
              </select>
            </div>
          </div>

         

          <div class="col-sm-6 col-xs-6" style="float: right;">
            <div class="form-group">
              <label class="filter-col" style="margin-right:0;" for="pref-perpage">الحالة الاجتماعية</label>
              <select id="pref-perpage" name="social_status" style="width: 99%;" class="form-control">
               <option value="متزوج" <?php if($employee->social_status == 'متزوج') echo "selected";?>>متزوج</option>
                        <option value="عزباء/اعزب" <?php if($employee->social_status == 'عزباء/اعزب') echo "selected";?>
                        >عزباء/اعزب</option>
                        <option value="مطلق/مطلقة" <?php if($employee->social_status == 'مطلق/مطلقة') echo "selected";?> >مطلق/مطلقة</option>
                        <option value="ارملة/ارمل" <?php if($employee->social_status == 'ارملة/ارمل') echo "selected";?> >ارملة/ارمل</option>
              </select>  
            </div>
          </div>
           <div class="col-sm-6 col-xs-6" style="float: left;">
              <div class="form-group">
                <label for="email">الايميل <sup class="color-red "></sup>@if ($errors->has('email'))
              <span class="" style="font-size: 9px; color: red;">مطلوب</span>
              @endif</label>
                <input type="email" dir="rtl" class="form-control" value="{{\Auth::user()->email}}" name="email" style="<?php if ($errors->has('email')) echo 'border: 1px solid red;';?> width: 99%;" id="email" placeholder="الايميل">
              </div>
            </div>
            <div class="col-sm-6 col-xs-6" style="float: right;">
            <div class="form-group">
              <label for="phone">الهاتف المتحرك<sup class="color-red ">*</sup> @if ($errors->has('phone1'))
                <span class="" style="font-size: 9px; color: red;">مطلوب</span>
                @endif</label>
                <input type="number"  style="<?php if ($errors->has('phone1')) echo 'border: 1px solid red;';?> width: 99%;" class="form-control" id="phone" name="phone1" placeholder="الهاتف المتحرك" value="{{$employee->phone1}}" dir="rtl">
              </div>
            </div>
            <div class="col-sm-6 col-xs-6" style="float: left;">
              <div class="form-group">
                <label for="phone2">الهاتف المتحرك 2<sup class="color-red "></sup></label>
                <input type="text" class="form-control" name="phone2" id="phone2" value="{{$employee->phone2}}" placeholder="الهاتف المتحرك 2" dir="rtl">
              </div>
            </div>

            <!-- /*new edits*/ -->
            <div class="col-sm-6 col-xs-6" style="float: right;">
            <div class="form-group">
              <label for="city_id">مكان الاقامة<sup class="color-red ">*</sup> @if ($errors->has('city_id'))
                <span class="" style="font-size: 9px; color: red;">مطلوب</span>@endif</label>
              <select name="city_id" class="form-control" v-model="city_id" v-on:change="citychange()"  style="<?php if ($errors->has('city_id')) echo 'border: 1px solid red;';?>">
                <option value="" selected="">مكان الاقامة</option>
                @foreach(\App\City::get() as $city)
                <option value="{{$city->id}}" <?php if($employee->city_id == $city->id) echo "selected";?>>{{$city->name}}</option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="col-sm-6 col-xs-6" style="float: left;">
            <div class="form-group">
              <label for="city_id">المنطقة<sup class="color-red ">*</sup> @if ($errors->has('division_id'))
                <span class="" style="font-size: 9px; color: red;">مطلوب</span>@endif</label>
              <select name="division_id"  class="form-control" style="<?php if ($errors->has('division_id')) echo 'border: 1px solid red;';?>">
              @foreach(\App\Division::where('city_id','2')->get() as $div)
                <option   value="{{$div->id}}" <?php if($div->division_id == $employee->division_id) echo "selected";?>> {{$div->name}}</option>
                @endforeach
              
              </select>
            </div>
          </div>
           <!--  /*end new edits*/ -->
               


            <input type="hidden" name="jobtitle" value="null">
                 <!--  <div class="col-sm-6 col-xs-6" style="float: right;">
                    <div class="form-group">
                      <label for="phone">الفئة الوظيفية<sup class="color-red ">*</sup></label>
                      <select name="jobtitle" class="form-control select2-hidden-accessible" selected="selected" tabindex="-1" aria-hidden="true">
                         @foreach(\App\position::get() as $position)
                        <option value="{{$position->name}}">{{$position->name}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div> -->

                  
                  <input type="hidden" name="qualification" value="null">
                   <!-- <div class="col-sm-6 col-xs-6" style="float: left;">
                    <div class="form-group" >
                      <label for="dept_id">المؤهل<sup class="color-red "></sup></label>

                      <select name="qualification" class="form-control select2-hidden-accessible" selected="selected" tabindex="-1" aria-hidden="true">
                      @foreach(\App\degree::get() as $degreea)
                        <option value="{{$degreea->name}}">{{$degreea->name}}</option>
                        @endforeach
                      </select>

                    </div>
                  </div> -->

                </div>

                <div class="form-group">
                  <label for="pre_address">العنوان الحالى @if ($errors->has('address'))
                    <span class="" style="font-size: 9px; color: red;">مطلوب</span>
                    @endif</label>
                    <textarea class="form-control" style="<?php if ($errors->has('address')) echo 'border: 1px solid red;';?>" id="present_address" name="address" rows="3">{{ $employee->address }}</textarea>
                  </div>
                  <div class="form-group">
                    <label for="par_address">عنوان مؤقت</label>
                    <textarea class="form-control"
                    id="parmanent_address" name="address2" rows="3">{{ $employee->address2 }}</textarea>
                  </div>
                  <div class="form-group">
                    <label for="picture">الصورة الشخصية</label>
                    <input type="file" accept="image/*" name="picture" onchange="loadFile(event)">
                    <small id="fileHelp" class="text-muted"><img src="{{asset($employee->picture)}}" id="output" style="height: 150px;width: 200px" class="img-thumbnail">
                    </small>
                  </div>
                </div>
                <div class="clearfix"></div>
                <center>
                  <button style="background-color: #b39c6a;border-color: #a18c5f;" id="activate-step-2" type="button" class="btn btn-primary btn-md">الخطوة التالية >> </button>
                </center>

              </div>
            </div>
          </div>