<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Cicilan</title>
  </head>
  <body>
    <h1>Cicilan Hutang</h1>
    <form action="h_cicilan.php" method="post">
      <table>
        <tr>
          <td>Nominal</td>
          <td>
            <input type="text" name="nominal" required/>
          </td>
        </tr>
        <tr>
          <td>Periode</td>
          <td>
            <select name="periode">
              <option value="12">12</option>
              <option value="24">24</option>
              <option value="36">36</option>
            </select>
          </td>
        </tr>
        <tr>
          <td>Bunga per tahun (%)</td>
          <td>
            <input type="text" name="bunga" required/>
          </td>
        </tr>
        <tr>
        <tr>
          <td></td>
          <td>
            <button type="submit" name="button">
              Hitung
            </button>
          </td>
        </tr>
      </table>
    </form>
  </body>
</html>
