
    <div class="contact_bottom">

                        @csrf

                        <div class="form-group">



                                <input id="name" type="text" placeholder="أدخل اسمك" class="form-control @error('name') is-invalid @enderror" name="name" value="{{isset($user)? $user->name:''}}"  required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

</div>



                        <div class="form-group">



                                <select id="admin" type="text" class="form-control @error('admin') is-invalid @enderror" name="admin"  required autocomplete="name" autofocus>
                                    @if (isset($user))

                                    @if ($user->admin == 1)
                                    <option value="1">مدير</option>
                                    <option value="0">عضو</option>
                                    @else
                                    <option value="0">عضو</option>
                                    <option value="1">مدير</option>
                                    @endif
                                    @else
<option value="0">عضو</option>
<option value="1">مدير</option>

                                      @endif

                                </select>

                                @error('admin')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

</div>




                            <div class="form-group">

                                <input id="email" type="email" placeholder="ادخل حسابك " class="form-control pr-0 @error('email') is-invalid @enderror" name="email" value="{{isset($user)?$user->email:'' }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror


 </div>
@if (!isset($user))
                             <div class="form-group">

                                <input id="password" type="password"
                                placeholder="ادخل كلمة المرور"
                                class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
   <div class="form-group ">



                                <input id="password-confirm" placeholder="ادخل تأكيد كلمة المرور" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                        </div>
@endif



                        <div class="form-group row mb-0">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">
                                    {{ isset($user)?__('تعديل '):__('انشاء حساب ') }}
                                </button>
                            </div>
                        </div>

</div>
