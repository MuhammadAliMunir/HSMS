@extends('defaultlayout')
@section('title', 'File Transfer/Booking')
@section('middle_content') {{--Put your middle content--}}
<div class="card">
        <h5 class="card-header">File Transfer/Booking</h5>
        <div class="card-body">
            <form id="validationform" data-parsley-validate="" novalidate="">
                <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Id</label>
                    <div class="col-12 col-sm-8 col-lg-6">
                        <input type="text" required="" placeholder="Type something" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right">File NO</label>
                    <div class="col-12 col-sm-8 col-lg-6">
                        <input type="text" required="" data-parsley-minlength="6" placeholder="Min 6 chars." class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-12 col-sm-3 col-form-label text-sm-right">New Owner CNIC</label>
                    <div class="col-12 col-sm-8 col-lg-6">
                        <input type="text" required="" data-parsley-maxlength="6" placeholder="Max 6 chars." class="form-control">
                    </div>
                </div>

                <div class="form-group row text-right">
                    <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                        <button type="submit" class="btn btn-space btn-primary">Submit</button>
                        <button class="btn btn-space btn-secondary">Cancel</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
