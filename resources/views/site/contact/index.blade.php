@extends('template.template')
@section('content')
<div class="container pt-5 pb-5">
  <div class="row pb-5">
    <div class="col-md-6">
      <img src="{{asset("/img/ES.png")}}" width="600rem">
    </div>
    <div class="col-md-6">
      <form>
         <!-- Email input -->
         <div class="form-outline mb-4">
          <input type="email" id="form6Example5" class="form-control" />
          <label class="form-label" for="form6Example5">Email</label>
        </div>
        <!-- Text input -->
        <div class="form-outline mb-4">
          <input type="text" id="form6Example4" class="form-control" />
          <label class="form-label" for="form6Example4">Assunto</label>
        </div>
      
        <!-- Message input -->
        <div class="form-outline mb-4">
          <textarea class="form-control" id="form6Example7" rows="4"></textarea>
          <label class="form-label" for="form6Example7">Mensagem</label>
        </div>
      
        <!-- Submit button -->
        <button type="submit" class="btn btn-outline-dark btn-block mb-4">Enviar</button>
      </form>
    </div>
  </div>
</div>
@endsection