<?php

class Robot{
    private $name = ''; //初期値は空白
    
    public function setName($name){
        $this->name = (string)filter_var($name);
    }   //名前を取得
    
    public function getName(){
        return $this->name;
    }   //取得した名前を書きだす
}

$a = new Robot;
$a -> setName('ロボ太郎');
$b = new Robot;
$b -> setName('ロボ次郎');

echo $a->getName();
echo $b->getName();


class Robot2{
    private $name = '';
    public function __construct($name){
        $this->setName($name);
    }
    public function setName($name){
        $this->name = (string)filter_var($name);
    }
    public function getName(){
        return $this->name;
    }
}

$a = new Robot2('ロボ太郎');
$b = new Robot2('ロボ次郎');

echo $a->getName();
echo $b->getName();

class Character{
  public $hp;
}

class Fighter extends Character{
  public $power;
  public function attack($opponent){
    $opponent->hp = $opponent->hp - $this->power/2;
  }
}

$fighter1 = new Fighter();
$fighter1->hp = 100;
$fighter1->power = 40;
$fighter2 = new Fighter();
$fighter2->hp = 80;
$fighter2->power = 10;
$villager = new Fighter();
$villager->hp = 60;
$villager->power = 10;
echo $fighter2->hp;  //1
$fighter1->attack($fighter2);
echo $fighter2->hp;  //2
$fighter1->attack($villager);
echo $villager->hp;   //3

//クラス定義 ここから
class User{
  public $firstName; //プロパティ
  public $lastName; //プロパティ

  //メソッド（コンストラクタ）
  public function __construct($firstName, $lastName){
    $this->firstName = $firstName;
    $this->lastName = $lastName;
  }

  //メソッド
  public function getFullName(){
    return $this->firstName . " " . $this->lastName;
  }
}
//クラス定義 //ここまで

//変数$userAにUserクラスのインスタンスを代入
$userA = new User();
//プロパティに代入
$userA->firstName = "Taro";
$userA->lastName = "Tanaka";
//$userA = new User("Taro", "Tanaka"); でも同じ

//__constructを定義しているとコンストラクタを呼び出せる
// コンストラクタ＝インスタンス化の際に自動で呼ばれるメソッド
$userB = new User("Jiro", "Sato");
//メソッド呼び出し
echo $userA->getFullName(); //Taro Tanaka
echo $userB->getFullName(); //Jiro Sato