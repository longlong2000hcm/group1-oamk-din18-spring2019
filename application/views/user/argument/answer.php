<?php
echo "You choosed " . $category . " <br>";
// echo "Your question is " . print_r($question);
?>
<?php 
for ($i=0;$i<count($question);$i++){
echo $question[$i]['content'];
echo '<br>';
echo "<form class='text-left' method='POST' action=".site_url('Motion/getAnswer/').$question[$i]['idMotion'].">
<input type='submit' class='btn btn-success' id='BoxSelect' value='Submit'>
    <div class='custom-control custom-radio'>
        <input type='radio' class='custom-control-input' id='defaultChecked' value=1 name='defaultExampleRadios' checked>
        <label class='custom-control-label' for='defaultChecked'>Yes,I agree</label>
    </div>
    <div class='custom-control custom-radio'>
        <input type='radio' class='custom-control-input' id='defaultUnchecked' value='0' name='defaultExampleRadios'>
        <label class='custom-control-label' for='defaultUnchecked'>No, I disagree</label>
    </div>  
</form>";
}
?>