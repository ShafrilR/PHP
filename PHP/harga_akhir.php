<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Harga Akhir</title>
  </head>
  <body>
    <form action="hasilnya.php" method="post">
      <table>
        <tr>
          <td>Harga Akhir</td>
          <td>
            <input type="text" name="harga_akhir" required/>
          </td>
        </tr>
        <tr>
          <td>Margin Harga (Laba)</td>
          <td>
            <input type="text" name="laba" required/>
          </td>
        </tr>
        <tr>
          <td></td>
          <td>
            <button type="submit" name="button">
              Kirim
            </button>
          </td>
        </tr>
      </table>
    </form>
  </body>
</html>
