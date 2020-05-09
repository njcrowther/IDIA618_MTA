<?php
    echo "
    <form>
    <!-- Location -->
    <h2 class='row'>Location:</h2>
    <select name='location' id='location' class='row'>
        <option value='Bus 1'>Bus 1</option>
        <option value='Bus 2'>Bus 2</option>
        <option value='Bus 3'>Bus 3</option>
        <option value='Bus 4'>Bus 4</option>
        <option value='Bus 5'>Bus 5</option>
        <option value='Bus 6'>Bus 6</option>
        <option value='Bus 7'>Bus 7</option>
        <option value='Bus 8'>Bus 8</option>
        <option value='Bus 9'>Bus 9</option>
        <option value='Stop 1'>Stop 1</option>
        <option value='Stop 2'>Stop 2</option>
        <option value='Stop 3'>Stop 3</option>
        <option value='Stop 4'>Stop 4</option>
        <option value='Stop 5'>Stop 5</option>
        <option value='Stop 6'>Stop 6</option>
        <option value='Stop 7'>Stop 7</option>
        <option value='Stop 8'>Stop 8</option>
    </select>

    <!-- Upload Image -->
    <!--
    <input class='row' type='file' name='file' id='pic' />
    <label class='row' for='file' class='btn-1'>Upload a Picture!</label>
    -->
    
    <!-- Issue Type -->

    <h2 class='row'>Issue Type</h2>
    <select name='issue-type' id='issue-type' class='row' onchange='showOther()'>
        <option value='broken bench'>Broken Bench</option>
        <option value='electrical'>Electrical</option>
        <option value='hanging wires'>Hanging Wires</option>
        <option value='graffiti'>Graffiti</option>
        <option value='other'>Other</option>
    </select>

    <!-- Other Issue Description -->

    <h2 class='row' id='notes-label' style='display:none;'>Specify 'Other'</h2>
    <input class='row' type='text' name='notes' id='notes' style='display:none;'/>



    <!-- Submit Button -->
    <div class='submit-container footer'>
        <button type='button' onclick='addIssue()'>SUBMIT ISSUE</button>
    </div> 
</form>"

?>