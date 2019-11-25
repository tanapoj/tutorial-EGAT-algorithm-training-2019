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
> กำหนดว่า input เป็น format ของเลขโรมันที่ถูกต้องและเป็นตัวอักษร Capital Letter เสมอ
![Roman Number](https://www.knowtheromans.co.uk/Images/RomanNumeralsChart1to100/RomanNumeralsChart1to100900x1000.jpg "Roman Number")

```php
function romanStringToInt(string $roman_number): int{
  //TODO
}

assert(romanStringToInt("I") == 1);
assert(romanStringToInt("III") == 3);
assert(romanStringToInt("IV") == 4);
assert(romanStringToInt("V") == 5);
assert(romanStringToInt("VII") == 7);
assert(romanStringToInt("IX") == 9);
assert(romanStringToInt("XXII") == 22);
assert(romanStringToInt("XVI") == 26);
assert(romanStringToInt("LXXIV") == 74);
assert(romanStringToInt("XLIX") == 49);
```

### Q.5
หาค่ากลางจาก `array` ที่กำหนด ในกรณีที่จำนวนตัวเลขเป็นเลขคู่ จะมีค่ากลาง 2 จำนวน ให้ `return` กลับมาเป็น `array` ของ `int`
```php
function median(array $numbers){
  //TODO
}

assert(median([2, 3, 1, 4]) == [2, 3]); // 1 [2 3] 4
assert(median([2, 5, 3, 1, 4]) == 3); // 1 2 [3] 4 5
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

## Object Oriented Programming
ออกแบบ solution ของโจทย์ต่อไปนี้โดยใช้หลักการของ Object Oriented โดยสามารถสร้าง class & object สำหรับตอบได้ไม่จำกัด ออกแบบ relation ระหว่าง class เองได้ทั้งหมด

### Q.1
สร้างระบบจัดเก็บข้อมูลพนักงานของบริษัท ซึ่งมีข้อมูลที่ต้องเก็บดังนี้

- id
- firstname, lastname (ชื่อ-สกุล)
- position (ตำแหน่ง)
- salary (เงินเดือน)

ซึ่งระบบจะต้องแสดงผลเป็นรายชื่อพนักงานทั้งหมดได้ โดยสามารถกำหนดว่าการแสดงรายชื่อพนักงานทั้งหมดจะเรียงตาม field ไหน เช่น

- แสดงรายชื่อพนักงานทั้งหมด เรียงตาม id
- แสดงรายชื่อพนักงานทั้งหมด เรียงตาม firstname, หากชื่อซ้ำให้เรียงตาม lastname แทน
- แสดงรายชื่อพนักงานทุกคนที่เงินเดือน > 18000 เรียงตาม position

### Q.2
สร้างระบบ (class + object) สำหรับฟังก์ชันสร้าง interval times เช่น ต้องการเวลาทั้งหมดเริ่มตั้งแต่ 8 โมงเช้าถึง 10 โมงเช้า โดยแต่ละช่วงเวลาจะห่างกันทุกๆ 15 นาที
```php
$times = makeTimeInterval("8:00", "10:00", 15);
print_r($times);//["08:00","08:15","08:30","08:45","09:00","09:15","09:30","09:45","10:00"]

$times = makeTimeInterval("8:00", "10:00", 25);
print_r($times);//["08:00","08:25","08:50","09:15","09:40"]

$times = makeTimeInterval("8:00", "14:30", 80);
print_r($times);//["08:00","09:20","10:40","12:00","13:20"]
```


---

## Functional Programming
### Q.1
กำหนดให้มี `array` ใดๆ หนึ่งตัว ซึ่งเป็น `unstructure-array` ที่ไม่รู้ว่าโครงสร้างเป็นอย่างไร

สร้างฟังก์ชันสำหรับหาผลรวมชื่อ field ที่กำหนด เช่น
ต้องการหาผลรวม field ที่ชื่อว่า `x` ทุกตัว ไม่ว่าจะอยู่ level ไหนใน array ก็ตาม

> กำหนดให้ field ที่เอามาหา summation ได้จะต้องมี type เป็น `int` เท่านั้น
```php
$data = [
    'a' => [
        [
            'x' => 10,
            'b' => [
                'x' => 20,
            ],
            'c' => 123,
        ],
        'd',
        'x' => [
            'e' => 456
        ],
    ],
    'f' => 789,
    'x' => 30,
];

assert(sum_field($data, 'x') == 60); // 10 + 20 + 30
```
### Q.2
กำหนดโครงสร้าง `data` ในรูปแบบต่อไปนี้
```php
$scores = [
  ['score' => 85, 'gender' => 'M'],
  ['score' => 78, 'gender' => 'M'],
  ['score' => 30, 'gender' => 'M'],
  ['score' => 54, 'gender' => 'F'],
  ['score' => 72, 'gender' => 'F'],
];
```
สร้างฟังก์ชันที่รับโครงสร้าง `array` ของ score เข้าไปแล้ว
- บวกคะแนนให้ทุกคนอีก 10 คะแนน
- เลือกเฉพาะ score ของ male ออกมา
- หาค่าเฉลี่ย

โดยมีเงื่อนไขคือห้ามใช้ loop
> **HINT**: สามารถใช้ halper function ของ php มาช่วยแทนได้ https://www.php.net/manual/en/function.array.php

```php
function getAverageMaleScoreAfterExtra10(array $scores): float {
  //TODO
}
```

### Q.3
อธิบายว่าคอนเซ็ปต่อไปนี้ในการเขียนโปรแกรมแบบ Functional คืออะไร
- Pure Function
- First-Class Function
- High Order Function
- Closure

---

## Database

### Q.1
อธิบายความแตกต่างระหว่าง RDBMS vs NoSQL

### Q.2
Index ในระบบ Database มีไว้สำหรับทำอะไร และเมื่อไหร่ที่ควรร้าง

### Q.3
ระหว่างการเขียน query

```sql
SELECT *
FROM Student s, Major m
WHERE s.major_id = m.major_id AND s.GPA > 3.00
```
และ
```sql
SELECT *
FROM Student s JOIN Major m ON s.major_id = m.major_id 
WHERE s.GPA > 3.00
```
แบบไหนทำงานได้ performance ดีกว่ากัน (ทั้งเรื่อง time-complexity และ memory-complexity)

### Q.4
ออกแบบ ER Diagram ของระบบต่อไปนี้

บริษัท Grab Food ต้องการ application สำหรับพนักงานส่งของของบริษัท (ต่อจากนี้จะเรียกว่า SD: Sale Driver)

ซึ่ง SD แต่ละคนจะสามารถกดเปิดแอพเพื่อ task list ซึ่งเป็นลิสต์ของงานที่ต้องทำได้ ถ้าSDสนใจรับงานไหนมาทำ เขาจะต้องทำการ booking task นั้นไว้เพื่อจองงาน (SD คนอื่นจะได้ไม่เอา task นั้นไป)

หลังจาก SD booking งานแล้วทำงานจนเสร็จ เขาจะสามารถรับงานต่อไปได้ (ถ้าเขายังทำงานไม่เสร็จ จะไม่มีสิทธิ์รับงานต่อไป ยกเว้นเขาจะ cancel booking ที่ทำอยู่ก่อน)

ระบบจะต้องสามารถดึงข้อมูลว่าในขณะนี้มี SD กี่คนที่กำลังรับงานอยู่ในระบบ และแสดงค่าตอบแทนของ SD แต่ละคนแบบรายวัน/เดือนได้ โดยค่าตอบแทนของ SD ในการรับส่งงาน 1 task จะไม่เท่ากัน ขึ้นอยู่กับระยะทางใกล้-ไกลของ task

ข้อมูลของ SD ที่ระบบจะต้องจัดเก็บ
- sd-code
- contact name
- tel
- address

ข้อมูลของ task งานจะประกอบด้วย
- task-id
- source-location (latitude, longitude)
- destination-location (latitude, longitude)
- fee-rate per km (อัตราค่าตอบแทนในการส่งของ เป็นราคาต่อกิโลเมตร)
- list of delivery product (รายชื่อสินของทั้งหมด ที่ต้องรับ-ส่งสำหรับ task นี้)