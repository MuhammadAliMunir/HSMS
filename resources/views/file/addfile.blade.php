@extends('defaultlayout')
@section('tab', 'Add Files')
@section('title', 'Add Files')
@section('middle_content') {{--Put your middle content--}}
    <div>
        <form mathod = "post" action = "{{url('file/creates')}}">
            <div class="form-group">
              <label for="exampleFormControlInput1">File Number</label>
              <input type="text" name="no" class="form-control" id="exampleFormControlInput1" placeholder="N-28">
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect1">Example select</label>
              <select class="form-control" name="status" id="exampleFormControlSelect1">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
            </div>

          </form>
    </div>
@endsection
