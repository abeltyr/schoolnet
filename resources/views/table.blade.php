<h1>School grade</h1>


@if(count($errors) > 0)
    @foreach($errors->all() as $error)
        <div class="alert " style="  padding: 20px;  background-color: #f44336; /* Red */ color: white; border-left:6px solid #6b1905;  margin-bottom: 5px;">
                <span style="margin-left: 15px;  color: white;  font-weight: bold;  float: right;  font-size: 22px;  line-height: 20px;  cursor: pointer;"
                      onclick="this.parentElement.style.display='none';">&times;</span>
            <p style="color: white; text-align:center;"> {{$error}} </p>
        </div>
    @endforeach
@endif
@if(session('subfail'))   
    <div class="alert " style="  padding: 20px;  background-color: #f44336; /* Red */ color: white; border-left:6px solid #6b1905;  margin-bottom: 5px;">
        <span style="margin-left: 15px;  color: white;  font-weight: bold;  font-size:20px; float: right;  font-size: 22px;  line-height: 20px;  cursor: pointer;"
        onclick="this.parentElement.style.display='none';">&times;</span>
    <p style="color: white; text-align:center; font-size:20px;"> {{session('subfail')}} </p>
</div> 
@endif 
@if(session('success'))
    <div class="alert " style="  padding: 15px;  background-color: #44f436;  border-left:6px solid #0ca120; margin-bottom: 5px;">
            <span style="margin-left: 15px;  color: white;  font-weight: bold;  float: right;  font-size: 22px;  line-height: 20px;  cursor: pointer;"
                  onclick="this.parentElement.style.display='none';">&times;</span>
        <p class="sute" > {{session('success')}} </p>
    </div>
@endif
<div class="well col-md-12" style="padding:50px" >
    <form enctype="multipart/form-data" action="{{ route('grade') }}" method="post">
    {{ csrf_field() }}
    <div class="form-group form-group-default" id="emailGroup">
        <label>Grade</label>
        <div class="well col-md-12">
            <div class="mdc-form-field" style="width:7.6923%;">
                <div class="mdc-checkbox">
                    <input input type="radio" name="grade" value="1" id="my-checkbox" class="mdc-checkbox__native-control"/>
                    <div class="mdc-checkbox__background">
                        <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                            <path class="mdc-checkbox__checkmark-path" fill="none" stroke="white" d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                        </svg>
                        <div class="mdc-checkbox__mixedmark"></div>
                    </div>
                </div>
                <label for="my-checkbox" id="my-checkbox-label" style="margin-top:6px; ">grade 1</label>
            </div> 
            <div class="mdc-form-field"  style="width:7.6923%;">
                <div class="mdc-checkbox">
                    <input input type="radio" name="grade" value="2" id="my-checkbox" class="mdc-checkbox__native-control"/>
                    <div class="mdc-checkbox__background">
                        <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                            <path class="mdc-checkbox__checkmark-path" fill="none" stroke="white" d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                        </svg>
                        <div class="mdc-checkbox__mixedmark"></div>
                    </div>
                </div>
                <label for="my-checkbox" id="my-checkbox-label" style="margin-top:6px;">grade 2</label>
            </div> 
            <div class="mdc-form-field"  style="width:7.6923%;">
                <div class="mdc-checkbox">
                    <input input type="radio"name="grade" value="3" id="my-checkbox" class="mdc-checkbox__native-control"/>
                    <div class="mdc-checkbox__background">
                        <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                            <path class="mdc-checkbox__checkmark-path" fill="none" stroke="white" d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                        </svg>
                        <div class="mdc-checkbox__mixedmark"></div>
                    </div>
                </div>
                <label for="my-checkbox" id="my-checkbox-label" style="margin-top:6px;">grade 3</label>
            </div> 
            <div class="mdc-form-field"  style="width:7.6923%;">
                <div class="mdc-checkbox">
                    <input input type="radio" name="grade" value="4" id="my-checkbox" class="mdc-checkbox__native-control"/>
                    <div class="mdc-checkbox__background">
                        <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                            <path class="mdc-checkbox__checkmark-path" fill="none" stroke="white" d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                        </svg>
                        <div class="mdc-checkbox__mixedmark"></div>
                    </div>
                </div>
                <label for="my-checkbox" id="my-checkbox-label" style="margin-top:6px;">grade 4</label>
            </div> 
            <div class="mdc-form-field"  style="width:7.6923%;">
                <div class="mdc-checkbox">
                    <input input type="radio" name="grade" value="5" id="my-checkbox" class="mdc-checkbox__native-control"/>
                    <div class="mdc-checkbox__background">
                        <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                            <path class="mdc-checkbox__checkmark-path" fill="none" stroke="white" d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                        </svg>
                        <div class="mdc-checkbox__mixedmark"></div>
                    </div>
                </div>
                <label for="my-checkbox" id="my-checkbox-label" style="margin-top:6px;">grade 5</label>
            </div> 
            <div class="mdc-form-field"  style="width:7.6923%;">
                <div class="mdc-checkbox">
                    <input input type="radio" name="grade" value="6" id="my-checkbox" class="mdc-checkbox__native-control"/>
                    <div class="mdc-checkbox__background">
                        <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                            <path class="mdc-checkbox__checkmark-path" fill="none" stroke="white" d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                        </svg>
                        <div class="mdc-checkbox__mixedmark"></div>
                    </div>
                </div>
                <label for="my-checkbox" id="my-checkbox-label" style="margin-top:6px;">grade 6</label>
            </div>
            <div class="mdc-form-field" style="width:7.6923%;">
                <div class="mdc-checkbox">
                    <input input type="radio" name="grade" value="7" id="my-checkbox" class="mdc-checkbox__native-control"/>
                    <div class="mdc-checkbox__background">
                        <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                            <path class="mdc-checkbox__checkmark-path" fill="none" stroke="white" d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                        </svg>
                        <div class="mdc-checkbox__mixedmark"></div>
                    </div>
                </div>
                <label for="my-checkbox" id="my-checkbox-label" style="margin-top:6px; ">grade 7</label>
            </div> 
            <div class="mdc-form-field"  style="width:7.6923%;">
                <div class="mdc-checkbox">
                    <input input type="radio" name="grade" value="8" id="my-checkbox" class="mdc-checkbox__native-control"/>
                    <div class="mdc-checkbox__background">
                        <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                            <path class="mdc-checkbox__checkmark-path" fill="none" stroke="white" d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                        </svg>
                        <div class="mdc-checkbox__mixedmark"></div>
                    </div>
                </div>
                <label for="my-checkbox" id="my-checkbox-label" style="margin-top:6px;">grade 8</label>
            </div> 
            <div class="mdc-form-field"  style="width:7.6923%;">
                <div class="mdc-checkbox">
                    <input input type="radio" name="grade" value="9" id="my-checkbox" class="mdc-checkbox__native-control"/>
                    <div class="mdc-checkbox__background">
                        <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                            <path class="mdc-checkbox__checkmark-path" fill="none" stroke="white" d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                        </svg>
                        <div class="mdc-checkbox__mixedmark"></div>
                    </div>
                </div>
                <label for="my-checkbox" id="my-checkbox-label" style="margin-top:6px;">grade 9</label>
            </div> 
            <div class="mdc-form-field"  style="width:7.6923%;">
                <div class="mdc-checkbox">
                    <input input type="radio" name="grade" value="10" id="my-checkbox" class="mdc-checkbox__native-control"/>
                    <div class="mdc-checkbox__background">
                        <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                            <path class="mdc-checkbox__checkmark-path" fill="none" stroke="white" d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                        </svg>
                        <div class="mdc-checkbox__mixedmark"></div>
                    </div>
                </div>
                <label for="my-checkbox" id="my-checkbox-label" style="margin-top:6px;">grade 10</label>
            </div> 
            <div class="mdc-form-field"  style="width:7.6923%;">
                <div class="mdc-checkbox">
                    <input input type="radio" name="grade" value="11" id="my-checkbox" class="mdc-checkbox__native-control"/>
                    <div class="mdc-checkbox__background">
                        <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                            <path class="mdc-checkbox__checkmark-path" fill="none" stroke="white" d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                        </svg>
                        <div class="mdc-checkbox__mixedmark"></div>
                    </div>
                </div>
                <label for="my-checkbox" id="my-checkbox-label" style="margin-top:6px;">grade 11</label>
            </div> 
            <div class="mdc-form-field"  style="width:7.6923%;">
                <div class="mdc-checkbox">
                    <input input type="radio" name="grade" value="12" id="my-checkbox" class="mdc-checkbox__native-control"/>
                    <div class="mdc-checkbox__background">
                        <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                            <path class="mdc-checkbox__checkmark-path" fill="none" stroke="white" d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                        </svg>
                        <div class="mdc-checkbox__mixedmark"></div>
                    </div>
                </div>
                <label for="my-checkbox" id="my-checkbox-label" style="margin-top:6px;">grade 12</label>
            </div>  
        </div>
    </div>
    <div class="form-group form-group-default {{ $errors->has('email') ? ' has-error' : '' }}" id="emailGroup">
        <label>Number of test Persemister</label>
        <div class="controls">
            <input type="number" name="test" value="{{ old('test') }}" placeholder="Number of test Persemister" class="form-control" required>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group form-group-default {{ $errors->has('email') ? ' has-error' : '' }}" id="emailGroup">
                <label>Number of subject</label>
                <div class="controls">
                    <input type="number" name="nosubject" value="{{ old('nosubject') }}" placeholder="Number of Subject" class="form-control" required>
                </div>
            </div>
        </div>  
        <div class="col-md-6">  
            <div class="form-group form-group-default {{ $errors->has('email') ? ' has-error' : '' }}" id="emailGroup">
                <label>Number of Section</label>
                <div class="controls">
                    <input type="number" name="section" value="{{ old('section') }}"  placeholder="Number of Section" class="form-control" required>
                </div>
            </div>
        </div>
    </div>    
    <div class="row">
        <div class="col-md-4">
            <div class="form-group form-group-default" id="phoneGroup">
                <label>Subject 1</label>
                <div class="controls">
                    <input type="text" name="subject1"value="{{ old('subject1') }}" placeholder="Subject 1" class="form-control" >
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group form-group-default" id="phoneGroup">
                <label>Subject 2</label>
                <div class="controls">
                    <input type="text" name="subject2"value="{{ old('subject2') }}" placeholder="Subject 2" class="form-control" >
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group form-group-default" id="phoneGroup">
                <label>Subject 3</label>
                <div class="controls">
                    <input type="text" name="subject3"value="{{ old('subject3') }}" placeholder="Subject 3" class="form-control" >
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group form-group-default" id="phoneGroup">
                <label>Subject 4</label>
                <div class="controls">
                    <input type="text" name="subject4"value="{{ old('subject4') }}" placeholder="Subject 4" class="form-control" >
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group form-group-default" id="phoneGroup">
                <label>Subject 5</label>
                <div class="controls">
                    <input type="text" name="subject5"value="{{ old('subject5') }}" placeholder="Subject 5" class="form-control" >
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group form-group-default" id="phoneGroup">
                <label>Subject 6</label>
                <div class="controls">
                    <input type="text" name="subject6"value="{{ old('subject6') }}" placeholder="Subject 6" class="form-control" >
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group form-group-default" id="phoneGroup">
                <label>Subject 7</label>
                <div class="controls">
                    <input type="text" name="subject7"value="{{ old('subject7') }}" placeholder="Subject 7" class="form-control" >
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group form-group-default" id="phoneGroup">
                <label>Subject 8</label>
                <div class="controls">
                    <input type="text" name="subject8"value="{{ old('subject8') }}" placeholder="Subject 8" class="form-control" >
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group form-group-default" id="phoneGroup">
                <label>Subject 9</label>
                <div class="controls">
                    <input type="text" name="subject9"value="{{ old('subject9') }}" placeholder="Subject 9" class="form-control" >
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group form-group-default" id="phoneGroup">
                <label>Subject 10</label>
                <div class="controls">
                    <input type="text" name="subject10"value="{{ old('subject10') }}" placeholder="Subject 10" class="form-control" >
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group form-group-default" id="phoneGroup">
                <label>Subject 11</label>
                <div class="controls">
                    <input type="text" name="subject11"value="{{ old('subject11') }}" placeholder="Subject 11" class="form-control" >
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group form-group-default" id="phoneGroup">
                <label>Subject 12</label>
                <div class="controls">
                    <input type="text" name="subject12"value="{{ old('subject12') }}" placeholder="Subject 12" class="form-control" >
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group form-group-default" id="phoneGroup">
                <label>Subject 13</label>
                <div class="controls">
                    <input type="text" name="subject13"value="{{ old('subject13') }}" placeholder="Subject 13" class="form-control" >
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group form-group-default" id="phoneGroup">
                <label>Subject 14</label>
                <div class="controls">
                    <input type="text" name="subject14"value="{{ old('subject14') }}" placeholder="Subject 14" class="form-control" >
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group form-group-default" id="phoneGroup">
                <label>Subject 15</label>
                <div class="controls">
                    <input type="text" name="subject15"value="{{ old('subject15') }}" placeholder="Subject 15" class="form-control" >
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group form-group-default" id="phoneGroup">
                <label>Subject 16</label>
                <div class="controls">
                    <input type="text" name="subject16"value="{{ old('subject16') }}" placeholder="Subject 16" class="form-control" >
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group form-group-default" id="phoneGroup">
                <label>Subject 17</label>
                <div class="controls">
                    <input type="text" name="subject17"value="{{ old('subject17') }}" placeholder="Subject 17" class="form-control" >
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group form-group-default" id="phoneGroup">
                <label>Subject 18</label>
                <div class="controls">
                    <input type="text" name="subject18"value="{{ old('subject18') }}" placeholder="Subject 18" class="form-control" >
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group form-group-default" id="phoneGroup">
                <label>Subject 19</label>
                <div class="controls">
                    <input type="text" name="subject19"value="{{ old('subject19') }}" placeholder="Subject 19" class="form-control" >
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group form-group-default" id="phoneGroup">
                <label>Subject 20</label>
                <div class="controls">
                    <input type="text" name="subject20"value="{{ old('subject20') }}" placeholder="Subject 20" class="form-control" >
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group form-group-default" id="phoneGroup">
                <label>Subject 21</label>
                <div class="controls">
                    <input type="text" name="subject21"value="{{ old('subject21') }}" placeholder="Subject 21" class="form-control" >
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group form-group-default" id="phoneGroup">
                <label>Subject 22</label>
                <div class="controls">
                    <input type="text" name="subject22"value="{{ old('subject22') }}" placeholder="Subject 22" class="form-control" >
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group form-group-default" id="phoneGroup">
                <label>Subject 23</label>
                <div class="controls">
                    <input type="text" name="subject23"value="{{ old('subject23') }}" placeholder="Subject 23" class="form-control" >
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group form-group-default" id="phoneGroup">
                <label>Subject 24</label>
                <div class="controls">
                    <input type="text" name="subject24"value="{{ old('subject24') }}" placeholder="Subject 24" class="form-control" >
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group form-group-default" id="phoneGroup">
                <label>Subject 25</label>
                <div class="controls">
                    <input type="text" name="subject25"value="{{ old('subject25') }}" placeholder="Subject 25" class="form-control" >
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group form-group-default" id="phoneGroup">
                <label>Subject 26</label>
                <div class="controls">
                    <input type="text" name="subject26"value="{{ old('subject26') }}" placeholder="Subject 26" class="form-control" >
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group form-group-default" id="phoneGroup">
                <label>Subject 27</label>
                <div class="controls">
                    <input type="text" name="subject27"value="{{ old('subject27') }}" placeholder="Subject 27" class="form-control" >
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group form-group-default" id="phoneGroup">
                <label>Subject 28</label>
                <div class="controls">
                    <input type="text" name="subject28"value="{{ old('subject28') }}" placeholder="Subject 28" class="form-control" >
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group form-group-default" id="phoneGroup">
                <label>Subject 29</label>
                <div class="controls">
                    <input type="text" name="subject29"value="{{ old('subject29') }}" placeholder="Subject 29" class="form-control" >
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group form-group-default" id="phoneGroup">
                <label>Subject 30</label>
                <div class="controls">
                    <input type="text" name="subject30"value="{{ old('subject30') }}" placeholder="Subject 30" class="form-control" >
                </div>
            </div>
        </div>    
    </div>    
    <input type="hidden" name="_token" value="{{ Session::token() }}">
    <button type="submit" class="btn mdc-button--raised btn-primary col-md-offset-4 col-md-4 col-xs-8 col-xs-offset-2 col-sm-8 col-md-offset-2 logas col-md-12" style="background:#3895ac; font-size:15px;" >
        Login
    </button> 

    </form>
</div>
    <a href="{{route('viewtab')}}" class="btn mdc-button--raised btn-primary col-md-offset-4 col-md-4 col-xs-8 col-xs-offset-2 col-sm-8 col-md-offset-2 logas col-md-12" style="background:#3895ac; font-size:15px;" >
        check
    </a> 












