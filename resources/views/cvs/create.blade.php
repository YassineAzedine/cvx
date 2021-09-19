@extends('layouts.app')
@section('content')





 <div class="container">
    @if(count($errors))
    <div class="alert alert-danger" role="alert">
    
    <ul>
        @foreach ($errors->all() as $message)
        <li>{{$message}}</li>    
        @endforeach
    </ul>
</div>
    @endif
     <div class="row">
         <div class="col-12">
            <form action="{{ url('cvs') }} " method="post" >
                @csrf
                <div class="form-group">
                    <label for="">Titre</label>
                    <input type="text" name="titre" class="form-control" value="{{old('titre')}}">
                </div>
                <div class="form-group">
                    <label for="">presentation</label>
                    <textarea type="text" name="presentation" class="form-control" value=""> {{old('presentation')}}</textarea>
                </div>
                <div class="form-group">
                    
                    <input type="submit" class="form-control btn btn-primary" value="enregesté">

                </div>
            </form>
         </div>
     </div>
 </div>   
@endsection