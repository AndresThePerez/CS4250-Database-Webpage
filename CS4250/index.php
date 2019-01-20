<!DOCTYPE html>
<html>
  <head>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<link rel="stylesheet" href="styles.css">
   <title>
     CS4250 Part 7
   </title>
  </head>

  <body>
    <h1>
      Football World Statistics
    </h1>
      <h2>
      Team Members: Andres Perez, Rafael Dorado, Avelardo Valdez
      </h2>
<hr>
  <body>
      <p>
        <b>
          Relations:
        </b>
      </p>

<div>
  
<ol>
<li>
  <?php echo "<a href='Acquire_annstats.php' target='_blank'>Acquire_annstats</a>"; ?>
</li>
<li>
  <?php echo "<a href='Coaches.php' target='_blank'>Coaches</a>"; ?>
</li>
<li>
  <?php echo "<a href='Confederation.php' target='_blank'>Confederation</a>"; ?>
</li>
<li>
  <?php echo "<a href='Game.php' target='_blank'>Game</a>"; ?>
</li>
<li>
  <?php echo "<a href='League.php' target='_blank'>League</a>"; ?>
</li>
<li>
  <?php echo "<a href='LeagueName.php' target='_blank'>LeagueName</a>"; ?>
</li>
<li>
  <?php echo "<a href='Players.php' target='_blank'>Players</a>"; ?>
</li>
<li>
  <?php echo "<a href='takeplacein.php' target='_blank'>takeplacein</a>"; ?>
</li>
<li>
  <?php echo "<a href='Team.php' target='_blank'>Team</a>"; ?>
</li>
<li>
  <?php echo "<a href='Teammates.php' target='_blank'>Teammates</a>"; ?>
</li>
<li>
  <?php echo "<a href='TeamNames.php' target='_blank'>TeamNames</a>"; ?>
</li>

</ol>
<hr>
<p>

  <b>
    Queries:
  </b>
</p>
<ol>
<li>
  <?php echo "<a href='query1.php' target='_blank'>Query 1</a>" ?>
  :This tells us the players, positions and salaries of all the players that 
  currently have a salary of over a million dollars.
</li>
<li>
  <?php echo "<a href='query2.php' target='_blank'>Query 2</a>"; ?>
  :This Query searches the database for teams that have won at a stadium 
  that has a name like AT&T.
</li>
<li>
  <?php echo "<a href='query3.php' target='_blank'>Query 3</a>"; ?>
  :This Query searches the database for the average salary of players that are strikers. 
</li>
<li>
  <?php echo "<a href='query4.php' target='_blank'>Query 4</a>"; ?>
  :This query shows all the leagues present in the Confederation of germany.
</li>
<li>
  <?php echo "<a href='query5.php' target='_blank'>Query 5</a>"; ?>
  :This query prints out the first name, lastname, and healthcertificates of players 
  and groups them.
</li>
</ol>
<hr>
<p>
  <b>
    Ad-Hoc Queries:
  </b>
</p>
<form method="post" name="ad-hoc" action="ad-hoc-query.php">
   <table>
     <tr>
       <td align = right>
          <strong>Please enter your query here<br></font></strong>
       </td>
       <td>
          <input type=text size=130 maxlength=280 name="query">
       </td>
     </tr>
     <tr>
       <td align=right>
          <input type=reset value="Clear">
       </td>
       <td>
          <input type="submit" value="submit" target="_blank">
       </td>
     </tr>
   </table>
</form>
  </body>
</html>
