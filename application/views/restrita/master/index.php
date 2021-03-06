

    <div class="main-wrapper main-wrapper-1">

   

     <?php $this->load->view('restrita/layout/navbar'); ?>


     
     <?php $this->load->view('restrita/layout/sidebar'); ?>



      <!-- Main Content -->
      <div class="main-content">



        <section class="section">
          <div class="section-body">

           <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header d-block">
                  <h4><?php echo $titulo; ?></h4>
                   <a data-toggle="tooltip" data-placement="top" title="Cadastrar" href="<?php echo base_url('restrita/' . $this->router->fetch_class() . '/core/'); ?>" class="btn btn-primary mr-2 float-right">Cadastrar</a>
                </div>
                <div class="card-body">



                  <?php if ($mensagem = $this->session->flashdata('sucesso')): ?>


                  <div class="alert alert-success alert-dismissible show fade">
                    <div class="alert-body" style="color: while ! important">
                      <button class="close" data-dismiss="alert">
                        <span>&times;</span>
                      </button>
                      <?php echo $mensagem; ?>
                    </div>
                  </div>

                <?php endif; ?>


                <?php if($mensagem = $this->session->flashdata('erro')): ?>

                  <div class="alert alert-danger alert-dismissible show fade">
                    <div class="alert-body">
                      <button class="close" data-dismiss="alert">
                        <span>&times;</span>
                      </button>
                      <?php echo $mensagem; ?>
                    </div>
                  </div>
                
                <?php endif; ?>

                  <div class="table-responsive">
                    <table class="table table-striped" id="table-1">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Nome da categoria</th>
                          <th>Meta link da categoria</th>
                          <th>Icone da categoria</th>
                          <th>Ativa</th>
                          <th>A????es</th>
                        </tr>
                      </thead>
                      <tbody>



                        <?php foreach ($master as $master): ?>

                          <tr>
                            <td><?php echo $master->categoria_pai_id; ?></td>
                            <td><?php echo $master->categoria_pai_nome; ?></td>
                            <td><?php echo $master->categoria_pai_meta_link; ?></td>
                            <td><?php echo $master->categoria_pai_classe_icone; ?></td>


                            
                            <td><?php echo ($master->categoria_pai_ativa == 1 ? '<div class="badge badge-success badge-shadow">sim</div>' : '<div class="badge badge-danger badge-shadow">n??o</div>'); ?></td>
                            
                            <td>
                              <a data-toggle="tooltip" data-placement="top" title="Editar" href="<?php echo base_url('restrita/' . $this->router->fetch_class() . '/core/' . $master->categoria_pai_id); ?>" class="btn btn-primary mr-2"><i class="fas fa-edit"></i></a>
                              <a data-toggle="tooltip" data-placement="top" title="excluir" href="<?php echo base_url('restrita/' . $this->router->fetch_class() . '/delete/' . $master->categoria_pai_id); ?>" class="btn btn-warning delete" data-confirm="Tem certeza da exclus??o do registro?"><i class="fas fa-trash-alt"></i></a>
                            </td>
                          </tr>

                        <?php endforeach; ?>
                       
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>

          </div>
        </section>


        <?php $this->load->view('restrita/layout/sidebar_configuracoes'); ?>

      </div>     