<?php
include "header.php";
?>
 
    <td><img src="../หนัง/anna.jpg" alt="" width="205" height="264" /></td>
    <td><img src="../หนัง/spider man.jpg" alt="" width="185" height="272" /></td>
    <td><img src="../หนัง/Special forces.jpg" alt="" width="194" height="275" /></td>
    <td><img src="../หนัง/fast.jpg" alt="" width="184" height="273" /></td>
  </tr>
  <tr>
    <td bgcolor="#99FFCC"><strong>รหัสสินค้า</strong> 0001</td>
    <td bgcolor="#99FFCC"><strong>รหัสสินค้า</strong> 0002</td>
    <td bgcolor="#99FFCC"><strong>รหัสสินค้า</strong> 0003</td>
    <td bgcolor="#99FFCC"><strong>รหัสสินค้า</strong> 0004</td>
  </tr>
  <tr>
    <td bgcolor="#FFFFCC"><strong>ราคา</strong> ซื้อ120 / เช่า60</td>
    <td bgcolor="#FFFFCC"><strong>ราคา</strong> ซื้อ130 / เช่า65</td>
    <td bgcolor="#FFFFCC"><strong>ราคา</strong> ซื้อ120 / เช่า60</td>
    <td bgcolor="#FFFFCC"><strong>ราคา</strong> ซื้อ130 / เช่า65</td>
  </tr>
  <tr>
    <td bgcolor="#FFFFCC"><a href="rent.php?id=0001&type=buy">
          <input type="submit" name="aaa" id="aaa" value="ซื้อ" />
    </a>
      <a href="rent.php?id=0001&type=rent">
      <input type="submit" name="เช่า" id="rent" value="เช่า" />
      </a>
    </td>
    <td bgcolor="#FFFFCC">
    <a href="rent.php?id=0002&type=buy">
    <input type="submit" name="aaa2" id="aaa2" value="ซื้อ" />
    </a>
    <a href="rent.php?id=0002&type=rent">
   <input type="submit" name="rent" id="rent2" value="เช่า" />
     </a>
      </td>
    <td bgcolor="#FFFFCC">
    <a href="rent.php?id=0003&type=buy">
    <input type="submit" name="aaa3" id="aaa3" value="ซื้อ" />
    </a>
    <a href="rent.php?id=0003&type=rent">
      <input type="submit" name="rent2" id="rent3" value="เช่า" />
      </a>
      </td>
    <td bgcolor="#FFFFCC">
    <a href="rent.php?id=0004&type=buy">
    <input type="submit" name="aaa4" id="aaa4" value="ซื้อ" />
    </a>
    <a href="rent.php?id=0004&type=rent">
      <input type="submit" name="rent3" id="rent4" value="เช่า" />
      </a>
      </td>
  </tr>
  
</table>
</body>
</html>
