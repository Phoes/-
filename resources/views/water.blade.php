@extends('welcome') 
@section('sidebar')
<center>ตารางคุณภาพน้ำประปาทางด้านกายภาพ<br><br>
  <table>
    <tr>
      <th>คุณภาพน้ำ</th>
      <th>ค่าที่เหมาะสม</th>
    </tr>
    <tr>
      <td>อุณหภูมิ(องศาเซลเซียส)</td>
      <td>-</td>
    </tr>
    <tr>
       <td>ความเป็นกรดเป็นด่าง(pH)</td>
      <td>6.5-8.5</td>
    </tr>
    <tr>
      <td>ออกซิเจนละลายน้ำ(มก/ล.)</td>
      <td>-</td>
    </tr>
    <tr>
      <td>สีปรากฏ (Apperance colour)</td>
      <td>15</td>
    </tr>
    <tr>
      <td>รสและกลิ่น (Taste and odour)</td>
      <td>ไม่เป็นที่น่ารังเกียจ</td>
    </tr>
    <tr>
      <td>ความขุ่น (Turbidity)</td>
      <td>4</td>
  </table><br><br>
  <center>ตารางคุณภาพน้ำประปาทางด้านเคมี<br><br>
  <table>
    <tr>
      <th>คุณภาพน้ำ</th>
      <th>ค่าที่เหมาะสม</th>
    </tr>
    <tr>
      <td>ปริมาณสารที่ละลายทั้งหมด (Total dissolved solids) (mg/l)</td>
      <td>600</td>
    </tr>
    <tr>
       <td>เหล็ก (Iron) (mg/l)</td>
      <td>0.3</td>
    </tr>
    <tr>
      <td>แมงกานีส (Manganese) (mg/l)</td>
      <td>0.3</td>
    </tr>
    <tr>
      <td>ทองแดง (Copper) (mg/l)</td>
      <td>2.0</td>
    </tr>
    <tr>
      <td>สังกะสี (Zinc) (mg/l)</td>
      <td>3.0</td>
    </tr>
    <tr>
      <td>ความกระด้างทั้งหมด (Total hardness as CaCO3 ) (mg/l)</td>
      <td>300</td>
    </tr>
    <tr>
      <td>ซัลเฟต (Sulfate) (mg/l)</td>
      <td>250</td>
    </tr>
    <tr>
      <td>คลอไรด์(Chloride) (mg/l)</td>
      <td>250</td>
    </tr>
    <tr>
      <td>ฟลูออไรด์ (Fluoride) (mg/l)</td>
      <td>0.7</td>
    </tr>
    <tr>
      <td>ไนไตรทในรูปไนเตรท (Nitrate asvNO3) (mg/l)</td>
      <td>50</td>
    </tr>
    <tr>
      <td>ไนไตรท์ในรูปไนไตรท์(Nitrite as NO2) (mg/l)</td>
      <td>3</td>
    </tr>
    <tr>
      <td>โคลิฟอร์มแบคทีเรียทั้งหมด ( Total Coliform bacteria) ต่อ100ml</td>
      <td>-</td>
    </tr>
    <tr>
      <td>อีโคไล (E. coli) ต่อ100ml</td>
      <td>-</td>
    </tr>
    <tr>
      <td>สแตฟฟิลโลค็อกคัส ออเรียส (Staphylococcus aureus) ต่อ100ml</td>
      <td>-</td>
    </tr>
    <tr>
      <td>แซลโมเนลลา (Salmonella spp.) ต่อ100ml</td>
      <td>-</td>
    </tr>
    <tr>
      <td>คลอสทริเดียม เพอร์ฟริงเจนส์(Clostridium perfringens) ต่อ100ml</td>
      <td>-</td>
    </tr>
    <tr>
      <td>ปรอท (Inorganic mercury) (mg/l)</td>
      <td>0.001</td>
    </tr>
    <tr>
      <td>ตะกั่ว (Lead) (mg/l)</td>
      <td>0.01</td>
    </tr>
    <tr>
      <td>สารหนู (Arsenic) (mg/l)</td>
      <td>0.01</td>
    </tr>
    <tr>
      <td>ซีลีเนี่ยม (Selenium) (mg/l)</td>
      <td>0.01</td>
    </tr>
    <tr>
      <td>โครเมียม (Chromium) (mg/l)</td>
      <td>0.05</td>
    </tr>

    <tr>
      <td>แคดเมียม (Cadmium) (mg/l)</td>
      <td>0.003</td>
    </tr>
    <tr>
      <td>แบเรียม (Barium) (mg/l)</td>
      <td>0.7</td>
    </tr>
    <tr>
      <td>ไซยาไนด์ (Cyanide ) (mg/l)</td>
      <td>0.07</td>
    </tr>
    <tr>
      <td>อัลดรินและดิลดริน (Aldrin and dieldrin) (µg/l)</td>
      <td>0.03</td>
    </tr>
    <tr>
      <td>คลอเดน (Chlordane) (µg/l)</td>
      <td>0.02</td>
    </tr>
    <tr>
      <td>ดีดีที (DDT) (µg/l)</td>
      <td>1</td>
    </tr>
    <tr>
      <td>เฮปตาคลอและเฮปตาคลออีพอกไซด์ (Heptachlor and heptachlor epoxide) (µg/l)</td>
      <td>0.03</td>
    </tr>
    <tr>
      <td>เฮกซะคลอโรเบนซีน (Hexachlorobenzene) (µg/l)</td>
      <td>1</td>
    </tr>
    <tr>
      <td>ลินเดน (Lindane) (µg/l)</td>
      <td>2</td>
    </tr>
    <tr>
      <td>เมททอกซิคลอร์ (Methoxychlor) (µg/l)</td>
      <td>20</td>
    </tr>
    <tr>
      <td>คลอโรฟอร์ม (Chloroform) (µg/l)</td>
      <td>300</td>
    </tr>
    <tr>
      <td>โบรโมไดคลอโรมีเทน (Bromodichloromethane) (µg/l)</td>
      <td>60</td>
    </tr>
    <tr>
      <td>ไดโบรโมคลอโรมีเทน (Dibromochloromethane) (µg/l)</td>
      <td>100</td>
    </tr>
    <tr>
      <td>โบรโมฟอร์ม (Bromoform) (µg/l)</td>
      <td>100</td>
    </tr>
    <tr>
      <td>ความแรงรวมรังสีแอลฟา (Gross alpha activity) (Bq/l)</td>
      <td>0.5</td>
    </tr>
    <tr>
      <td>ความแรงรวมรังสีเบต้า (Gross beta activity) (Bq/l)</td>
      <td>1</td>
    </tr>
  </table><br><br>

  @stop