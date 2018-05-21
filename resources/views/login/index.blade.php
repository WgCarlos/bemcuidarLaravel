@include('layout._includes.header')

<div class="container">
  <div class="login">
    <form action="{{route('site.login.entrar')}}" method="post">
        {{csrf_field()}}
      <div class="form-group">
        <label for="exampleInputEmail1">Email</label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="email@email.com">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Senha</label>
        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="senha">
      </div>
      <div class="form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Lembre-me</label>
      </div>
      <button type="submit" class="btn btn-primary">Entrar</button>
    </form>
  </div>
</div>

@include('layout._includes.footer')
