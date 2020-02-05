@extends('layouts.default', ['title'=> 'Contact'])

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
            <h2>GET IN TOUCH</h2>
            <p class='text-muted'>If you having trouble with the service, please ask <a href="mailto:charlotkuete11@gmail.com">for help</a>.</p>

            <form action="" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name" class="control-label">Name</label>
                    <input type="text" class="form-control" name="name" id="name" required>
                </div>
                <div class="form-group">
                    <label for="email" class="control-label">Email</label>
                    <input type="email" class="form-control" name="email" id="email" required>
                </div>
                <div class="form-group">
                    <label for="message" class="control-label sr-only">Message</label>
                    <textarea class="form-control" name="message" id="message" rows="9"></textarea>
                </div>
                <div class="form-group">
                    <input type="submit" value="Submit Enquiry &raquo;" class="btn btn-primary btn-block">
                </div>
            </form>
        </div>
    </div>
    
@stop