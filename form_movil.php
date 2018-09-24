<div class="col-lg-3 col-12 d-none d-lg-flex bg-white py-5  align-items-center justify-content-center flex-column text-center">
			<h1 class="h2 py-0">DENUNCIA ANÓNIMA <span class="d-block  text-info text-uppercase mb-4">Venta de drogas</span>
			</h1>

			<div class="brand d-none d-lg-block bg-white  shadow">
				<img class="py-3" src="images/logo-ministerio-gris.svg" alt="">
				<img  src="images/logo-narco.jpg" alt="">
			</div>
			
		</div>
		<div class="col-lg-4 col-12 bg-white p-0  pb-3">
			<div class="stepwizard pagination">
					<div class="setup-panel d-flex">
						<div class="stepwizard-step">
							<a href="#step-1"  class=" btn-selected"></a>
						</div>
						<div class="stepwizard-step">
							<a href="#step-2"  class=" btn-inactive" disabled="disabled"></a>
						</div>
						<div class="stepwizard-step">
							<a href="#step-3"  class="btn-inactive" disabled="disabled"></a>
						</div>
			
				    </div>
			</div>
			<section class="denuncia">   
			  <form role="form" id="form" action="gracias.php" method="post">
			  	
			
			  	<div id="step-1" class="setup-content text-center">
			  		<div class="wrap flex-column  align-items-center justify-content-center ">
			  			<img class=" d-none d-md-block d-lg-none w-100" src="images/narco-1.jpg" alt="">
			  			<div class="  leyenda alert bg-light  alert-dismissible fade show text-left pr-3" role="alert">
			  				<div class="container">
			  					<div class=" d-flex align-items-center">
			  						<img class="mr-2" src="images/ico-incongnito.svg" alt="">
			  						<small>
			  							<strong>Oficina de Narcomenudeo del MPF de Santiago del Estero</strong>
			  							Desde aquí, podés ayudarnos a terminar con la venta de drogas en nuestra provincia, y así, lograr que tu cuadra, tu barrio, tu lugar esté libre DEL NARCOTRAFICO para que construyas junto a tus seres queridos un mejor futuro. Vos lo necesitas, nosotros te ayudamos.
			  						Solo completas estas preguntas con la información que tengas y creas necesaria.</small>
			  					
			  						
			  					</div> 
			  					<button type="button" class="close pl-1" data-dismiss="alert" aria-label="Close">
			  					<span aria-hidden="true">&times;</span>
			  				</button>
			  				</div>
			  				
			  				
			  			</div>
			  			
			  			<header class="text-center d-lg-none py-3 w-100">
			  				<div class="container">
			  					
			  					<h1 class="h4 py-0">DENUNCIA ANÓNIMA
			  						<span class="d-none d-md-inline-block">/</span>
			  					<span class="d-block d-md-inline-block text-info text-uppercase mb-4">Venta de drogas</span>
			  					</h1>
								
			  				</div>
			  				<hr>
			  				
			
			  			</header>  		
			  			<div class="container text-left">
			  				<h4 class="my-2  text-center text-secondary mt-lg-5">¿Sabes quien vende?</h4>
			  				<div class="btn-group btn-group-toggle w-100 mt-2" data-toggle="buttons">
			  					<label class="btn btn-light btn-lg active w-50">
			  						<input type="radio" name="radio-vendedor" id="si" autocomplete="off" value="si" checked> SI
			  					</label>
			  					<label class="btn btn-light btn-lg w-50 text-secondary ">
			  						<input type="radio" name="radio-vendedor" id="no" autocomplete="off" value="no"> NO
			  					</label>					  
			  				</div>
			  				<div id="vendedor" class="form-group bg-white py-1 tex-left">
			  					<label class="control-label d-none" for="name"><p class=" mb-0">Nombre, apellido o apodo</p>	</label>
			  					<input  id="nombre" name="nombre" class="form-control bg-white form-control-lg" required="required"   maxlength="100" type="text" placeholder="Nombre, apellido o apodo"  />
			  				</div>
			  				<button class="btn btn-info btn-block nextBtn btn-lg pull-right mt-1" type="button" >Continuar <i class="fas fa-long-arrow-alt-right ml-4"></i></button>
			  				<div class="d-lg-none d-flex justify-content-center mt-2 py-2">
			  					<img src="images/logo-ministerio-gris.svg" alt="">
			  					
			  				</div>
			  				
			  			</div>
			
			  		</div>
			  	</div><!-- STEP-1 -->
			
			
			  	<div id="step-2" class="setup-content bg-white text-dark  text-center">
			  		<div class="wrap d-md-flex flex-column  align-items-center justify-content-center ">
			  			<div class="container py-5">
			  				<div class="form-group">
			  					<label class="control-label" for="detail"><h3 class="h5">Detalles de la denuncia</h3></label>
			  					<p class="detalle-info">¿Algo te llamó la atención? Puede ser horario, si fue en la puerta de una casa o por la ventana o en la esquina de la cuadra, vehículos, entre otros datos que creas necesarios.</p>
			  					<textarea  id="detail" name="detail" class="form-control bg-white form-control-lg" required="required"   maxlength="100" type="text" placeholder="Contanos lo que viste..." rows="3" ></textarea>
			  				</div>  
			  				<p class="my-2">¿Realizaste la denuncia en una comisaría?</p>
			  				<div class=" btn-group btn-group-toggle w-100 mt-2 mb-2" data-toggle="buttons">
			  					
			  					<label class="btn btn-light btn-lg  active w-50">
			  						<input type="radio" name="radio-comisaria" id="no-com" autocomplete="off" value="no" checked  data-target="#comisaria-list"> NO
			
			  						<a href="" class="btn"></a>
			  					</label>
			  					<label class="btn btn-light btn-lg w-50">
			  						<input type="radio" name="radio-comisaria" id="si-com" autocomplete="off" value="si" > SI
			  					</label>
			
			
			  								  
			  				</div>	
			  				<select name="comisaria" id="comisaria" class="form-control form-control-lg  mb-3">
			  						<option value="" >Seleccionar comisaria</option>
			  					
			  				</select>
			
			                <button class="btn btn-info btn-block nextBtn btn-lg pull-right" type="button" >Continuar <i class="fas fa-long-arrow-alt-right ml-4"></i></button> 
			  				
			
			  			</div>
			  		</div>
			  	</div><!-- STEP-2 -->
			
			  	<div id="step-3" class="setup-content bg-info   text-center text-light pb-4">
			  		<div class="wrap d-md-flex flex-column  align-items-center justify-content-center ">
			  			<div class="container">
			  				<h3> <i class="fas fa-map-marker-alt text-success mt-3"></i></h3>
			  				<div class="form-group">
			  					<select name="localidad" id="localidad" class="form-control form-control-lg ">
			  						<option value="" >Seleccionar localidad</option>
			  					</select>
							</div>
							<div class="form-group">
			  					<input  id="diraprox" name="diraprox" class="form-control bg-light form-control-lg mt-3" required="required"   maxlength="100" type="text" placeholder="Dirección aproximada"   required="required"/>
			
			  					<p class="mb-1 mt-4">También puede indicar un punto en el mapa</p>
			  					<div id="google-maps" class="mt-0" style="height: 200px; width:100%"></div>
			
			  					<!-- input untuk menampung koordinat -->
			  					<input type="hidden" name="longitude" value="" />
			  					<input type="hidden" name="latitude" value="" />	
			  				</div>
			
			
			
			  				<button type="submit" class="btn btn-primary btn-lg btn-block">Enviar denuncia<i class="fas fa-long-arrow-alt-right ml-4"></i></button>
			  			</div>
			  		</div>  		
			  	</div>
			  	
			
			  </form>
			  
			
			
			</section>
			</div>
