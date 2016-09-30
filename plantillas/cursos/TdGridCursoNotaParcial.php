<?php
    $calificacionesDb = calificacionDb::getInstance();
    $parcialDb = ParcialDb::getInstance();
    $parciales = $parcialDb->obtenerParcialesCurso($idCurso);
    
    while ($rowParcial = $parciales->fetch_object()){
        $calificacion = $calificacionesDb->obtenerNotaAlumnoCursoParcial($row->id, $idCurso, $rowParcial->id);
        $nota = mysqli_fetch_assoc($calificacion);
        $notaResult = (int)$nota['nota'];
				
		$idAlumnoNota = $row->id;
		$idParcialNota = $rowParcial->id;
		$idCursoNota = $idCurso;
		$celdaNotaId = 'celdaNota'.$nota["id"];
	
//        print '<td contenteditable class="celdaNota" id="'.$celdaNotaId.'">' .$notaResult. '</td>';
        printf('<td contenteditable class="celdaNota" id="%s" data-calificacion-id="%s" data-nota-original="%s" >%s</td>', $celdaNotaId, $nota['id'], $notaResult, $notaResult);
   }
