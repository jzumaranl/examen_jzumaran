<?php include('header.php');?>

<section id="page">

<div class="container">
<div class="row">
  <div class="col-lg-12 text-center">
    <h2 class="page-heading">Acreditaciones</h2>
  </div>
  <div class="col-lg-10 col-lg-offset-1">

    <?php
    $csv = array_map('str_getcsv', file('datos/acreditacion.csv'));
    array_walk($csv, function(&$a) use ($csv) {$a = array_combine($csv[0], $a);});
    array_shift($csv);
    ?>



    <table id="tablesorter" class="tablesorter" border="0" cellpadding="0" cellspacing="1">
    		<thead>
    			<tr>
    				<th>Carrera</th>
    				<th>Institución</th>
            <th>Acreditación Institución</th>
    				<th>Periodo Acreditacion Carrera</th>
    				<th>Documento Acreditador</th>

    			</tr>
    		</thead>
    		<tbody>

    			<?php for($a = 0; $a < $total = count($csv); $a++){?>

    			<tr>
    				<td><?php echo($csv[$a]["carrera"])?></td>
    				<td><?php echo($csv[$a]["institucion"])?></td>
            <td><?php echo($csv[$a]["acreditacion_institucion"])?></td>
    				<td><?php echo($csv[$a]["periodo_acreditacion_carrera"])?></td>
            <td><?php
            if ($csv[$a]["Documento_Acreditador"] == "Acuerdo") { ?>
                <a href="<?php echo($csv[$a]["Enlace"] )?>"target="_blank"><?php echo($csv[$a]["Documento_Acreditador"])?></a>
                <?php
            }
            if ($csv[$a]["Documento_Acreditador"] == "No Acreditada") {
                echo ($csv[$a]["Documento_Acreditador"]);
            }
            ?></td>
    			</tr>

    			<?php };?>

    		</tbody>
    	</table>
      <p><i>Datos extraidos de: <a href="http://www.mifuturo.cl/index.php/futuro-laboral/buscador-por-carrera-d-institucion">Mi Futuro</a>,
                                <a href="https://www.cnachile.cl/">CNAChile</a>,
                                <a href="http://www.acreditaccion.cl/resultado_de_acreditacion.php">Acreditacion.cl</a> y
                              <a href="http://www.aadsa.cl/convenios/">AADSA</a>.</i></p>
                              <center><p>Copia y pega, o descarga el archivo CSV de los datos de la tabla para que generes tus propias visualizaciones en <a href="http://www.mifuturo.cl/index.php/futuro-laboral/buscador-por-carrera-d-institucion">RAWGraphs.</a></p></center>
<center><textarea rows="4" cols="80">tipo_institucion,carrera,institucion,acreditacion_institucion,acreditacion_carrera,periodo_acreditacion_carrera,Desde ,Hasta ,Enlace,Documento_Acreditador
Universidad,Diseño,UNIVERSIDAD DE VIÑA DEL MAR,4 años,3 años,2015 - 2018,2015,2018,http://www.aadsa.cl/convenios/Acuerdo%20de%20Acreditacion%20N40%20Diseno%20Grafico%20U%20Vina%20del%20Mar.pdf,Acuerdo
Instituto Profesional,Diseño Gráfico Publicitario,IP LOS LEONES,No Acreditada,3 años,2016 -  2019,2016,2019,S/I,No Acreditada
Instituto Profesional,Diseño Gráfico,IP SANTO TOMAS,3 años,4 años,2016 - 2020,2016,2020,http://www.acreditadoradechile.cl/wp-content/uploads/2014/01/Acuerdo-N%C2%BA214-Dise%C3%B1o-Gr%C3%A1fico-IPST.pdf,Acuerdo
Instituto Profesional,Diseño Gráfico,IP SANTO TOMAS,3 años,4 años,2016 - 2020,2016,2020,http://www.acreditadoradechile.cl/wp-content/uploads/2014/01/Acuerdo-N%C2%BA214-Dise%C3%B1o-Gr%C3%A1fico-IPST.pdf,Acuerdo
Instituto Profesional,Diseño Gráfico,IP SANTO TOMAS,3 años,4 años,2016 - 2020,2016,2020,http://www.acreditadoradechile.cl/wp-content/uploads/2014/01/Acuerdo-N%C2%BA214-Dise%C3%B1o-Gr%C3%A1fico-IPST.pdf,Acuerdo
Instituto Profesional,Diseño Gráfico,IP SANTO TOMAS,3 años,4 años,2016 - 2020,2016,2020,http://www.acreditadoradechile.cl/wp-content/uploads/2014/01/Acuerdo-N%C2%BA214-Dise%C3%B1o-Gr%C3%A1fico-IPST.pdf,Acuerdo
Instituto Profesional,Diseño Gráfico,IP SANTO TOMAS,3 años,4 años,2016 - 2020,2016,2020,http://www.acreditadoradechile.cl/wp-content/uploads/2014/01/Acuerdo-N%C2%BA214-Dise%C3%B1o-Gr%C3%A1fico-IPST.pdf,Acuerdo
Instituto Profesional,Diseño Gráfico,IP SANTO TOMAS,3 años,4 años,2016 - 2020,2016,2020,http://www.acreditadoradechile.cl/wp-content/uploads/2014/01/Acuerdo-N%C2%BA214-Dise%C3%B1o-Gr%C3%A1fico-IPST.pdf,Acuerdo
Universidad,Diseño Mención Comunicación/Equipamiento,UNIVERSIDAD DE LA SERENA,4 años,4 años,2016 - 2020,2016,2020,http://www.acreditaccion.cl/dictamenes/Resolucion_de_Acreditacion_N583_Diseno_ULS.pdf,Acuerdo
Universidad,Diseño Gráfico,UNIVERSIDAD CATOLICA DE TEMUCO,4 años ,4 años,2016 - 2020,2016,2020,http://www.acreditadoradechile.cl/wp-content/uploads/2017/03/Acuerdo-N%C2%BA464.pdf,Acuerdo
Universidad,Diseño de Interiores,UNIVERSIDAD DEL PACIFICO,No Acreditada,4 años,2014 - 2018 ,2014,2018,S/I,No Acreditada
Instituto Profesional,Diseño Gráfico,IP AIEP,3 años,5 años, 2015 - 2020,2015,2020,http://www.acreditadoradechile.cl/wp-content/uploads/2016/03/Acuerdo-N%C2%BA404.pdf,Acuerdo
Instituto Profesional,Diseño de Vestuario Profesional Mención Alta Costura,IP AIEP,3 años,5 años,2013 - 2018 ,2013,2018,http://www.acreditadoradechile.cl/wp-content/uploads/2014/01/Acuerdo-N%C2%BA231-Dise%C3%B1o-de-Vestuario-AIEP.pdf,Acuerdo
Instituto Profesional,Diseño Gráfico Profesional,IP AIEP,3 años,5 años,2015 - 2020,2015,2020,http://www.acreditadoradechile.cl/wp-content/uploads/2016/03/Acuerdo-N%C2%BA404.pdf,Acuerdo
Instituto Profesional,Técnico en Diseño Publicitario Multimedial,IP SANTO TOMAS,3 años,5 años,2013 - 2018 ,2013,2018,http://www.acreditadoradechile.cl/wp-content/uploads/2014/01/Acuerdo-N%C2%BA214-Dise%C3%B1o-Gr%C3%A1fico-IPST.pdf,Acuerdo
Universidad,Diseño en Comunicación Visual,UNIVERSIDAD TECNOLOGICA METROPOLITANA,4 años,5 años,2016 - 2021,2016,2021,http://www.acreditadoradechile.cl/wp-content/uploads/2016/03/Acuerdo-N%C2%BA421.pdf,Acuerdo
Universidad,Diseño,UNIVERSIDAD DE TALCA,5 años,5 años,2014 - 2019,2014,2019,http://www.aadsa.cl/convenios/Acuerdo%20de%20Acreditacion%20N35%20Diseno%20U%20de%20Talca.pdf,Acuerdo
Universidad,Diseño,UNIVERSIDAD DE VALPARAISO,5 años,5 años,2015 - 2020,2015,2020,http://www.aadsa.cl/convenios/Acuerdo%20de%20Acreditacion%20N42%20Diseno%20U%20de%20Valparaiso.pdf,Acuerdo
Universidad,Diseño Multimedia,UNIVERSIDAD DE TARAPACA,5 años,5 años,2015 - 2020 ,2015,2020,http://www.acreditaccion.cl/dictamenes/Dictamen_N492_Diseno_Multimedia_UTA.pdf,Acuerdo
Centro de Formación Técnica,Diseño y Producción Gráfica,CFT INACAP,6 años,5 años,2014 - 2019,2014,2019,http://www.inacap.cl/web/acreditacion/ReposicionN65-Diseno-Prod-Grafica.pdf,Acuerdo
Centro de Formación Técnica,Diseño y Producción Gráfica,CFT INACAP,6 años,5 años,2014 - 2019,2014,2019,http://www.inacap.cl/web/acreditacion/ReposicionN65-Diseno-Prod-Grafica.pdf,Acuerdo
Universidad,Diseño Gráfico,PONTIFICIA UNIVERSIDAD CATOLICA DE VALPARAISO,7 años,5 años,2013 - 2018,2013,2018,http://www.aadsa.cl/convenios/Acuerdo%20de%20Acreditacion%20N24%20Diseno%20Grafico%20PUCV.pdf,Acuerdo
Universidad,Diseño Industrial,PONTIFICIA UNIVERSIDAD CATOLICA DE VALPARAISO,7 años ,5 años, 2013 - 2018,2013,2018,http://www.aadsa.cl/convenios/Acuerdo%20de%20Acreditacion%20N25%20Diseno%20Industrial%20PUCV.pdf,Acuerdo
Universidad,Diseño Vestuario y Textiles,UNIVERSIDAD DEL PACIFICO,No Acreditada,5 años,2013 - 2018,2014,2018,http://www.acreditadoradechile.cl/wp-content/uploads/2014/01/Acuerdo-N%C2%BA220-Dise%C3%B1o-de-Vestuario-U-Pac%C3%ADfico.pdf,Acuerdo
Universidad,Diseño Gráfico,UNIVERSIDAD DEL PACIFICO,No Acreditada,5 años,2013 - 2018,2013,2018,S/I,No Acreditada
Universidad,Diseño Gráfico,UNIVERSIDAD DE CHILE,7 años,5 años ,2012 - 2017,2012,2017,http://www.aadsa.cl/convenios/Acuerdo%20de%20Acreditacion%20N20%20Diseno%20U%20Chile.pdf,Acuerdo
Universidad,Diseño Industrial,UNIVERSIDAD DE CHILE,7 años,5 años ,2012 - 2017,2012,2017,http://www.aadsa.cl/convenios/Acuerdo%20de%20Acreditacion%20N20%20Diseno%20U%20Chile.pdf,Acuerdo
Universidad,Diseño Industrial,UNIVERSIDAD TECNOLOGICA METROPOLITANA,4 años,6 años,2016 - 2022,2016,2022,http://www.acreditaccion.cl/dictamenes/Resolucion_de_Acreditacion_N584_Diseno_Industrial_UTEM.pdf,Acuerdo
Universidad,Diseño Industrial,UNIVERSIDAD DEL BIO-BIO,5 años,6 años,2013 - 2019,2013,2019,http://www.acreditaccion.cl/dictamenes/Dictamen_N344_Diseno_Industrial_UBB.pdf,Acuerdo
Universidad,Diseño,UNIVERSIDAD DEL DESARROLLO,5 años,6 años,2012 - 2018 ,2012,2018,http://www.acreditadoradechile.cl/wp-content/uploads/2013/06/Reposici%C3%B3n-N%C2%BA39-Dise%C3%B1o-UDD.pdf,Acuerdo
Universidad,Diseño,UNIVERSIDAD DEL DESARROLLO,5 años,6 años,2012 - 2018 ,2012,2018,http://www.acreditadoradechile.cl/wp-content/uploads/2013/06/Reposici%C3%B3n-N%C2%BA39-Dise%C3%B1o-UDD.pdf,Acuerdo
Universidad,Diseño,UNIVERSIDAD DIEGO PORTALES,5 años,6 años,2016 - 2022 ,2016,2022,http://www.aadsa.cl/convenios/Acuerdo%20de%20Acreditacion%20N13%20Diseno%20UDP.pdf,Acuerdo
Instituto Profesional,Diseño de Moda,IP INACAP,6 años,6 años,2016 - 2022,2016,2022,http://www.inacap.cl/web/acreditacion/Reposicion-N103-Diseno-de-Moda.pdf,Acuerdo
Instituto Profesional,Diseño Gráfico Profesional,IP INACAP,6 años,6 años,2014 - 2020 ,2014,2020,http://www.inacap.cl/web/acreditacion/Diseno-Grafico-Profesional.pdf,Acuerdo
Instituto Profesional,Diseño Gráfico Profesional,IP INACAP,6 años,6 años,2014 - 2020 ,2014,2020,http://www.inacap.cl/web/acreditacion/Diseno-Grafico-Profesional.pdf,Acuerdo
Instituto Profesional,Diseño Gráfico Profesional,IP INACAP,6 años,6 años,2014 - 2020 ,2014,2020,http://www.inacap.cl/web/acreditacion/Diseno-Grafico-Profesional.pdf,Acuerdo
Instituto Profesional,Diseño Gráfico Profesional,IP INACAP,6 años,6 años,2014 - 2020 ,2014,2020,http://www.inacap.cl/web/acreditacion/Diseno-Grafico-Profesional.pdf,Acuerdo
Instituto Profesional,Diseño Gráfico Profesional,IP INACAP,6 años,6 años,2014 - 2020 ,2014,2020,http://www.inacap.cl/web/acreditacion/Diseno-Grafico-Profesional.pdf,Acuerdo
Instituto Profesional,Diseño de Moda,IP INACAP,6 años,6 años,2016 - 2022,2016,2022,http://www.inacap.cl/web/acreditacion/Diseno-Grafico-Profesional.pdf,Acuerdo
Instituto Profesional,Diseño Gráfico Profesional,IP INACAP,6 años,6 años,2014 - 2020,2014,2020,http://www.inacap.cl/web/acreditacion/Diseno-Grafico-Profesional.pdf,Acuerdo
Instituto Profesional,Diseño Gráfico Profesional,IP INACAP,6 años,6 años,2014 - 2020,2014,2020,http://www.inacap.cl/web/acreditacion/Diseno-Grafico-Profesional.pdf,Acuerdo
Instituto Profesional,Diseño Gráfico Profesional,IP INACAP,6 años,6 años,2014 - 2020 ,2014,2020,http://www.inacap.cl/web/acreditacion/Diseno-Grafico-Profesional.pdf,Acuerdo
Instituto Profesional,Diseño Gráfico Profesional,IP INACAP,6 años,6 años,2014 - 2020 ,2014,2020,http://www.inacap.cl/web/acreditacion/Diseno-Grafico-Profesional.pdf,Acuerdo
Instituto Profesional,Diseño Gráfico Profesional ,IP INACAP,6 años,6 años,2014 - 2020 ,2014,2020,http://www.inacap.cl/web/acreditacion/Diseno-Grafico-Profesional.pdf,Acuerdo
Instituto Profesional,Diseño Gráfico Profesional,IP INACAP,6 años,6 años,2014 - 2020 ,2014,2020,http://www.inacap.cl/web/acreditacion/Diseno-Grafico-Profesional.pdf,Acuerdo
Instituto Profesional,Diseño Gráfico,IP DUOC UC,7 años,6 años,2011 - 2017,2011,2017,https://www.cnachile.cl/res/preg/RES-PREG-01064-01.pdf,Acuerdo
Instituto Profesional,Diseño de Ambiente,IP DUOC UC,7 años,6 años,2017 - 2023,2017,2023,http://www.acreditadoradechile.cl/wp-content/uploads/2017/03/Acuerdo-N%C2%BA520.pdf,Acuerdo
Instituto Profesional,Diseño de Ambiente,IP DUOC UC,7 años,6 años,2017 - 2023,2017,2023,http://www.acreditadoradechile.cl/wp-content/uploads/2017/03/Acuerdo-N%C2%BA520.pdf,Acuerdo
Instituto Profesional,Diseño Gráfico,IP DUOC UC,7 años,6 años,2011 - 2017,2011,2017,https://www.cnachile.cl/res/preg/RES-PREG-01064-01.pdf,Acuerdo
Instituto Profesional,Diseño Industrial,IP DUOC UC,7 años,6 años,2017 - 2023,2017,2023,http://www.acreditadoradechile.cl/wp-content/uploads/2014/01/Acuerdo-N%C2%BA222-Dise%C3%B1o-Industrial-DUOC.pdf,Acuerdo
Instituto Profesional,Diseño Gráfico,IP DUOC UC,7 años,6 años,2011 - 2017,2011,2017,https://www.cnachile.cl/res/preg/RES-PREG-01064-01.pdf,Acuerdo
Instituto Profesional,Diseño de Moda,IP INACAP,6 años,6 años ,2016 - 2022,2016,2022,http://www.inacap.cl/web/acreditacion/Reposicion-N103-Diseno-de-Moda.pdf,Acuerdo
Universidad,Diseño,PONTIFICIA UNIVERSIDAD CATÓLICA DE CHILE,7 años,7 años,2015 - 2022,2015,2022,http://uctransparente.uc.cl/index.php?option=com_docman&task=doc_download&gid=571&Itemid=,Acuerdo
Instituto Profesional,Diseño de Vestuario,IP DUOC UC,7 años,7 años,2010 - 2017,2010,2017,http://www.acreditadoradechile.cl/wp-content/uploads/2011/11/Acuerdo_N%b051_Diseno_de_Vestuario_DUOC.pdf,Acuerdo
Universidad,"Diseño Crossmedia en Gráfica, Web y Video Digital",UNIVERSIDAD GABRIELA MISTRAL,2 años,No Acreditada,S/I,S/I,S/I,S/I,No Acreditada
Universidad,Diseño Gráfico,UNIVERSIDAD DE LAS AMERICAS,3 años,No Acreditada,S/I,S/I,S/I,S/I,No Acreditada
Instituto Profesional,Diseño,IP DE CHILE,4 años,No Acreditada,S/I,S/I,S/I,S/I,No Acreditada
Universidad,Diseño de Juegos Digitales,UNIVERSIDAD ANDRES BELLO,4 años,No Acreditada,S/I,S/I,S/I,S/I,No Acreditada
Universidad,Diseño de Vestuario y Textil,UNIVERSIDAD ANDRES BELLO,4 años,No Acreditada,S/I,S/I,S/I,S/I,No Acreditada
Universidad,Diseño Gráfico,UNIVERSIDAD ANDRES BELLO,4 años,No Acreditada,S/I,S/I,S/I,S/I,No Acreditada
Universidad,Diseño,UNIVERSIDAD FINIS TERRAE,4 años,No Acreditada,S/I,S/I,S/I,S/I,No Acreditada
Universidad,Diseño Gráfico,UNIVERSIDAD ANDRES BELLO,4 años ,No Acreditada,S/I,S/I,S/I,S/I,No Acreditada
Universidad,Diseño Gráfico,UNIVERSIDAD DEL BIO-BIO,5 años,No Acreditada,2013 - 2016,2013,2016,http://www.acreditaccion.cl/dictamenes/dictamen_n221_diseno_grafico_ubb.pdf,Acuerdo
Universidad,Diseño,UNIVERSIDAD ADOLFO IBAÑEZ,5 años,No Acreditada,S/I,S/I,S/I,S/I,No Acreditada
Universidad,Diseño Mención Industrial/Gráfico/Ambienstes,UNIVERSIDAD MAYOR,5 años,No Acreditada,S/I,S/I,S/I,S/I,No Acreditada
Centro de Formación Técnica,Diseño Web & Mobile,CFT INACAP,6 años,No Acreditada,S/I,S/I,S/I,S/I,No Acreditada
Centro de Formación Técnica,"Diseño de Vesturaio, Moldaje y Confección",CFT DE ENSEÑANZA DE ALTA COSTURA PAULINA DIARD,No Acreditada,No Acreditada,S/I,S/I,S/I,S/I,No Acreditada
Centro de Formación Técnica,Diseño Gráfico Computacional,CFT ICEL,No Acreditada,No Acreditada,S/I,S/I,S/I,S/I,No Acreditada
Centro de Formación Técnica,Diseño Gráfico Computacional,CFT ICEL,No Acreditada,No Acreditada,S/I,S/I,S/I,S/I,No Acreditada
Universidad,Diseño de Imagen Especialidad Moda,"UNIVERSIDAD DE ARTES, CIENCIAS Y COMUNICACION",No Acreditada,No Acreditada,S/I,S/I,S/I,S/I,No Acreditada
Universidad,Diseño Teatral,UNIVERSIDAD DE CHILE,No Acreditada,No Acreditada,S/I,S/I,S/I,S/I,No Acreditada
</textarea></center>
      <br>
      <center><form method="get" action="datos/acreditacion.csv">
           <button type="submit" class="btn btn-info">Descarga en CSV</button>
        </form>
      </center>

  </div>
</div>
</div>

</section>

<?php include('footer.php');?>
