# OOP in PHP

Đề bài: Tìm hiểu về OOP trong PHP  
Thực hiện: Vũ Văn Nghĩa

# Kiến thức thu được

## 1. OOP là gì

### Khái niệm:

OOP viết tắt của Object-Oriened Programming.
Lập trình thủ tục là viết các chức năng hay thủ tục để thực thi các thao tác trên dữ liệu, trong khi lập trình hướng đối
tượng là về tạo đối tượng chứa cả các hàm và dữ liệu.

Ưu điểm của lập trình hướng đối tượng so với lập trình thủ tục:

- OOP nhanh hơn và dễ thực thi hơn
- OOP cung cấp 1 cấu trúc rõ ràng cho chương trình
- OOP giữ cho mã của bạn DRY (Don't Repeat Yourself) - đây là quy tắc về việc giảm việc lặp code và làm cho mã của bạn
  dễ chỉnh sửa và bảo trì hơn.
- Nó làm cho có thể để tạo ra các áp tái sử dung đầy đủ với ít mã hơn và thời gian ngắn hơn.

### 2. Class và Object

**Class** và **Object** là hai khía cạnh chính của lập trình hướng đối tượng: **class** là khuân mẫu của đối tượng và **
object** là các thực thể của class đó. Khi đối tượng được tạo ra, nó sẽ kế thừa đầy đủ các thuộc tính và các cư xử từ
lớp,
nhưng mỗi đối tượng lại có các giá trị riêng của nó.

- Để taọ ra được class sử dụng keyword **class**, theo sau là tên class và {}. Toàn bô class sẽ được viết trong cặp {}.

    - Các biến bên trong class gọi là các thuộc tính.
    - Các hàm trong class gọi là các phương thức.

- Để tạo ra đói tượng, sử dụng từ khóa **new** theo sau là tên lớp.
- Từ khóa **$this** tham chiếu tới đối tượng hiện tại và chỉ đựọc dùng trong class.

1. Hàm tạo (__construct())

Khi tạo hàm __construct() trong class, hàm sẽ tự động được gọi khi bạn khởi tạo đối tượng từ lớp (hàm tạo luôn bắt đầu
bằng hai dấu gạch dưới __)

2. Hàm hủy (__destruct())

Khi tạo hàm này trong class, hàm sẽ tự động gọi khi đối tượng bị hủy hoặc kết thúc kịch bản.

3. Chỉnh sửa quyền truy cập:

Các thuộc tính và method có hạm vi truy cập.  
Có 3 phạm vi truy cập:

- **public**: Có thể truy cập các phương thức, thuộc tính ở mọi nơi.
- **protected**: Chỉ có thể truy cập trong phạm vi lớp và các lớp con dẫn xuất của nó.
- **private**: Chi cho phép truy cập trong lớp.

4. Tính kế thừa :

Lớp con sẽ kế thừa tất cả các thuộc tính và phuong thức **public** hoặc **protected** của lớp cha .  
Một lớp con được định nghĩa bằng keyword **extends**.

  ```php
  class Child extends Parents{
  // your code
  }

  ```

Các phương thức kế thừa từ lớp cha sẽ bị ghi đè nếu lớp con có các phương thức tương tự. Để tránh trường hợp này, có
thể sử dụng khóa **final** trước method trong lớp cha.

5. Hằng

- Một hằng đưowjc khai báo bằng từ khóa **const**.
- Một hằng phân biệt hoa thường, nhưng nên dùng ký tự hoa.
- Có thể truy cập hằng bên ngoài hàm bằng toán tử tríc xuất phạm vi `::` trước tên hằng.

6. Lớp trừu tượng và phương thức trừu tượng

- Một lớp gọi là trừu tượng khi nó chứa ít nhất 1 phương thức trừu tượng.
- Một phương thức trừu tượng là phương thức chỉ chứa khai báo,không chứa thân.
- Một lớp trừu tượng hay 1 thuôc tính được định nghĩa bằng key **abstract**
  ```php 
        abtract class Parent{
       abstract public function method1();
       abstract public function method2($para1, $para2)
  ```
- Khi kế thừa từ lớp trừu tượng, các phương thức từ lớp con phải cùng tên và cùng hoặc ít hạn chế truy cập
  hơn so với phương thức của lớp cha. Kiểu và số lượng của tham số yêu cầu cũng phải giống nhau. Tuy nhiên, lớp con cũng
  có thể có các tham số tùy
  chọn riêng.

7. Interface.

Giao diện cho phép bạn xác định rõ các phương thức nên được triển khai trong class.

Giao diện cho phép sử dụng nhiều lớp khác nhau trong cùng 1 cách. Khi một hoặc nhiều class sử dụng chung 1 giao diện, nó
gọi là **tính đa hình**.

Các giao diện được khai báo với tử khóa **interface**  
Một lớp triển khai 1 giao diện phải triển khai tất cá các phương thức của giao diện đấy.

```php 
interface InterfaceName{
public function method1();
public function method2();
}
```

#### So sánh Interface và Abstract:

Về cơ bản, Interface và abstract giống nhau. Có các điểm khác biệt:

- interface chỉ có cac methods và các hằng , abstract có cả các thuộc tính.
- Tất cả các phương thức của interface phải là public, trong khi abstract cho phép public và protect.
- class có thể khai triển interface trong khi đồng thời kế thừa từ lớp trừu tượng.
- abstract class la 1 lớp cha cho các lớp con có cùng bản chất. bản chất ở đây là kiểu, loại , nhiệm vụ của class. Hai
  class triển khai cùng 1 interface
  có thể khác nhau về bản chất.
- interface là 1 chức năng mà bạn có thể thêm vào bất kỳ class nào.


8. Traits

- Một lớp chỉ có thể kế thừa từ 1 lớp cha. **Traits** sinh ra giúp lớp con kế thừa nhiều các cư xử khác nhau
- **Traits** được dùng để khai báo các phương thức có thể được sử dụng trong nhiều lớp khác nhau. Traits có các phương
  thức hoặc phương thức trừu tượng,
  có phạm public, protected hoặc private.
- Traits được khai báo với key **trait**

 ```php 
 trait nameTrait{
 public function message1(){
 echo "hello world"; 
 
 }
 abstract public function message2();
 }
 class test{
 use nameTrait;
 //now you can use method in trait. 
 }
 ```

#### Trait và interface

- traits: Bản chất là việc copy và paste code giữa các class. Vì 1 lớp chỉ kế thừa được từ 1 lớp cha. trait giúp giải
  quyết
  vấn đề này.
- interface: quy định các phương thức mà class cần triển khai, nó như 1 khuôn mẫu để các lớp triển khai.

9. Phương thức tĩnh

- Phương thức tĩnh - bạn có thể truy cạp trực tiếp mà không cần khởi tạo đối tượng.
- Phuong thức tĩnh được khai báo với key `static`
- Để sử dụng phương thức tĩnh sử dụng `classname :: namemethod`;

 ```php 
 class Car{
 public static function brand(){
 echo "Name brand";
 }
 Car::brand()// goi toi phuong thuc.
 }
 ```

- Trong class, có thể sử dụng key `self::name` để truy suất tới phương thức tĩnh.
- Để gọi phương thức tĩnh được kế thừa từ lớp cha, có thể sử dụng key `parent :: name`.

10. Thuộc tính tĩnh: giống phương thức tĩnh.
11. Namespace.

Không gian tên sinh ra để giải quyết hai vấn đề:

- Cho phép tổ chức tốt hơn bằng cách nhóm các lớp làm việc với nhau thực thi cùng 1 nhiệm vụ.
- Cho phép sử dụng cùng 1 tên cho nhiều lớp.

Không gian tên được khai báo với cú pháp `namespace`  
**note**: Không gian tên phải được khai báo ở đầu file .

### Tính chất của OOP

#### Tính đóng gói:

Cho phép che giấu các thông tin và các thức xử lý bên trong của đối tượng. Các đối tượng khác
không thể tác động trực tiếp
đến và làm thay đối
trạng thái của đối tượng mà chỉ thông qua các phương thức công khai do đối tượng cung cấp.

#### Tính kế thừa:

Cho phép các lớp con kế thừa và tái sử dụng các phương thức thuộc tính cũ của lớp cha.

#### Tính đa hình:

Cho phép các đối tượng khác nhau thực thi cùng 1 chức năng theo cách khác nhau

#### Tính trừu tượng

Là phương pháp trừu tượng hoá các định nghĩa lên những hành dộng, tính chất mà đối tượng cần phải có.

## Phương thức magic

1. Hàm tạo __construct(): Hàm được gọi khi đối tượng được khởi tạo
2. Hàm hủy __destruct(): Hàm được gọi khi đối tượng bị hủy hoặc hết kịch bản.
3. Hàm __call() và __callStatic(): Hàm đưọc gọi khi đối tượng truy cập đến phương thức không tồn tại. Nhận hai tham
   số: `$method` và `$parameter`
   tương ứng là tên phuong thức và mảng tham số đựọc truyền vào.
4. Hàm __set($key,$value): Hàm được gọi khi ta truyền dữ liệu vào thuộc tính không tồn taị hoặc private.
5. Hàm __get(): Tự động gọi khi ta truy cập vào thuộc tính không tồn tại hoặc Private.
6. Hàm __isset(): Hàm được gọi khi chúng ta thực hiện kiểm tra xem 1 phương thức có tồn tại hay không hay truy
   cập vào thuộc tính không được truy cập .Cụ thể là isset() hay empty().(Không áp dụng cho thuộc tính tĩnh )
7. Hàm __unset(): Hàm này đưược gọi khi unset() 1 thuộc tính không đưọc truy cập .
8. Hàm __toString(): Hàm này được gọi khi echo 1 đối tượng. method __toString bắt buộc trả về 1 chuỗi.
9. __invoke(): Hàm này được gọi khi ta cố gắng gọi đối tượng như 1 hàm.
10. __sleep(): Đưọc gọi khi serilize 1 đối tượng. Thường khi serilize 1 đối tượng, nó sẽ trả về hết các thuộc tính.
    Nhưng method __sleep
    sẽ quy định các thuộc tính được trả về.
11. Hàm __wakeup : được gọi khi unserilize 1 đối tượng.
12. Hàm __set_state: được dùng khi chúng ta var_export() một đối tượng.
13. Hàm __clone: Được gọi khi chúng ta clone (sao chép 1 đối tượng thành đối tượng mới không liên
    quan đến đối tượng cũ ).
14. Hàm __debugInfo: được gọi khi var_dump một đối tượng 

## Autoload 

Nột trong các quy ước thực hành viết OOP, mỗi lớp sẽ được lưu vào một file riêng. 
Nếu bạn muốn sử dụng, bạn phải include or require các file đó vào code. Nhưng từ PHP 5, trở đi, hỗ trợ đặc tính 
**autoloading** để tự động load các class khi nó được gọi. hỗ trọ các hàm như 
spl_autoload_register;spl_autoload_function; spl_autoload_extension...  

PSR viết tắt của PHP Standard Recommendation là các tiêu chuẩn trong viết code PHP.

PSR - 4 là các tiêu chuẩn về tự động tải. Nội dung chính của PSR-4 là quy tắc tổ chức các thư mục code sao cho mọi class đưọc tham chiếu đến bằng cách cài đăt như sau: 

`\<namespace>(\<subnamespace>\)*\<classname>\`

- `namespace` - Tiền tố đầu tiên bắt buộc phải có 
- `subnamespace` - Các namespace con theo sau namespace đầu tiên. Các subsnamespace phải tương ứng với các thư mục con  
bên trong `base dicrectory`, tên thư mục trùng với tên namespace. 
- `classname` - Băt  buộc phải trùng với tên lớp tương ứng nằm trong namespace cuối cùng. 

### So sánh PHP 7 và PHP 5
<table>
<thead>
<th>Đặc điểm </th>
<th>PHP 7</th>
<th>PHP 5</th>
</thead>
<tbody>
<tr>
<td>Hiệu năng </td>
<td>Cao gấp hai lần PHP 5</td>
</tr>
<tr>
<td>Khai báo kiểu trả về </td>
<td>Cho phép khai báo kiểu trả về của 1 hàm hoặc 1 phương thức </td>
<td>Không cho phép </td>
</tr>
<tr>
<td>Lớp vô danh</td>
<td>Có hỗ trợ</td>
<td>Không hỗ trợ</td>
</tr>
<tr>
<td>spaceship</td>
<td>Hỗ trợ</td>
</tr>
<tr>
<td>Nullcoaching</td>
<td>Hỗ trợ</td>
<td>Không hỗ trợ</td>
</tr>
<tr>
<td>Hỗ trợ 64 bit</td>
<td>Hỗ trợ</td>
<td>Không hỗ trợ </td>
</tr>
<tr>
<td> Xử lý lỗi </td>
<td>
Thay thế một số lỗi lớn với các ngoại lệ có thể dễ dàng xử lý.
</td>
</tr>
</tbody>
</table>
 
### Một số đặc điểm trong PHP  8

1. Truyền tham số theo tên gọi 
2. cho phép khai báo khai báo và khởi tạo thuộc tính trong hàm __construct 
  ```php
    class Test{
    public $x;
    protected $y;
    public function __construct( $x = 0, $y = 0)
    {
    $this->x = $x;
    $this->y = $y
    }
    // php 8
    class Test {
    public function __construct(public $x, protected $y)
    {}
    }
    
    }

  ```

3. Union Type: 
    
   ```php
   class Test{
   public int|float $number;
   function __construct($number){
   $this->number = $number;
   
   }
   
   }
   $number = new Test('string')// sinh ra lỗi 
   ```
4. Nullsafe operator : cho phép truy cập vào giá trị thuộc tính null mà không bị lỗi.


```php 
$country = $session ?->user ?->getAddress()->country;
```
5. Biểu thức Match: có chức năng như switch case


## Clean code

### Variables 

1. Sử dụng tên biến có ý nghĩa và có thể phát âm 
2. Sử dụng cùng từ vựng cho 1 loại biến 
3. Sử dụng tên có khả năng tìm kiếm 
4. sử dụng các biến giải thích 
5. Tránh các lưới quá sâu và trả về quá sớm: Qúa nhiều ìf-else sẽ làm code khó theo dõi. Rõ ràng tốt hơn ngầm.
6. Đừng để người đọc phải dịch nghĩa tên biến của bạn. Rõ ràng thì tốt hơn ngầm định 
7. Không thêm các ngữ cảnh không cần thiết. Nếu tên lớp/đối tượng của bạn đã nói lên điều gì đó, đừng nhắc lại nó trong tên biến của bạn 

### Comparision 

1. sử dụng === 
2. null coalescing ??

### Function 

1. Sử dụng các tham số mặc định thay vì sử dụng điều kiện kiểm tra. 
2. Tham số của hàm ( 2 hoặc ít hơn)
3. Tên của hàm nên nói nó làm gì
4. Các hàm chỉ nên là 1 cấp độ của trừu tượng. Khi các hàm có nhiều hơn 1 cấp độ trừu tượng, các hàm của bạn sẽ phải làm quá nhiều. Việc chia nhỏ các giúp cho việc tái sử dụng và kiểm tra dễ hơn 
5. Không sử dụng cờ như 1 tham số của hàm. 
6. Tránh các hiệu ứng phụ
7. Không ghi vào các hàm toàn cục 
8. kHông sử dụng mô hình Singleton.
9. Đóng gói các điều kiện
10. Tránh điều kiện phủ định 
11. Tránh các điều kiện 
12. Tránh kiểm tra kiểu 
13. Xóa mã chết 


### Object and data-structer

1. Sử dụng bao đóng đối tượng 
2. Tạo các đối tượng có thành viên riêng tư/ bảo vệ.


### Class 

1. Thích bố cục hơn kế thừa
2.  Tránh giao diện trôi chảy. 
3. Nên sử dụng `final` bất kể khi nào có thể 
   1. Nó ngăn cản các chuỗi kế thừa không kiểm soát 
   2. Khuyến khích bố cục
   3. Khuyến khích quy tắc 1 trách nhiệm đơn 
   4. Khuyến khích các nhà phát triển sử dụng các phương thức public thay vì mở rộng lớp để truy cập vào các thuộc tính bảo vệ 
   5. Cho phép bạn thay đổi code mà không phá võ ứng dụng mà nó sử dụng lớp đó.

### SOLID: 
Viết tắt của 5 nguyên tắc cơ bản trong thiết kế và lập trình hướng đối tượng. 

1. S : Nguyên tắc 1 trách nhiệm duy nhất : Không bao giờ có nhiều hơn 1 lý do để thay đổi lơp của bạn .
2. O : quy tắc mở đóng: Cho phép nguời dùng thêm các chức năng mới mà không thay đổi mã hiện tại. 
3. L: Nguyên tắc thay thế LisKov : nếu bạn có lớp cha và lớp con, thì lớp cơ sở và lớp con có thể được sử dụng thay thế cho nhau mà không nhận được kết quả sai.
3. I: Interface segregation Principle: Khách hàng không phải bắt buộc phụ thuộc vào các giao diện mà họ không sử dụng. 
4. D: Dependency Inversion Principle : Nguyên tắc đảo ngược sự phụ thuộc : 
  - Modules cấp cao không nên phụ thuộc vào module cấp thấp. Cả hai nên phụ thuộc vào trừu tượng. 
  - Trừu tượng không nên phụ thuộc vào chi tiết. Chi tiết nên phụ thuộc vào trừu tượng. 

### DRY ( Don't repeat yourself )
Cố gắng tránh các mã trùng lặp. Điều này sẽ có nghĩa là có nhiều hơn 1 chỗ bạn cần thay đổi khi bạn cần thay đổi một số logic. 