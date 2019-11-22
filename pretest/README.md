# Pre-Test

## Logic and Algorithm

- เติมโค้ดในส่วนที่เว้นไว้ เพื่อให้โปรแกรมทำงานได้ถูกต้อง
- สามารถสร้าง function หรือ class เพิ่มเติมภายนอกได้
- ถ้าคิดวิธีการแก้ได้มากกว่าหนึ่งวิธี สามารถส่งมาทั้งหมดได้ หรือเลือกวิธีการที่คิดว่าประสิทธิภาพดีที่สุด

### Q.1
สร้างฟังก์ชันที่เช็กว่ามีสมาชิก 2 ตัวใน array ที่บวกค่าได้เท่ากับค่าที่ต้องการหรือไม่
```php
function hasSumOfTwo(array $numbers, int $total): bool{
  //TODO
}

assert(hasSumOfTwo([1, 2, 3, 4, 5, 6], 10) == true); // 4 + 6
assert(hasSumOfTwo([3, 4, 7], 8) == false);
```

### Q.2
นับจำนวน Palindrome String ***ที่ยาวที่สุด***ใน string ที่กำหนดให้
> Palindrome Word คือ คำที่เวลาอ่านตัวอักษรจาก `ซ้าย -> ขวา` หรือ `ขวา -> ซ้าย` ได้คำเดียวกัน เช่น noon, kayak
```php
function palindromicCounter(string $sentence): int{
  //TODO
}

assert(palindromicCounter("civic") == 5); //civic
assert(palindromicCounter("abccivic") == 5); //civic
assert(palindromicCounter("abccivicxyz") == 5); //civic
assert(palindromicCounter("onoonabc") == 4); //noon
assert(palindromicCounter("oonoonabc") == 5); //oonoo
assert(palindromicCounter("abc") == 1); //a or b or c
```

### Q.3
สลับตัวเลขกลับหัว เช่น 123 ให้สลับ 3 จากหลักหน่วยมาเป็นหลักร้อยแทน
> output ที่ได้ต้องออกมาเป็น `int` (ไม่ใช่  `string`) ในกรณีที่ตัวเลขติดลบ output ที่ได้จะต้องติดลบเหมือนเดิมหลังจากกลับตัวเลขแล้ว
```php
function reverseInt(int $number): int{
  //TODO
}

assert(reverseInt(123) == 321);
assert(reverseInt(1234) == 4321);
assert(reverseInt(-123) == -321);
assert(reverseInt(120) == 21);
```

### Q.4
แปล `string` ที่เป็น format ของเลขโรมัน ให้กลายเป็น `int`
> กำหนดว่า input เป็น format ของเลขโรมันที่ถูกต้องเสมอ
```
I   = 1
V   = 5
X   = 10
L   = 50
```
![Roman Number](https://www.knowtheromans.co.uk/Images/RomanNumeralsChart1to100/RomanNumeralsChart1to100900x1000.jpg "Roman Number")

```php
function romanStringToInt(string $roman_number): int{
  //TODO
}

assert(reverseInt("I") == 1);
assert(reverseInt("III") == 3);
assert(reverseInt("IV") == 4);
assert(reverseInt("V") == 5);
assert(reverseInt("VII") == 7);
assert(reverseInt("IX") == 9);
assert(reverseInt("XXII") == 22);
assert(reverseInt("XVI") == 26);
assert(reverseInt("LXXIV") == 74);
assert(reverseInt("XLIX") == 49);
```

### Q.5
หาค่ากลางจาก `array` ที่กำหนด ในกรณีที่จำนวนตัวเลขเป็นเลขคู่ จะมีค่ากลาง 2 จำนวน ให้ `return` กลับมาเป็น `array` ของ `int`
```php
function median(array $numbers){
  //TODO
}

assert(median([2,3,1,4]) == [2,3]);
assert(median([2,5,3,1,4]) == 3);
```

### Q.6
`input` เป็น `string` ของ `(`, `{`, `[`, `)`, `}`, `]` ให้ตรวจสอบว่าการเปิด-ปิดวงเล็กทำได้ถูกต้องตามลำดับหือไม่
```php
function isValidParentheses(string $sentence): bool{
  //TODO
}

assert(isValidParentheses("") == true);
assert(isValidParentheses("()") == true);
assert(isValidParentheses("({})") == true);
assert(isValidParentheses("([)") == false);
assert(isValidParentheses("({)}") == false);
assert(isValidParentheses("(({([])}))") == true);
```

### Q.7
`input` เป็น `2D-array` ให้หมุน `array` ตัวนี้ในทิศตามเข็มนาฬิกา
```php
function rotateSquareRight(array $square): array{
  //TODO
}

assert(rotateSquareRight(
  [
    [1, 2, 3, 4],
    [5, 6, 7, 8],
    [9, 10, 11, 12],
  ]
) == 
  [
    [9, 5, 1],
    [10, 6, 2],
    [11, 7, 3],
    [12, 8, 4],
  ]
);
```

---

## OOP
*under construction*