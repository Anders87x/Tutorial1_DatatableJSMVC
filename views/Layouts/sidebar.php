    

    <div class="sidebar-header">
        <div class="logo" >

            <?php foreach ($config as $c): ?>
                <img style="border-radius: 150px;" src='<?php echo base_url();?>IMG0001/<?=$c->logo;?>' width='80px'>
            <?php endforeach ?>
            
        </div>
    </div>

    <div class="main-menu">

        <div class="menu-inner">
            <nav>
                <ul class="metismenu" id="menu">

                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"> <i class="fas fa-book-open"></i> <span>Citas</span></a>
                        <ul class="collapse">
                            <li><a href="<?php echo base_url(); ?>Citas_control">Listado de citas</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="fas fa-user-md"></i><span>Médicos</span></a>
                        <ul class="collapse">
                            <li> <a href="<?php echo base_url(); ?>control_medico">Registro de médicos</a> </li>
                            <li> <a href="<?php echo base_url(); ?>control_medico/nuevo">Nuevo médico</a> </li>
                            <li> <a href="<?php echo base_url(); ?>control_medico/nueva_profesion">Nueva Profesión</a> </li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="fas fa-user-alt"></i><span>Pacientes</span></a>
                        <ul class="collapse">
                            <li> <a href="<?php echo base_url(); ?>pacientes_controller">Registro de pacientes</a> </li>
                            <li> <a href="<?php echo base_url(); ?>pacientes_controller/Nuevo">Nuevo paciente</a> </li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="fas fa-hospital"></i><span>Consultorios</span></a>
                        <ul class="collapse">
                            <li> <a href="<?php echo base_url(); ?>consultorios_controller">Registro de consultorios</a> </li>
                            <li> <a href="<?php echo base_url(); ?>consultorios_controller/Nuevo">Agregar nuevo consultorio</a> </li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="fas fa-stethoscope"></i><span>Especialidades médicas</span></a>
                        <ul class="collapse">
                            <li> <a href="<?php echo base_url(); ?>control_especialidades">Registro de especialidades</a> </li>
                            <li> <a href="<?php echo base_url(); ?>control_especialidades/New">Agregar nueva especialidad</a> </li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="fas fa-edit"></i><span>Reportes</span></a>
                        <ul class="collapse">
                           <li> <a href="#">Reportes de citas</a> </li>
                           <li> <a href="#">Citas programadas</a> </li>
                        </ul>
                    </li>

                      <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="fas fa-tools"></i><span>Configuración</span></a>
                        <ul class="collapse">
                            <li> <a href="<?php echo base_url(); ?>configuracion_controller">Tabla de Configuraciones</a> </li>
                            
                        </ul>
                    </li>



                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="fas fa-user-lock"></i><span>Administración de acceso</span></a>
                        <ul class="collapse">
                           <li> <a href="<?php echo base_url(); ?>usuarios_control">Listado de roles</a> </li>
                           <li> <a href="<?php echo base_url(); ?>usuarios_control/nuevo_usuario">Asignar nuevo rol</a> </li>
                           <li> <a href="<?php echo base_url(); ?>usuarios_control/nuevo_acceso">Asignar nuevo nivel de acceso</a> </li>
                        </ul>
                    </li>

                </ul>
            </nav>
        </div>
    </div>