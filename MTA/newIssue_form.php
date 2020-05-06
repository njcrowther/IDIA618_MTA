<?php
    echo "
    <form>
    <!-- Location -->
    <h2 class='row'>Location:</h2>
    <select name='location' id='location' class='row'>
        <option value='Bus 1'>Bus 1</option>
        <option value='Bus 2'>Bus 2</option>
        <option value='Bus 3'>Bus 3</option>
        <option value='Stop 1'>Stop 1</option>
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
        <option value='other'>Other</option>
    </select>

    <!-- Other Issue Description -->

    <h2 class='row' id='notes-label' style='display:none;'>Specify 'Other'</h2>
    <input class='row' type='text' name='notes' id='notes' style='display:none;'/>



    <!-- Submit Button -->
    <div class='submit-container row'>
        <button type='button' onclick='addIssue()'>SUBMIT ISSUE</button>
    </div> 
</form>"

?>