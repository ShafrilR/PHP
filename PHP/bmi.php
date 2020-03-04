<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Body Mass Index</title>
  </head>
  <body>
    <h1>Body Mass Index</h1>
    <form action="h_bmi.php" method="post">
      <table>
        <tr>
          <td>Berat Badan (Kg)</td>
          <td>
            <input type="text" name="berat" required/>
          </td>
        </tr>
        <tr>
          <td>Tinggi (m)</td>
          <td>
            <input type="text" name="tinggi" required/>
          </td>
        </tr>
        <tr>
          <td></td>
          <td>
            <button type="submit" name="button">
              Cek
            </button>
          </td>
        </tr>
      </table>
    </form>
  </body>
</html>
