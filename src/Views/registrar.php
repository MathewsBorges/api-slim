

    <div class="col-md-12">
        <div class="bg-dark text-secondary px-4 py-5 text-center">
            <div class="py-5">
                <i class="fa-solid fa-user-plus me-2 fa-4x text-info mb-2"></i>
              <h1 class="display-5 fw-bold text-white">Registrar-se</h1>
              <div class="col-lg-6 mx-auto">
                <p class="fs-5 mb-4">Faça seu registro para acessar nossa api de gerenciamento</p>
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                  <button type="button" class="btn btn-outline-info btn-lg px-4 me-sm-3 fw-bold">Cadastrar-se</button>
                  <button type="button" class="btn btn-outline-light btn-lg px-4">Fazer Login</a></button>
                </div>
              </div>
            </div>
          </div>
        <div class="container">
            <main>
          
              <div class="row g-5 mt-2">
                <div class="col-md-5 col-lg-4 order-md-last card shadow p-4">
                  <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-primary">Suas Credenciais</span>
                
                  </h4>
                  <ul class="list-group mb-3">
                    <li class="list-group-item d-flex justify-content-between lh-sm">
                      <div>
                        <h6 class="my-0">Nome Completo</h6>
                        <small class="text-muted">Brief description</small>
                      </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-sm">
                      <div>
                        <h6 class="my-0">Data de Nascimento</h6>
                        <small class="text-muted">Brief description</small>
                      </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-sm">
                      <div>
                        <h6 class="my-0">CPF</h6>
                        <small class="text-muted">Brief description</small>
                      </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-sm">
                        <div>
                          <h6 class="my-0">Email</h6>
                          <small class="text-muted">Brief description</small>
                        </div>
                      </li>
                      <li class="list-group-item d-flex justify-content-between lh-sm">
                        <div>
                          <h6 class="my-0">Senha</h6>
                          <small class="text-muted">Brief description</small>
                        </div>
                      </li>
                  
                  </ul>
          
                  <form class="card p-2">
           
                      <button type="submit" class="btn btn-primary">Registrar-se</button>
        
                  </form>
                </div>
                <div class="col-md-7 col-lg-8" id="informacoes">
                  <h4 class="mb-3">Informações Pessoais</h4>
                  <form class="needs-validation" novalidate="">
                    <div class="row g-3">
                      <div class="col-sm-6">
                        <label for="firstName" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
                        <div class="invalid-feedback">
                          Nome é requerido
                        </div>
                      </div>
          
                      <div class="col-sm-6">
                        <label for="lastName" class="form-label">Sobrenome</label>
                        <input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
                        <div class="invalid-feedback">
                          Sobrenome é requerido
                        </div>
                      </div>

                      <div class="col-sm-6">
                        <label for="nascimento" class="form-label">Data de Nascimento</label>
                        <input type="date" class="form-control" id="nascimento" placeholder="" value="" required="">
                        <div class="invalid-feedback">
                          Data de Nascimento
                        </div>
                      </div>
          
                      <div class="col-sm-6">
                        <label for="lastName" class="form-label">CPF</label>
                        <input type="text" class="form-control" id="lastName" placeholder="000.000.000-00" value="" required="">
                        <div class="invalid-feedback">
                          Sobrenome é requerido
                        </div>
                      </div>
          
                
          
                      <div class="col-12">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="you@example.com">
                        <div class="invalid-feedback">
                          Please enter a valid email address for shipping updates.
                        </div>
                      </div>

                      <div class="col-12">
                        <label for="password" class="form-label">Senha</label>
                        <input type="password" class="form-control" id="password" placeholder="">
                        <div class="invalid-feedback">
                          Please enter a valid email address for shipping updates.
                        </div>
                      </div>
          
                     
            </main>
          
            <footer class="my-5 pt-5 text-muted text-center text-small">
              <p class="mb-1">© 2023 Matheus N. Borges, Prog Web II</p>
           
            </footer>
          </div>
    </div>
