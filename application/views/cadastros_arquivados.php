<div class="page-wrapper">
    <!-- ============================================================== -->

    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        
    <?php if ($this->session->flashdata('sucess') == TRUE): ?>
            <div class="alert alert-success alert-dismissible" id="myAlert">
                <a href="#" class="close">&times;</a>
                <strong> <?php echo $this->session->flashdata('sucess'); ?></strong> 
            </div>
        <?php endif; ?>

        <?php if ($this->session->flashdata('error') == TRUE): ?>
            <div class="alert alert-danger alert-dismissible" id="myAlert">
                <a href="#" class="close">&times;</a>
                <strong> <?php echo $this->session->flashdata('error'); ?></strong> 
            </div>
        <?php endif; ?>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Lista de Cadastros Arquivados</h5>
                <div class="table-responsive">
                    <table id="zero_config" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Data e Hora</th>
                                <th>Nome</th>
                                <th>CPF</th>
                                <th>Telefone</th>
                                <th>Data Nascimento</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php foreach ($mulheres as $woman) : ?>
                                <tr>
                                    <td><?= $woman['cod_usuaria'] ?></td>
                                     <td><?= date("d/m/Y - H:i", strtotime($woman['data_cadastro'])) ?></td>
                                    <td><?= $woman['nome'] ?></td>
                                    <td><?= $woman['cpf'] ?></td>
                                    <td><?= $woman['celular']; ?></td>
                                    <td><?= date("d/m/Y", strtotime($woman['data_nascimento'])) ?></td>


                                    <td>

                                        <a class="btn btn-info btn-xs" class="btn btn-group"  href="<?= base_url('Cadastro_mulher/vizualizar_cadastro/' . $woman['cod_usuaria']); ?>">Detalhar</a>

                                        <a class="btn btn-success btn-xs" class="btn btn-group" data-confirm href="<?= base_url('Cadastro_mulher/ativar_cadastro/' . $woman['cod_usuaria']); ?>">Ativa Cadastro</a>

                                    </td>
                                </tr>
                            <?php endforeach; ?>

                        </tbody>

                    </table>
                </div>


            </div>
        </div>
    </div>
</div> <!-- fim da div wrapp-->




