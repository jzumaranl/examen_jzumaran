<?php include('header.php');?>

<section id="page">

<div class="container">
<div class="row">
  <div class="col-lg-12 text-center">
    <h2 class="page-heading">Proyecciones</h2>
  </div>
  <div class="col-lg-10 col-lg-offset-1">

    <?php
    $csv = array_map('str_getcsv', file('datos/futuro.csv'));
    array_walk($csv, function(&$a) use ($csv) {$a = array_combine($csv[0], $a);});
    array_shift($csv);
    ?>

                        <table id="tablesorter" class="tablesorter" border="0" cellpadding="0" cellspacing="1">
                      		<thead>
                      			<tr>

                      				<th>Institución</th>
                              <th>Tipo de institución</th>
                      				<th>Título Profesional</th>
                      				<th>Empleabilidad</th>
                      				<th>Ingreso promedio al cuarto año</th>
                      				</tr>
                      		</thead>
                      		<tbody>

                      			<?php for($a = 0; $a < $total = count($csv); $a++){?>

                      			<tr>

                      				<td><?php echo($csv[$a]["institucion"])?></td>
                              <td><?php echo($csv[$a]["tipo_institucion"])?></td>
                      				<td><?php echo($csv[$a]["titulo_profesional"])?></td>
                      				<td><?php echo($csv[$a]["empleabilidad"]);?></td>
                      				<td><?php echo($csv[$a]["ingreso_promedio_4to_año"])?></td>
                      			</tr>

                      			<?php };?>

                      		</tbody>
                      	</table>
                        <p><i>Datos extraidos de: <a href="http://www.mifuturo.cl/index.php/futuro-laboral/">Mi Futuro.</a></i></p>
                                                <center><p>Copia y pega, o descarga el archivo CSV de los datos de la tabla para que generes tus propias visualizaciones en <a href="http://www.mifuturo.cl/index.php/futuro-laboral/buscador-por-carrera-d-institucion">RAWGraphs.</a></p></center>
                                            <center><textarea rows="4" cols="80">tipo_institucion,institucion,titulo_profesional,empleabilidad,ingreso_promedio_4to_año
Universidad,PONTIFICIA UNIVERSIDAD CATÓLICA DE CHILE,Diseñador,"79,80%",S/I
Universidad,UNIVERSIDAD DEL BIO-BIO,Diseñador Gráfico,"60,60%",$600 - $700 mil
Universidad,UNIVERSIDAD DE VALPARÁISO,Diseñador,S/I,$600 - $700 mil
Universidad,UNIVERSIDAD DEL BIO-BIO,Diseñador Industrial,"57,60%",$600 - $700 mil
Universidad,UNIVERSIDAD DE CHILE,Diseñador Gráfico,"77,60%",$800 - $900 mil
Universidad,UNIVERSIDAD DE CHILE,Diseñador Industrial,"77,60%",$800 - $900 mil
Instituto Profesional,IP DE CHILE,Diseñador,"79,00%",S/I
Universidad,UNIVERSIDAD ADOLFO IBAÑEZ,Diseñador,S/I,S/I
Universidad,UNIVERSIDAD DE TALCA,Diseñador,"53,80%",S/I
Universidad,UNIVERSIDAD DE VIÑA DEL MAR,Diseñador mención Gráfica,S/I, S/I
Universidad,UNIVERSIDAD DEL DESARROLLO,Diseñador con mención en Gráfico,"72,60%",$800 - $900 mil
Universidad,UNIVERSIDAD DEL DESARROLLO,Diseñador con mención en Interacción Digital,"72,60%",$800 - $900 mil
Universidad,UNIVERSIDAD DEL DESARROLLO,Diseñador con mención en Espacios y Objetos,"72,60%",$800 - $900 mil
Universidad,UNIVERSIDAD DIEGO PORTALES,Diseñador Gráfico,"72,70%",$800 - $900 mil
Universidad,UNIVERSIDAD DIEGO PORTALES,Diseñador Industrial,"72,70%",$800 - $900 mil
Universidad,UNIVERSIDAD FINIS TERRAE,Diseñador con mención en Diseño Gráfico,"53,60%",$800 - $900 mil
Universidad,UNIVERSIDAD FINIS TERRAE,Diseñador con mención en Interior y Equipamiento,"53,60%",$800 - $900 mil
Universidad,UNIVERSIDAD GABRIELA MISTRAL,Diseñador Crossmedia,S/I,S/I
Instituto Profesional,IP DUOC UC,Diseñador de Ambientes,"59,40%",$700 - $800 mil
Universidad,UNIACC,"Diseñador de Imagen, especialidad en Moda","47,90%",S/I
Universidad,UNIACC,"Diseñador Gráfico, especialidad en Multimedia","47,90%",S/I
Universidad,UNIVERSIDAD DEL PACÍFICO,Diseñador de Interiores,"57,70%",$900 mil - $1 millón
Universidad,UNIVERSIDAD ANDRÉS BELLO,Diseñador de Juegos Digitales,S/I,S/I
Instituto Profesional,IP INACAP,Diseñador de Moda,"59,00%",S/I
Universidad,UNIVERSIDAD DE LAS AMERICAS,Diseñador de Muebles y Objetos,S/I,S/I
Instituto Profesional,IP DUOC UC,Diseñador de Vestuario,"63,10%",$600 - $700 mil
Universidad,UNIVERSIDAD DE LAS AMERICAS,Diseñador de Vestuario,S/I,S/I
Instituto Profesional,IP AIEP,Diseñador de Vestuario mención Alta Costura,"42,00%",S/I
Universidad,UNIVERSIDAD ANDRÉS BELLO,Diseñador de Vestuario y Textil,S/I,S/I
Centro de Formación Técnica,CFT DE ENSEÑANZA DE ALTA COSTURA PAULINA DIARD,Técnico de nivel superior en diseño de vestuario.,S/I,S/I
Universidad,UNIVERSIDAD TECNOLOGICA METROPOLITANA,Diseñador en Comunicación Visual,"76,80%",$800 - $900 mil
Instituto Profesional,IP AIEP,Diseñador Gráfico,S/I,$500 - $600 mil
Instituto Profesional,IP DUOC UC,Diseñador Gráfico,"58,70%",$600 - $700 mil
Instituto Profesional,IP SANTO TOMÁS,Diseñador Gráfico,"55,70%",$500 - $600 mil
Universidad,PONTIFICIA UNIVERSIDAD CATÓLICA DE VALPARÁISO,Diseñador Gráfico,"56,80%",S/I
Universidad,UNIVERSIDAD ANDRÉS BELLO,Diseñador Gráfico,"52,00%",$700 - $800 mil
Universidad,UNIVERSIDAD ANDRÉS BELLO,Diseñador de Productos,"52,00%",S/I
Universidad,UNIVERSIDAD CATÓLICA DE TEMUCO,Diseñador Gráfico,"55,00%",S/I
Universidad,UNIVERSIDAD CATÓLICA DE TEMUCO,Diseñador Industrial,"55,00%",S/I
Universidad,UNIVERSIDAD DE LAS AMÉRICAS,Diseñador Gráfico,S/I,S/I
Universidad,UNIVERSIDAD DEL PACÍFICO,Diseñador Gráfico,"67,40%",$800 - $900 mil
Centro de Formación Técnica,CFT ICEL,Técnico de Nivel Superior en Diseño Gráfico Computacional,S/I,S/I
Instituto Profesional,IP AIEP,Técnico de Nivel Superior en Diseño Gráfico,S/I,$500-600 mil
Instituto Profesional,IP INACAP,Diseñador Gráfico Profesional,S/I,$500 - $600 mil
Instituto Profesional,IP LOS LEONES,Diseñador Gráfico Publicitario,S/I,$500-600 mil
Universidad,UNIVERSIDAD DE ANTOFAGASTA,Diseñador(a) Gráfico mención Diseño Estratégico,"65,00%",$600-700 mil
Instituto Profesional,IP DUOC UC,Diseñador Industrial,"70,10%",$700 - $800 mil
Universidad,PONTIFICIA UNIVERSIDAD CATÓLICA DE VALPARÁISO,Diseñador Industrial ,"56,80%",S/I
Universidad,UNIVERSIDAD TECNOLOGICA METROPOLITANA,Diseñador Industrial,"68,20%",$800 - $900 mil
Universidad,UNIVERSIDAD DE LA SERENA,Diseñador con mención en Comunicación/Equipamiento,"51,60%",S/I
Universidad,UNIVERSIDAD MAYOR,"Diseñador con Mención: Gráfico, Industrial, Ambientes","64,60%",$800 - $900 mil
Universidad,UNIVERSIDAD DE TARAPACÁ,Diseñador Comunicacional Multimedia,S/I,S/I
Universidad,UNIVERSIDAD DE CHILE,Diseñador Teatral,S/I,S/I
Universidad,UNIVERSIDAD DEL PACÍFICO,Diseñador de Vestuario y Textiles,"56,30%",$700 - $800 mil
Centro de Formación Técnica,CFT INACAP,Técnico de Nivel Superior en Diseño Web & Mobile,S/I,S/I
Centro de Formación Técnica,CFT INACAP,Técnico de Nivel Superior en Diseño Gráfico,S/I,S/I
Instituto Profesional,IP SANTO TOMÁS,Técnico de Nivel Superior en Diseño Digital y Publicitario,S/I,S/I
Universidad,UNIVERSIDAD DE SANTIAGO DE CHILE,Tecnólogo en Diseño Industrial,"66,70%",$700 - $800 mil
</textarea></center>
                        <br>
                        <center><form method="get" action="datos/futuro.csv">
                             <button type="submit" class="btn btn-info">Descarga en CSV</button>
                          </form>
                        </center>

  </div>
</div>
</div>

</section>

<?php include('footer.php');?>
