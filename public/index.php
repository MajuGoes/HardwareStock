<?php
require_once '../views/layout/head.php';
?>

<div class="container">
    <div class="left-section">
        <div class="div">
        <div class="logo"></div>
        <h1 class="title">HardwareStock</h1>
        </div>
        <h4 class="subtitle">Sistema Inteligente de Controle de Estoque</h4>
        <p class="description">Gerencie seu inventário de equipamentos de hardware com eficiência e precisão. Nossa plataforma oferece controle completo sobre produtos, fornecedores e movimentações em tempo real, otimizando sua operação com tecnologia de ponta.</p>
    </div>

    <div class="right-section">
        <button type="button" class="button login-btn" data-bs-toggle="modal" data-bs-target="#formLogin">Fazer Login</button>
        <button type="button" class="button signup-btn">Criar conta</button>
    </div>
</div>


<div class="modal fade" id="formLogin" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body">
      <div class="container-login">
        <div class="form-content">
            <form action="#" class="form-login">
                <h1>Login</h1>
                <input type="email" name="email" class="login-input" id="inputEmail" placeholder="Email" required>

                <input type="password" name="password" class="login-input" id="inputPassword" placeholder="Senha" required>

                <div class="form-buttons">
                    <button type="button" id="btnClose" class="form-btn" data-bs-dismiss="modal">Fechar<button>
                    <button type="submit" id="btnLogin" class="form-btn">Entrar</button>
                </div>
            </form>
        </div>
    </div>
</div>

