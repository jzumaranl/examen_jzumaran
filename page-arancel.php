<?php include('header.php');?>

<section id="page">

<div class="container">
<div class="row">
  <div class="col-lg-12 text-center">
    <h2 class="page-heading">Aranceles</h2>
  </div>
  <div class="col-lg-10 col-lg-offset-1">

    <?php
    $csv = array_map('str_getcsv', file('datos/arancel.csv'));
    array_walk($csv, function(&$a) use ($csv) {$a = array_combine($csv[0], $a);});
    array_shift($csv);
    ?>
                        <table id="tablesorter" class="tablesorter" border="0" cellpadding="0" cellspacing="1">
                      		<thead>
                      			<tr>
                      				<th>Carrera</th>
                      				<th>Institución</th>
                      				<th>Arancel anual</th>
                      				<th>Arancel total formal considerando la duración formal de la carrera</th>
                      				<th>Arancel total real considerando la duración real de la carrera</th>
                      			</tr>
                      		</thead>
                      		<tbody>

                      			<?php for($a = 0; $a < $total = count($csv); $a++){?>

                      			<tr>
                      				<td><?php echo($csv[$a]["carrera"])?></td>
                      				<td><?php echo($csv[$a]["escuela"])?></td>
                      				<td><?php echo($csv[$a]["arancel"]);?></td>
                              <td><?php echo($csv[$a]["arancel_formal"]);?></td>
                              <td><?php echo($csv[$a]["arancel_real"]);?></td>

                      			</tr>

                      			<?php };?>


                      		</tbody>
                      	</table>

  <p><i>Datos extraidos de: <a href="http://www.mifuturo.cl/index.php/futuro-laboral/">Mi Futuro.</a></i></p>
                          <center><p>Copia y pega, o descarga el archivo CSV de los datos de la tabla para que generes tus propias visualizaciones en <a href="http://www.mifuturo.cl/index.php/futuro-laboral/buscador-por-carrera-d-institucion">RAWGraphs.</a></p></center>
                      <center><textarea rows="4" cols="80">carrera,escuela,duracion_formal,duracion_real,arancel,arancel_formal,arancel_real
Diseño Gráfico Publicitario,IP LOS LEONES,8 semestres,10 semestres,$1.220.000,$4.880.000,$6.100.000
Diseño Gráfico Profesional,IP AIEP,8 semestres,"10,2 semestres",$1.600.000,$6.400.000,$8.160.000
Diseño Gráfico Profesional,IP AIEP,8 semestres,"10,2 semestres",$1.450.000,$5.800.000,$7.395.000
Diseño Gráfico Profesional,IP AIEP,8 semestres,"10,2 semestres",$1.450.000,$5.800.000,$7.395.000
Diseño Gráfico Profesional,IP AIEP,8 semestres,"10,2 semestres",$1.400.000,$5.600.000,$7.140.000
Diseño Gráfico Profesional,IP AIEP,8 semestres,"10,2 semestres",$1.390.000,$5.560.000,$7.089.000
Diseño Vestuario y Textiles,UNIVERSIDAD DEL PACÍFICO,9 semestres,"10,3 semestres",$4.538.000,$20.421.000,$23.370.700
Diseño Gráfico,UNIVERSIDAD DEL PACÍFICO,9 semestres,"11,6 semestres",$3.990.000,$17.955.000,$23.142.000
Diseño de Vestuario,IP DUOC UC,8 semestres,"11,8 semestres",$2.200.000,$8.800.000,$12.980.000
Diseño Gráfico Profesional,IP INACAP,8 semestres,"11,8 semestres",$2.090.000,$8.360.000,$12.331.000
Diseño Gráfico Profesional,IP INACAP,8 semestres,"11,8 semestres",$1.942.000,$7.768.000,$11.457.800
Diseño Gráfico Profesional,IP INACAP,8 semestres,"11,8 semestres",$1.890.000,$7.560.000,$11.151.000
Diseño Gráfico Profesional,IP INACAP,8 semestres,"11,8 semestres",$1.876.000,$7.504.000,$11.068.400
Diseño Gráfico Profesional,IP INACAP,8 semestres,"11,8 semestres",$1.876.000,$7.504.000,$11.068.400
Diseño Gráfico Profesional,IP INACAP,8 semestres,"11,8 semestres",$1.812.000,$7.248.000,$10.690.800
Diseño Gráfico Profesional,IP INACAP,8 semestres,"11,8 semestres",$1.812.000,$7.248.000,$10.690.800
Diseño Gráfico Profesional,IP INACAP,8 semestres,"11,8 semestres",$1.620.000,$6.480.000,$9.558.000
Diseño Gráfico Profesional,IP INACAP,8 semestres,"11,8 semestres",$1.602.000,$6.408.000,$9.451.800
Diseño Gráfico Profesional,IP INACAP,8 semestres,"11,8 semestres",$1.556.000,$6.224.000,$9.180.400
Diseño Gráfico Profesional,IP INACAP,8 semestres,"11,8 semestres",$1.582.000,$6.328.000,$9.333.800
Diseño de Moda,IP INACAP,8 semestres,"11,9 semestres ",$2.196.000,$8.784.000,$13.066.200
Diseño de Moda,IP INACAP,8 semestres,"11,9 semestres ",$1.812.000,$7.248.000,$10.781.400
Diseño de Moda,IP INACAP,8 semestres,"11,9 semestres ",$1.658.000,$6.632.000,$9.865.100
Diseño,UNIVERSIDAD FINIS TERRAE,9 semestres,"11,9 semestres",$4.256.000,$19.152.000,$25.323.200
Diseño,UNIVERSIDAD CATÓLICA,10 semestres,12 semestres,$4.775.000,$23.875.000,$28.650.000
Diseño de Ambiente,IP DUOC UC,8 semestres,12 semestres,$2.100.000,$8.400.000,$12.600.000
Diseño de Ambiente,IP DUOC UC,8 semestres,12 semestres,$2.100.000,$8.400.000,$12.600.000
Diseño Gráfico,UNIVERSIDAD ANDRÉS BELLO,9 semestres,12 semestres,$4.525.151,$20.363.179,$27.150.906
Diseño Gráfico,UNIVERSIDAD ANDRÉS BELLO,8 semestres,12 semestres,$3.755.876,$15.023.504,$22.535.256
Diseño Gráfico,IP DUOC UC,8 semestres,"12,2 semestres",$2.280.000,$9.120.000,$13.908.000
Diseño Gráfico,IP DUOC UC,8 semestres,"12,2 semestres",$2.130.000,$8.520.000,$12.993.000
Diseño Gráfico,IP DUOC UC,8 semestres,"12,2 semestres",$2.130.000,$8.520.000,$12.993.000
Diseño Gráfico,IP DUOC UC,8 semestres,"12,2 semestres",$2.130.000,$8.520.000,$12.993.000
Diseño Gráfico,IP DUOC UC,8 semestres,"12,2 semestres",$1.880.000,$7.520.000,$11.468.000
Diseño,UNIVERSIDAD DEL DESARROLLO,10 semestres,"12,3 semestres",$5.947.649,$29.738.245,$36.578.041
Diseño,UNIVERSIDAD DEL DESARROLLO,10 semestres,"12,3 semestres",$3.684.384,$18.421.920,$22.658.961
Diseño Industrial,IP DUOC UC,8 semestres,12.9 semestres,$2.120.000,$8.480.000,$13.674.000
Diseño Industrial,IP DUOC UC,8 semestres,"12,9 semestres",$2.120.000,$8.480.000,$13.674.000
Diseño Industrial,IP DUOC UC,8 semestres,"12,9 semestres",$2.120.000,$8.480.000,$13.674.000
Diseño,UNIVERSIDAD DIEGO PORTALES,10 semestres,13 semestres,$4.581.000,$22.905.000,$29.776.500
Diseño Gráfico,UNIVERSIDAD DEL BIO-BÍO,10 semestres,"13,7 semestres",$2.574.000,$12.870.000,$17.631.900
Diseño Gráfico,UNIVERSIDAD DE CHILE,10 semestres,"15,3 semestres",$3.698.700,$18.493.500,$28.295.055
Diseño Industrial,UNIVERSIDAD DE CHILE,10 semestres,"15,3 semestres",$3.698.700,$18.493.500,$28.295.055
Diseño Industrial,UNIVERSIDAD TECNOLÓGICA METROPOLITANA,10 semestres,"15,9 semestres",$3.000.547,$15.002.735,$23.854.348
Diseño,UNIVERSIDAD DE VALPARAÍSO,10 semestres,"17,6 semestres",$3.147.000,$15.735.000,$26.749.500
Diseño en Comunicación Visual,UNIVERSIDAD TECNOLÓGICA METROPOLITANA,10 semestres,"17,6 semestres",$2.921.858,$12.870.000,$17.631.900
Técnico en Diseño Publicitario Multimedial,IP SANTO TOMÁS,5 semestres,"7,8 semestres",$1.612.500,$4.031.250,$6.288.750
Diseño de Vestuario Profesional Mención Alta Costura,IP AIEP,7 semestres,"9,1 semestres",$1.800.000,$6.300.000,$8.190.000
Diseño,IP DE CHILE,8 semestres,S/I,$1.152.000,$4.608.000,S/I
Diseño,UNIVERSIDAD ADOLFO IBAÑEZ,10 semestres,S/I,$5.000.236,$25.001.180,S/I
Diseño,UNIVERSIDAD DE TALCA,9 semestres,S/I,$3.044.500,$13.700.250,S/I
Diseño,UNIVERSIDAD DE VIÑA DEL MAR,9 semestres,S/I,$2.460.305,$11.071.372,S/I
"Diseño Crossmedia en Gráfica, Web y Video Digital",UNIVERSIDAD GABRIELA MISTRAL,9 semestres,S/I,$2.990.000,$13.455.000,S/I
Diseño de Imagen Especialidad Moda,UNIACC,10 semestres,S/I,$3.480.000,$17.400.000,S/I
Diseño de Interiores,UNIVERSIDAD DEL PACÍFICO,9 semestres,S/I,$4.100.000,$18.450.000,S/I
Diseño de Juegos Digitales,UNIVERSIDAD ANDRÉS BELLO,8 semestres,S/I,$4.525.151,$18.100.604,S/I
Diseño de Vestuario y Textil,UNIVERSIDAD ANDRÉS BELLO,8 semestres,S/I,$4.525.151,$18.100.604,S/I
"Diseño de Vestuario, Moldaje y Confección",CFT DE ENSEÑANZA DE ALTA COSTURA PAULINA DIARD,5 semestres,S/I,$749.000,$1.872.500,S/I
Diseño Gráfico,IP AIEP,5 semestres,S/I,$1.730.000,$4.325.000,S/I
Diseño Gráfico,IP AIEP,5 semestres,S/I,$1.730.000,$4.325.000,S/I
Diseño Gráfico,IP AIEP,5 semestres,S/I,$1.700.000,$4.250.000,S/I
Diseño Gráfico,IP AIEP,5 semestres,S/I,$1.440.000,$3.600.000,S/I
Diseño Gráfico,IP AIEP,5 semestres,S/I,$1.420.000,$3.550.000,S/I
Diseño Gráfico,IP SANTO TOMÁS,8 semestres,S/I,$1.821.000,$7.284.000,S/I
Diseño Gráfico,IP SANTO TOMÁS,8 semestres,S/I,$1.718.100,$6.872.400,S/I
Diseño Gráfico,IP SANTO TOMÁS,8 semestres,S/I,$1.718.100,$6.872.400,S/I
Diseño Gráfico,IP SANTO TOMÁS,8 semestres,S/I,$1.685.400,$6.741.600,S/I
Diseño Gráfico,IP SANTO TOMÁS,8 semestres,S/I,$1.610.200,$6.440.800,S/I
Diseño Gráfico,IP SANTO TOMÁS,8 semestres,S/I,$1.552.900,$6.211.600,S/I
Diseño Gráfico,PONTIFICIA UNIVERSIDAD CATÓLICA DE VALPARAÍSO,9 semestres,S/I,$4.061.000,$18.274.500,S/I
Diseño Gráfico,UNIVERSIDAD CATÓLICA DE TEMUCO,10 semestres,S/I,$3.108.000,$15.540.000,S/I
Diseño Gráfico,UNIVERSIDAD DE LAS AMÉRICAS,8 semestres,S/I,$2.940.250,$11.761.000,S/I
Diseño Gráfico Computacional,CFT ICEL,5 semestres,S/I,$919.000,$2.297.500,S/I
Diseño Gráfico Computacional,CFT ICEL,5 semestres,S/I,$919.000,$2.297.500,S/I
Diseño Industrial,PONTIFICIA UNIVERSIDAD CATÓLICA DE VALPARAÍSO,9 semestres,S/I,$4.061.000,$18.274.500,S/I
Diseño Mención Comunicación/Equipamiento,UNIVERSIDAD DE LA SERENA,10 semestres,S/I,$2.490.216,$12.451.080,S/I
Diseño Mención Industrial/Gráfico/Ambientes,UNIVERSIDAD MAYOR,10 semestres,S/I,$4.371.000,$21.855.000,S/I
Diseño Multimedia,UNIVERSIDAD DE TARAPACA,8 semestres,S/I,$2.477.000,$9.908.000,S/I
Diseño Teatral,UNIVERSIDAD DE CHILE,10 semestres,S/I,$2.794.000,$13.970.000,S/I
Diseño Web & Mobile,CFT INACAP,4 semestres,S/I,$1.626.000,$3.252.000,S/I
Diseño y Producción Gráfica,CFT INACAP,4 semestres,S/I,$2.090.000,$4.180.000,S/I
Diseño y Producción Gráfica,CFT INACAP,4 semestres,S/I,$1.942.000,$3.884.000,S/I
Diseño y Producción Gráfica,CFT INACAP,4 semestres,S/I,$1.890.000,$3.780.000,S/I
Diseño y Producción Gráfica,CFT INACAP,4 semestres,S/I,$1.876.000,$3.752.000,S/I
Diseño y Producción Gráfica,CFT INACAP,4 semestres,S/I,$1.876.000,$3.752.000,S/I
Diseño y Producción Gráfica,CFT INACAP,4 semestres,S/I,$1.876.000,$3.752.000,S/I
Diseño y Producción Gráfica,CFT INACAP,4 semestres,S/I,$1.812.000,$3.624.000,S/I
Diseño y Producción Gráfica,CFT INACAP,4 semestres,S/I,$1.812.000,$3.624.000,S/I
Diseño y Producción Gráfica,CFT INACAP,4 semestres,S/I,$1.620.000,$3.240.000,S/I
Diseño y Producción Gráfica,CFT INACAP,4 semestres,S/I,$1.582.000,$3.164.000,S/I
Diseño y Producción Gráfica,CFT INACAP,4 semestres,S/I,$1.556.000,$3.112.000,S/I
</textarea></center>
                        <br>
                        <center><form method="get" action="datos/arancel.csv">
                             <button type="submit" class="btn btn-info">Descarga en CSV</button>
                          </form>
                        </center>

  </div>
</div>
</div>

</section>

<?php include('footer.php');?>
