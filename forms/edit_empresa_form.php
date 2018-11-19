<fieldset>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 toppad" >
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title"><i class='glyphicon glyphicon-cog'></i> Registro</h3>
            </div>
            <div class="panel-body">
              <div class="row">
			  
                <div class="col-md-3 col-lg-3 " align="center"> 
				<div id="load_img">
					<img class="img-responsive" src="fotos/<?php echo $edit ? $empresas['logo_url'] : ''; ?>" alt="Logo">
					
				</div>
				<br>				
					<div class="row">
  						<div class="col-md-12">
							<div class="form-group">
								<input class='filestyle' data-buttonText="Logo" type="file" name="logo_url" id="logo_url">
							</div>
						</div>
						
					</div>
				</div>
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-condensed">
                    <tbody>
                      <tr>
                        <td class='col-md-3'>Nome da Hospital:</td>
                        <td><input type="text" class="form-control input-sm" name="nome_empresa" value="<?php echo $edit ? $empresas['nome_empresa'] : ''; ?>" required></td>
                      </tr>
                      <tr>
                        <td>Telemóvel:</td>
                        <td><input type="text" class="form-control input-sm" name="telefone" value="<?php echo $edit ? $empresas['telefone'] : ''; ?>" required></td>
                      </tr>
                      <tr>
                        <td>Correio Electrónico:</td>
                        <td><input type="email" class="form-control input-sm" name="email" value="<?php echo $edit ? $empresas['email'] : ''; ?>" ></td>
                      </tr>
					  <tr>
                        <td>Pais:</td>
                        <td><input type="text" class="form-control input-sm" name="direcao" value="<?php echo $edit ? $empresas['direcao'] : ''; ?>" required></td>
                      </tr>
					  <tr>
                        <td>Provincia:</td>
                        <td><input type="text" class="form-control input-sm" name="cidade" value="<?php echo $edit ? $empresas['cidade'] : ''; ?>" required></td>
                      </tr>
					  <tr>
                        <td>Município:</td>
                        <td><input type="text" class="form-control input-sm" name="estado" value="<?php echo $edit ? $empresas['estado'] : ''; ?>"></td>
                      </tr>
				                  
                        
                     
                    </tbody>
                  </table>
                  
                  
                </div>
				<div class='col-md-12' id="resultados_ajax"></div><!-- Carga los datos ajax -->
              </div>
            </div>
                 <div class="panel-footer text-center">
                    
                     
                            <button type="submit" class="btn btn-sm btn-success"><i class="glyphicon glyphicon-send"></i>  Cadastrar</button>
                       
                       
                    </div>
               
          </div>
        </div>
</fieldset>
<script type="text/javascript" src="./js/bootstrap-filestyle.js"> </script>