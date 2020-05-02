<h2>Add a New Patient</h2>
<form action="" method="post">
  Owner Name: <input id="newName" name="name"><br>
  Dog Name: <input id="newDog" name="dog"><br>
  Dog's Favorite Toy: <input id="newToy" name="toy"><br>
  Dog's Age: <input id="newAge" name="age"><br>
  Has shots? : <select id="newShots" name="shots">
  <option value = "yes">Yes</option>
  <option value = "no" selected>No</option>
  </select>
  <br>

  <button type="button" onclick="addUser()">Add Patient</button>
</form>
