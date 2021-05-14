<h2>Geração de resultados</h2>
<br>Número de resultados :<br>
<input type="number" name="PlaysNumber" value="<?php echo $responserList; ?>" id="PlaysNumber">
<br>Excluir dos resultados os números :<br>
<input type="number" name="first_number" id="first_number" min="1" max="25" value="<?php echo $myListReduce[0]; ?>">
<input type="number" name="seccond_number" id="seccond_number"  min="1" max="25" value="<?php echo $myListReduce[1]; ?>">
<input type="number" name="third_number" id="third_number"  min="1" max="25" value="<?php echo $myListReduce[2]; ?>">
<input type="number" name="fourth_number" id="fourth_number"  min="1" max="25" value="<?php echo $myListReduce[3]; ?>">
<input type="number" name="fifth_number" id="fifth_number"  min="1" max="25" value="<?php echo $myListReduce[4]; ?>">
<br><br>
<button  onclick="percentIdentify()">Gerar Jogos novos</button>
<br>        <br>