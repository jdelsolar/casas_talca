			<div class="layout-app">

			<div class="container"><div class="innerLR">
	<h4 class="innerAll margin-none bg-white">Agregar casa &nbsp;<i class="fa fa-fw fa-edit"></i></h4>
	<div class="col-separator-h"></div>
	<div class="row">
		<div class="col-sm-9">

			<div class="widget">
				<div class="widget-body innerAll inner-2x">
					<!-- <form class="form-horizontal innerAll" role="form"> -->
                    <?php echo form_open((isset($editar) && $editar == 1) ? 'editar_casa/'.$id_casa : 'agregar_casa', array('class' => 'form-horizontal innerAll', 'role' => 'form')) ?>
                        <div class="form-group">
                            <input type="hidden" name="id_casa" value="<?= set_value('id_casa', isset($id_casa) ? $id_casa : '') ?>"
							<label for="titulo" class="col-sm-2 control-label"></label>
						    <div class="col-sm-10 padding-top-none">
                                <?php if(validation_errors()): ?>
                                <div class="alert alert-danger"><?= validation_errors() ?></div>
                                <?php endif; ?>
						    </div>
					  	</div>
					  	<div class="form-group">
							<label for="titulo" class="col-sm-2 control-label">Título</label>
						    <div class="col-sm-10 padding-top-none">
                                <input type="text" class="form-control" id="titulo" name="titulo" value="<?= set_value('titulo', isset($titulo) ? $titulo : '') ?>">
						    </div>
					  	</div>
					  	<div class="form-group">
						    <label for="descripcion" class="col-sm-2 control-label">Descripción</label>
						    <div class="col-xs-12 col-sm-10 padding-top-none">
                                <textarea class="form-control" rows="5" name="descripcion"><?= set_value('descripcion', isset($descripcion) ? $descripcion : '') ?></textarea>		
						      	<div class="innerTB text-muted">
						      		<i class="icon-note-pad fa fa-fw"></i> 
						      		
						      	</div>
						    </div>
					  	</div>
					  	<div class="form-group">
						    <label for="precio" class="col-sm-2 control-label">Precio</label>
						    <div class="col-sm-3 padding-top-none">
                                <input type="text" class="form-control primary text-center" id="precio" name="precio" value="<?= set_value('precio', isset($precio) ? $precio : '') ?>">
						    </div>
					  	</div>

                        <div class="form-group">
                            <label for="sector" class="col-sm-2 control-label">Sector</label>
                            <div class="col-sm-2">
                                <select class="selectpicker" id="sector" name="sector">
                                    <option value="1" <?= set_select('sector', '1', isset($sector) ? $sector == '1' : false) ?> >1</option>
                                    <option value="2" <?= set_select('sector', '2', isset($sector) ? $sector == '2' : false) ?> >2</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="vende_arrienda" class="col-sm-2 control-label">Vende Arrienda</label>
                            <div class="col-sm-2">
                                <select class="selectpicker" id="vende_arrienda" name="vende_arrienda">
                                    <option value="V" <?= set_select('vende_arrienda', 'V', isset($vende_arrienda) ? $vende_arrienda == 'V' : false) ?> >Vende</option>
                                    <option value="A" <?= set_select('vende_arrienda', 'A', isset($vende_arrienda) ? $vende_arrienda == 'A' : false) ?> >Arrienda</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
						    <label for="superficie" class="col-sm-2 control-label">Superficie</label>
						    <div class="col-sm-3 padding-top-none">
                                <input type="text" class="form-control primary text-center" id="superficie" name="superficie" value="<?= set_value('superficie', isset($superficie) ? $superficie : '') ?>">
						    </div>
					  	</div>
                        <div class="form-group">
						    <label for="superficie_cons" class="col-sm-2 control-label">Superficie Construida</label>
						    <div class="col-sm-3 padding-top-none">
                                <input type="text" class="form-control primary text-center" id="superficie_cons" name="superficie_cons" value="<?= set_value('superficie_cons', isset($superficie_cons) ? $superficie_cons : '') ?>">
						    </div>
					  	</div>
                        <div class="form-group">
						    <label for="banos" class="col-sm-2 control-label">Baños</label>
						    <div class="col-sm-3 padding-top-none">
                                <input type="text" class="form-control primary text-center" id="banos" name="banos" value="<?= set_value('banos', isset($banos) ? $banos : '') ?>">
						    </div>
					  	</div>
                        <div class="form-group">
						    <label for="estacionamientos" class="col-sm-2 control-label">Estacionamientos</label>
						    <div class="col-sm-3 padding-top-none">
                                <input type="text" class="form-control primary text-center" id="estacionamientos" name="estacionamientos" value="<?= set_value('estacionamientos', isset($estacionamientos) ? $estacionamientos : '') ?>">
						    </div>
					  	</div>
                        <div class="form-group">
						    <label for="amoblado" class="col-sm-2 control-label">Amoblado</label>
						    <div class="col-sm-2">
                                <select class="selectpicker" id="amoblado" name="amoblado">
                                    <option value="S" <?= set_select('amoblado', 'S', isset($amoblado) ? $amoblado == 'S' : false) ?> >Si</option>
                                    <option value="N" <?= set_select('amoblado', 'N', isset($amoblado) ? $amoblado == 'N' : false) ?> >No</option>
                                </select>
                            </div>
					  	</div>
                        <div class="form-group">
						    <label for="disponible" class="col-sm-2 control-label">Disponible</label>
						    <div class="col-sm-2">
                                <select class="selectpicker" id="disponible" name="disponible">
                                    <option value="S" <?= set_select('disponible', 'S', isset($disponible) ? $disponible == 'S' : false) ?>>Si</option>
                                    <option value="N" <?= set_select('disponible', 'N', isset($disponible) ? $disponible == 'N' : false ) ?>>No</option>
                                </select>
                            </div>
					  	</div>
				    	<div class="form-group">
						    <label for="dormitorios" class="col-sm-2 control-label">Dormitorios</label>
						    <div class="col-sm-3 padding-top-none">
                                <input type="text" class="form-control" name="dormitorios" id="dormitorios" value="<?= set_value('dormitorios', isset($dormitorios) ? $dormitorios : '') ?>">
						    </div>
						</div>
                        <div class="form-group">
						    <label for="fecha" class="col-sm-2 control-label">Fecha disponible</label>
						    <div class="col-sm-3 padding-top-none">
                                <input type="text" class="form-control" id="inputmask-date" name="fecha" value="<?= set_value('fecha', isset($fecha) ? date('d/m/Y', strtotime($fecha)) : '') ?>">
						    </div>
					  	</div>
						<div class="form-group">
							<label for="beds" class="col-sm-2 control-label">Fotos</label>
							<div class="col-sm-10 padding-top-none">
								<div class="innerT" id="div_fotos">
                                    <?php if (isset($fotos)): ?>
					   				<?php foreach ($fotos as $foto): ?>
									<a href="#" class="pull-left innerR borrar_img" n="<?= $foto ?>" >
                                        <img class="img-clean" src="<?= base_url() ?>uploads/_<?= $foto ?>" />
                                    </a>
                                    <input type="hidden" name="fotos[]" value="<?= $foto ?>" />
                                    <?php endforeach; ?>
                                    <?php endif; ?>
					   			</div>
							</div>
						</div>
						<!-- se agrega el ajaxFileUpload -->
						<script src="<?= base_url() ?>AjaxFileUploaderV2.1/ajaxfileupload.js" ></script>
						<div class="form-group">
							<label for="beds" class="col-sm-2 control-label">Subir foto</label>
							<div class="col-sm-8">
								<input type="file" name="foto" id="foto" />
								<input type="button" class="btn btn-default" name="subir_foto" id="subir_foto" value="Subir Foto" />
								<div id="cargando" style="display:none" ><img src="<?= base_url() ?>AjaxFileUploaderV2.1/loading.gif" alt="cargando" /> cargando foto ... </div>
								<div class="alert alert-danger" id="foto_error" style="display:none"></div>
							</div>
						</div>
<script>
var ifotos = 0;
$(function() {
    $('#subir_foto').click(function(e) {
        e.preventDefault();
		$('#cargando').show();
		$('#foto_error').hide();
        $.ajaxFileUpload({
            url             :"<?= site_url() ?>/agregar_imagen/", 
            secureuri       :false,
            fileElementId   :'foto',
            dataType        : 'json',
            data            : {
                'title'			: 'un dato'
            },
            success : function (data, status)
            {
				$('#cargando').hide();
				if (data.status == 'error') {
					$('#foto_error').show();
					$('#foto_error').attr('class', 'alert alert-danger');
					$('#foto_error').html(data.msg);
				} else {
					$('#foto_error').show();
					$('#foto_error').attr('class', 'alert alert-success');
					$('#foto_error').html(data.msg);
					//<img data-src="holder.js/50x50/dark" class="img-clean" />
					$('#div_fotos').append('<a href="#" class="pull-left innerR borrar_img" n="'+data.nombre+'" ><img data-src="holder.js/150x150/dark" class="img-clean" src="<?= base_url() ?>uploads/_'+data.nombre+'" /></a>');
					$('#div_fotos').append('<input type="hidden" name="fotos[]" value="'+data.nombre+'" />');
					ifotos++;
				}
                //alert(data.msg);
				
            },
			error: function (data, status, e)
			{
				alert(e);
			}
        });
        return false;
    });
	
	$('.borrar_img').live('click', function(e){
		e.preventDefault();
		$(this).remove();
		n = $(this).attr('n');
		$('input[value="'+n+'"]').remove();
	});
});
</script>
						<div class="text-center">
							<!-- <a href="" class="btn btn-primary" type="submit">Save Changes</a> -->
                            <input type="submit" name="enviar" id="btn_enviar" class="btn btn-primary" value="Guardar" />
						</div>
					</form>
				</div>
			</div>
		</div>

		<div class="col-sm-3">
			<div class="widget">
				
				<h4 class="innerAll margin-bottom-none border-bottom bg-primary"><i class="icon-phone fa fa-fw"></i> Contact</h4>
				
				<div class="widget-body bg-gray innerAll inner-2x">
					<form role="form">
					  	<div class="form-group">
					    	<label for="exampleInputName">Name</label>
					    	<input type="text" class="form-control" id="exampleInputName" placeholder="" value="Adrian Demian">
					  	</div>
					  	<div class="form-group">
					    	<label for="exampleInputEmail1">Email address</label>
					    	<input type="email" class="form-control" id="exampleInputEmail1" value="contact@mosaicpro.biz">
					  	</div>
					  	<div class="form-group">
					    	<label for="exampleInputEmail1">Phone</label>
					    	<input type="email" class="form-control" id="exampleInputEmail1" value="01 988 232189">
					  	</div>
					  	<div class="form-group">
					    	<label for="exampleInputEmail1">Address</label>
					    	<textarea type="email" class="form-control" rows="2" id="exampleInputEmail1">Longford Terrace, Monkstown, Ireland</textarea>
					  	</div>
					  	<div class="text-right">
					  		<a href="" class="btn btn-inverse btn-sm"><i class="fa fa-refresh fa-fw"></i> Update Information</a>
					  	</div>
					</form>
				</div>
			</div>
		</div>

	</div>
</div>





	
		
		</div>
		</div>
		</div>
		<!-- // Content END -->
		
		<div class="clearfix"></div>
		<!-- // Sidebar menu & content wrapper END -->
		
