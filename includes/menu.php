    <div class="logo"><a href="https://moodle.ibiruba.ifrs.edu.br/mod/assign/view.php?id=92900" class="simple-text logo-normal">
          Exercício LPIV
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item  <?=NAV == 'index' ? 'active' : ''?>">
            <a class="nav-link" href="index.php">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item <?=NAV == 'users' ? 'active' : ''?>">
            <a class="nav-link" href="users.php">
              <i class="material-icons">content_paste</i>
              <p>Usuários Cadastrados</p>
            </a>
          </li>
          <li class="nav-item <?=NAV == 'register' ? 'active' : ''?>">
            <a class="nav-link" href="register.php">
              <i class="material-icons">person</i>
              <p><?= $isUpdate ? 'Atualizar Usuário' : 'Cadastrar Usuário' ?></p>
            </a>
          </li>                  
        </ul>
      </div>
    </div>