@extends('layouts.default', ['title'=> 'Contact'])

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
            <h2>GET IN TOUCH</h2>
            <p class='text-muted'>If you having trouble with the service, please ask <a href="mailto:{{env('MAIL_FROM_ADDRESS')}}">for help</a>.</p>

            <form action="{{ route('contact_path') }}" method="post" >
                {{ csrf_field() }}
                <div class="form-group {{ $errors->first('name') ? 'has-error' : '' }}">
                    <label for="name" class="control-label">Name</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}" required>
                    {!! $errors->first('name',"<span class='help-block'>:message</span>") !!}
                </div>
                <div class="form-group {{ $errors->first('email') ? 'has-error' : '' }}">
                    <label for="email" class="control-label">Email</label>
                    <input type="email" class="form-control" name="email" value="{{ old('email') }}" id="email" required>
                    {!! $errors->first('email',"<span class='help-block'>:message</span>") !!}
                </div>
                <div class="form-group {{ $errors->first('message') ? 'has-error' : '' }}">
                    <label for="message" class="control-label sr-only">Message</label>
                    <textarea class="form-control"  name="message" id="message" rows="9" required>{{ old('message') }}</textarea>
                    {!! $errors->first('message',"<span class='help-block'>:message</span>") !!}
                </div>
                <div class="form-group">
                    <input type="submit" value="Submit Enquiry &raquo;" class="btn btn-primary btn-block" >
                </div>
            </form>
        </div>
    </div>
    
@stop