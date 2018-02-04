<fieldset class="col-md-12">
   <label class="ls-label col-md-6">
      <b class="ls-label-text">CNPJ</b>
      <p class="ls-label-info">Informe a razão Social</p>
      {!! Form::text('cnpj', null, array('placeholder' => 'Ex: 00.000.000/0000-00', 'class'=>'ls-mask-cnpj')) !!}
   </label>
   <label class="ls-label col-md-6">
      <b class="ls-label-text">Nome empresarial</b>
      <p class="ls-label-info">O e-mail da empresa</p>
      {!! Form::text('nome', null, array('placeholder' => 'Ex: ASSOCIACAO EDUCACIONAL NOVE DE JULHO')) !!}
   </label>
   <label class="ls-label col-md-6">
      <b class="ls-label-text">E-mail</b>
      <p class="ls-label-info">Informe a senha</p>
      {!! Form::email('email', null, array('placeholder' => 'Insira a senha')) !!}
   </label>
</fieldset>
<fieldset class="col-md-6">
  <div class="ls-actions-btn">
     <button class="ls-btn">Salvar</button>
  </div>
</fieldset>
      