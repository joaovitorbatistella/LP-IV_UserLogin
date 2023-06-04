<?php
    $message = '';
    if(isset($_GET['status'])){
        switch($_GET['status']){
            case 'success':
                $message = '<div class="alert alert-success">Ação executada com sucesso!</div>';
                break;
            case 'error':
                $message = '<div class="alert alert-danger">Ação não executada!</div>';
                break;
        }
    }

    $results = '';
    foreach($users as $user){
        $results .=  '<tr>
                            <td>'.$user->id.'</td>
                            <td>'.$user->first_name.' '.$user->last_name.'</td>
                            <td>'.$user->country.'</td>
                            <td>'.$user->city.'</td>
                            <td class="text-primary">-</td>
                            <td>
                              <a href="edit.php?id='.$user->id.'">
                                <button type="button" class="btn btn-primary">Editar</button>
                              </a>
                              <a href="delete.php?id='.$user->id.'">
                                <button type="button" class="btn btn-danger">Excluir</button>
                              </a>
                            </td>
                         </tr>';
    } 
    
    $results = strlen($results) ? $results : '<tr><td colspan="6" class="text-center">Não há projetos cadastrados!</td></tr>';
    
?>

      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Simple Table</h4>
                  <p class="card-category"> Here is a subtitle for this table</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                          Name
                        </th>
                        <th>
                          Country
                        </th>
                        <th>
                          City
                        </th>
                        <th>
                          Salary
                        </th>
                        <th>
                          Actions
                        </th>
                      </thead>
                      <tbody>
                        <?=$results?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="card card-plain">
                <div class="card-header card-header-primary">
                  <h4 class="card-title mt-0"> Table on Plain Background</h4>
                  <p class="card-category"> Here is a subtitle for this table</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead class="">
                        <th>
                          ID
                        </th>
                        <th>
                          Name
                        </th>
                        <th>
                          Country
                        </th>
                        <th>
                          City
                        </th>
                        <th>
                          Salary
                        </th>
                        <th>
                          Actions
                        </th>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            1
                          </td>
                          <td>
                            Dakota Rice
                          </td>
                          <td>
                            Niger
                          </td>
                          <td>
                            Oud-Turnhout
                          </td>
                          <td>
                            $36,738
                          </td>
                          <td class="td-actions">
                            <a href="">
                              <button type="button" rel="tooltip" title="" class="btn btn-primary btn-link btn-sm" data-original-title="Editar Usuário">
                                <i class="material-icons">edit</i>
                                <div class="ripple-container"></div>
                              </button>
                            </a>
                            <a href="">
                              <button type="button" rel="tooltip" title="" class="btn btn-danger btn-link btn-sm" data-original-title="Remover">
                                <i class="material-icons">close</i>
                                <div class="ripple-container"></div>
                              </button>                              
                            </a>                           
                          </td>
                        </tr>
                        <tr>
                          <td>
                            2
                          </td>
                          <td>
                            Minerva Hooper
                          </td>
                          <td>
                            Curaçao
                          </td>
                          <td>
                            Sinaai-Waas
                          </td>
                          <td>
                            $23,789
                          </td>
                          <td class="td-actions">
                            <a href="">
                              <button type="button" rel="tooltip" title="" class="btn btn-primary btn-link btn-sm" data-original-title="Editar Usuário">
                                <i class="material-icons">edit</i>
                                <div class="ripple-container"></div>
                              </button>
                            </a>
                            <a href="">
                              <button type="button" rel="tooltip" title="" class="btn btn-danger btn-link btn-sm" data-original-title="Remover">
                                <i class="material-icons">close</i>
                                <div class="ripple-container"></div>
                              </button>                              
                            </a>                           
                          </td>
                        </tr>
                        <tr>
                          <td>
                            3
                          </td>
                          <td>
                            Sage Rodriguez
                          </td>
                          <td>
                            Netherlands
                          </td>
                          <td>
                            Baileux
                          </td>
                          <td>
                            $56,142
                          </td>
                          <td class="td-actions">
                            <a href="">
                              <button type="button" rel="tooltip" title="" class="btn btn-primary btn-link btn-sm" data-original-title="Editar Usuário">
                                <i class="material-icons">edit</i>
                                <div class="ripple-container"></div>
                              </button>
                            </a>
                            <a href="">
                              <button type="button" rel="tooltip" title="" class="btn btn-danger btn-link btn-sm" data-original-title="Remover">
                                <i class="material-icons">close</i>
                                <div class="ripple-container"></div>
                              </button>                              
                            </a>                           
                          </td>
                        </tr>
                        <tr>
                          <td>
                            4
                          </td>
                          <td>
                            Philip Chaney
                          </td>
                          <td>
                            Korea, South
                          </td>
                          <td>
                            Overland Park
                          </td>
                          <td>
                            $38,735
                          </td>
                          <td class="td-actions">
                            <a href="">
                              <button type="button" rel="tooltip" title="" class="btn btn-primary btn-link btn-sm" data-original-title="Editar Usuário">
                                <i class="material-icons">edit</i>
                                <div class="ripple-container"></div>
                              </button>
                            </a>
                            <a href="">
                              <button type="button" rel="tooltip" title="" class="btn btn-danger btn-link btn-sm" data-original-title="Remover">
                                <i class="material-icons">close</i>
                                <div class="ripple-container"></div>
                              </button>                              
                            </a>                           
                          </td>
                        </tr>
                        <tr>
                          <td>
                            5
                          </td>
                          <td>
                            Doris Greene
                          </td>
                          <td>
                            Malawi
                          </td>
                          <td>
                            Feldkirchen in Kärnten
                          </td>
                          <td>
                            $63,542
                          </td>
                          <td class="td-actions">
                            <a href="">
                              <button type="button" rel="tooltip" title="" class="btn btn-primary btn-link btn-sm" data-original-title="Editar Usuário">
                                <i class="material-icons">edit</i>
                                <div class="ripple-container"></div>
                              </button>
                            </a>
                            <a href="">
                              <button type="button" rel="tooltip" title="" class="btn btn-danger btn-link btn-sm" data-original-title="Remover">
                                <i class="material-icons">close</i>
                                <div class="ripple-container"></div>
                              </button>                              
                            </a>                           
                          </td>
                        </tr>
                        <tr>
                          <td>
                            6
                          </td>
                          <td>
                            Mason Porter
                          </td>
                          <td>
                            Chile
                          </td>
                          <td>
                            Gloucester
                          </td>
                          <td>
                            $78,615
                          </td>
                          <td class="td-actions">
                            <a href="">
                              <button type="button" rel="tooltip" title="" class="btn btn-primary btn-link btn-sm" data-original-title="Editar Usuário">
                                <i class="material-icons">edit</i>
                                <div class="ripple-container"></div>
                              </button>
                            </a>
                            <a href="">
                              <button type="button" rel="tooltip" title="" class="btn btn-danger btn-link btn-sm" data-original-title="Remover">
                                <i class="material-icons">close</i>
                                <div class="ripple-container"></div>
                              </button>                              
                            </a>                           
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      