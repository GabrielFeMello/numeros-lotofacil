
        <h2>Análise de porcentagens</h2>
        A partir do:
        <select id="PatternDate" name="firstOne">
            <?php foreach($lastCheck as $key => $value) {
                echo '<option value="'.$key.'" ';
                if ($my_pattern_check_key == $key){echo ' selected="selected"'; };
                echo ">".$key."</option>";
            }; ?>
        </select>
        <br>
        Quantos jogos atrás?
        <select  name="lastOne" id="quantityDistance" >
            <option value="1000" <?php if ($distance == 1000) {echo 'selected="selected"'; }; ?> >1000 </option>
            <option value="500" <?php if ($distance == 500) {echo 'selected="selected"'; }; ?> >500 </option>
            <option value="250" <?php if ($distance == 250) {echo 'selected="selected"'; }; ?> >250 </option>
            <option value="100" <?php if ($distance == 100) {echo 'selected="selected"'; }; ?> >100 </option>
            <option value="50" <?php if ($distance == 50) {echo 'selected="selected"'; }; ?> >50 </option>
            <option value="30" <?php if ($distance == 30) {echo 'selected="selected"'; }; ?> >30 </option>
            <option value="20" <?php if ($distance == 20) {echo 'selected="selected"'; }; ?> >20 </option>
            <option value="15" <?php if ($distance == 15) {echo 'selected="selected"'; }; ?> >15 </option>
            <option value="7" <?php if ($distance == 7) {echo 'selected="selected"'; }; ?> >7 </option>
        </select>
        <br><br>
        <button onclick="percentIdentify()">Identificar porcentagens</button>
        <br>        <br>