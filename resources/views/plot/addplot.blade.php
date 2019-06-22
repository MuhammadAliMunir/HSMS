@extends('defaultlayout')
@section('title', 'Add Plot')
@section('middle_content') {{--Put your middle content--}}
    <div class="card">
        <div class="card-header">
            Add Plot
        </div>
        <div class="card-body">
        <form mathod = "post" action = "{{url('plot/store')}}" data-parsley-validate="" novalidate="">
            <div class="form-group row">
                <label class="col-12 col-sm-3 col-form-label text-sm-right">Plot Number</label>
                <div class="col-12 col-sm-8 col-lg-6">
                    <input type="text" name="number" required="" placeholder="Type something" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-12 col-sm-3 col-form-label text-sm-right">Status</label>
                <div class="col-12 col-sm-8 col-lg-6">
                    <input type="text" name="status" required="" placeholder="Type something" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-12 col-sm-3 col-form-label text-sm-right">Street</label>
                <div class="col-12 col-sm-8 col-lg-6">
                    <input type="text" name="street" required="" placeholder="Type something" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-12 col-sm-3 col-form-label text-sm-right">Block</label>
                <div class="col-12 col-sm-8 col-lg-6">
                    <input type="text" name="block" required="" placeholder="Type something" class="form-control">
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
