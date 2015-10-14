

				<ul class="main-navigation-menu">
					<?php if ($_SESSION['perfil'] == 1 ){  ?>
						<li>
							<a id="home" href="home.php"><i class="clip-home-3"></i>
								<span class="title"> Inicio </span>
								<span class="selected"></span>
							</a>
						</li>
						<li>
							<a id="data" href="data.php"><i class="clip-user-2"></i>
								<span class="title"> Usuario </span>
								<span class="selected"></span>
							</a>
						</li>
						<li>
							<a href="javascript:void(0)"><i class="clip-pencil"></i>
								<span class="title"> Censos </span><i class="icon-arrow"></i>
								<span class="selected"></span>
							</a>
							<ul class="sub-menu">

								<li>
									<a id="datos" href="datos.php">
										<span class="title"> Registro Jefe de Familia </span>
										<span class="selected"></span>
									</a>
								</li>

								<li>
									<a id="consultaperfil" href="consultaperfil.php">
										<span class="title"> Lista de Censados </span>
									</a>
								</li>
								<li>
									<a id="consulta" href="consulta.php">
										<span class="title">Reportes</span>
									</a>
								</li>

							</ul>
						</li>
						<li>
							<a id="paginamensaje" href="pagina_mensaje.php"><i class="clip-bubble-2"></i>
								<span class="title"> Mensajes </span>
								<span class="selected"></span>
							</a>
						</li>

					<?php	}elseif ($_SESSION['perfil'] == 2 ) { 
						/// para que no vera el administrador si no el operador
						?>					
				
						<li>
							<a id="home" href="home.php"><i class="clip-home-3"></i>
								<span class="title"> Inicio </span>
								<span class="selected"></span>
							</a>
						</li>						
						<li>
							<a href="javascript:void(0)"><i class="clip-pencil"></i>
								<span class="title"> Censos </span><i class="icon-arrow"></i>
								<span class="selected"></span>
							</a>
							<ul class="sub-menu">

								<li>
									<a id="datos" href="datos.php">
										<span class="title"> Registro Jefe de Familia </span>
										<span class="selected"></span>
									</a>
								</li>

								<li>
									<a id="consultaperfil" href="consultaperfil.php">
										<span class="title"> Lista de Censados </span>
									</a>
								</li>
							</ul>
						</li>
						<li>
							<a id="paginamensaje" href="pagina_mensaje.php"><i class="clip-bubble-2"></i>
								<span class="title"> Mensajes </span>
								<span class="selected"></span>
							</a>
						</li>	
					<?php	}  ?>	
					</ul>
