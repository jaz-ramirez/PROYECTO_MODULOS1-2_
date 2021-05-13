<?php
 if(isset($_POST["ReportarLib"]))
 {
     header("location: ./SesionActiva.php");
 }
 if(isset($_POST["Reportar"]))
 {
    echo'
        <form action="ReporMat.php"  method="POST" align="center">
            <fieldset>
                <legend style="color:#00a2ff" ><i><h2>Reportar contenido inadecuado</h2></i></legend>
                <i>Consideras que la obra...</i><br><br>
                    <label for="Cont18">¿Describe escenas de violencia que pueda dañar la sensibilidad del lector?
                        <br><input type="radio" name="Cont+18" required>Si</label>
                        <input type="radio" name="Cont18" required>No</label><br><br>
                    <label for = "Cont18">¿Describe escenas con contenido sexual explícito?
                        <br><input type="radio" name="Cont18" required>Si</label>
                        <input type="radio" name="Cont18" required>No</label><br><br>
                    <label for="DiscOdio">¿Contiene un discuros de odio?
                        <br><input type="radio" name="DiscOdio" required>Si</label>
                        <input type="radio" name="DiscOdio" required>No</label><br><br>
                    <label for="Difdesinf">¿Difunde la desinformación?
                        <br><input type="radio" name="Difdesinf" required>Si</label>
                        <input type="radio" name="Difdesinf" required>No</label><br><br>
                    <label for ="AtentPers">¿Incita a acciones que atenten contra la integridad de una persona o grupo de ellas?
                        <br><input type="radio" name="AtentPers" required>Si</label>
                        <input type="radio" name="AtentPers" required>No</label><br><br>
                        <label for = "Aceptar">
                            <input type="submit" name="ReportarLib" >
                        </label>
            </fieldset>    
        </form>
        ';
 }
?>