<?php 
  session_start();
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Crypt</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
  <div class="container">
    <form action="crypt.php" method="POST">
      <textarea name="message" rows="8" cols="80" id="message"><?php 
        if(!empty($_SESSION['result'])){
          print $_SESSION['result'];
        }
       ?></textarea>
      <p>k=
      <select name="key" id="key">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
        <option>7</option>
        <option>8</option>
        <option>9</option>
        <option>10</option>
        <option>11</option>
        <option>12</option>
        <option>13</option>
        <option>14</option>
        <option>15</option>
        <option>16</option>
        <option>17</option>
        <option>18</option>
        <option>19</option>
        <option>20</option>
        <option>21</option>
        <option>22</option>
        <option>23</option>
        <option>24</option>
        <option>25</option>
      </select><br>
      <input type="radio" name="operatie" value="cryptare">
      <input type="radio" name="operatie" value="decryptare">

      <button type=submit>submit</button>
    </form>
    <p>

    </p>
  </div>
  </body>
</html>
