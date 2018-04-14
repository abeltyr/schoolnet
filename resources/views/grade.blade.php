<h1>add school</h1>
    @if(count($errors) > 0)   
        @foreach($errors->all() as $error)
            <div class="alert " style="  padding: 20px;  background-color: #f44336; /* Red */ color: white; border-left:6px solid #6b1905;  margin-bottom: 5px;">
                <span style="margin-left: 15px;  color: white;  font-weight: bold;  float: right;  font-size: 22px;  line-height: 20px;  cursor: pointer;"
                onclick="this.parentElement.style.display='none';">&times;</span>
                <p style="color: white; text-align:center;"> {{$error}} </p>
            </div> 
        @endforeach 
        @endif 
        @if(session('success'))   
        <div class="alert " style="  padding: 15px;  background-color: #44f436;  border-left:6px solid #0ca120; margin-bottom: 5px;">
            <span style="margin-left: 15px;  color: white;  font-weight: bold;  float: right;  font-size: 22px;  line-height: 20px;  cursor: pointer;"
            onclick="this.parentElement.style.display='none';">&times;</span>
            <p class="sute" > {{session('success')}} </p>
        </div> 
        @endif 
        <div class="jumbotron col-md-12" style="padding:50px" >
            <form enctype="multipart/form-data" action="{{ route('addsch') }}" method="post">
                    
                    <div class="form-group form-group-default" id="phoneGroup">
                        <label>School Logo</label>
                        <div class="controls">
                            <input type="file" class="btn btn-primary" style="margin-top:10px;" name="avatar">
                        </div>
                    </div>
                    <div class="form-group form-group-default" id="phoneGroup">
                        <label>School Name</label>
                        <div class="controls">
                            <input type="text" name="sname"value="{{ old('sname') }}" placeholder="School name" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group form-group-default" id="phoneGroup">
                        <label>School Representative</label>
                        <div class="controls">
                            <input type="text" name="srep"value="{{ old('srep') }}" placeholder="School Representative" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group form-group-default" id="phoneGroup">
                        <label>Representative E-Mail</label>
                        <div class="controls">
                            <input type="email" name="email"value="{{ old('email') }}" placeholder="Representative E-Mail" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group form-group-default" id="phoneGroup">
                        <label>Representative phone</label>
                        <div class="controls">
                            <input type="number" name="phone"value="{{ old('phone') }}" placeholder="Representative phone" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group form-group-default" id="phoneGroup">
                        <label>School Address</label>
                        <div class="controls">
                            <input type="text" name="saddress"value="{{ old('saddress') }}" placeholder="School Address" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group form-group-default" id="phoneGroup">
                        <label>Number of students</label>
                        <div class="controls">
                            <input type="number" name="nstud"value="{{ old('nstud') }}" placeholder="Number of students" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group form-group-default" id="phoneGroup">
                        <label>School owner</label>
                        <div class="controls">
                            <input type="text" name="sowner"value="{{ old('sowner') }}" placeholder="School owner" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group form-group-default" id="emailGroup">
                        <label>Subscibtion Type</label>
                        <div class="well col-md-12">
                            <div class="mdc-form-field" style="width:25%;">
                                <div class="mdc-checkbox">
                                    <input input type="radio" name="sub_type" value="1" id="my-checkbox" class="mdc-checkbox__native-control"/>
                                    <div class="mdc-checkbox__background">
                                        <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                            <path class="mdc-checkbox__checkmark-path" fill="none" stroke="white" d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                                        </svg>
                                        <div class="mdc-checkbox__mixedmark"></div>
                                    </div>
                                </div>
                                <label for="my-checkbox" id="my-checkbox-label" style="margin-top:6px; ">premiue Subscibtion</label>
                            </div> 
                            <div class="mdc-form-field"  style="width:25%;">
                                <div class="mdc-checkbox">
                                    <input input type="radio" name="sub_type" value="2" id="my-checkbox" class="mdc-checkbox__native-control"/>
                                    <div class="mdc-checkbox__background">
                                        <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                            <path class="mdc-checkbox__checkmark-path" fill="none" stroke="white" d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                                        </svg>
                                        <div class="mdc-checkbox__mixedmark"></div>
                                    </div>
                                </div>
                                <label for="my-checkbox" id="my-checkbox-label" style="margin-top:6px;">compact Subscibtion</label>
                            </div> 
                            <div class="mdc-form-field"  style="width:25%;">
                                <div class="mdc-checkbox">
                                    <input input type="radio"name="sub_type" value="3" id="my-checkbox" class="mdc-checkbox__native-control"/>
                                    <div class="mdc-checkbox__background">
                                        <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                            <path class="mdc-checkbox__checkmark-path" fill="none" stroke="white" d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                                        </svg>
                                        <div class="mdc-checkbox__mixedmark"></div>
                                    </div>
                                </div>
                                <label for="my-checkbox" id="my-checkbox-label" style="margin-top:6px;">normal Subscibtion</label>
                            </div> 
                         </div>   
                    </div>
                    <div class="form-group form-group-default col-md-6 col-md-offset-2">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button type="submit" class="btn btn-primary  col-md-4">Register</button>
                    </div> 
                </form>       
        </div>









