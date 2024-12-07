<!DOCTYPE html>
<html lang="ja">

<body>
  <p>
    <?php
        class food {
          // プロパティを定義する
          private $name;
          private $price;

          public function __construct(string $name, int $price){
          
          $this->name = $name;
          $this->price = $price;
          }
          public function show_price(){
            echo $this->price;
            echo '<br>';
          }
      }

      class animal {
        // プロパティを定義する
        private $name;
        private $hight;
        private $weight;

        public function __construct(string $name, int $hight,int $weight){
        $this->name = $name;
        $this->hight = $hight;
        $this->weight = $weight;
        }
        public function show_hight(){
          echo $this->hight;
          echo '<br>';
        }
    }

    
      // インスタンス化する
      $food = new food('potato', 250);

      $animal = new animal('dog', 60,5000);

      // インスタンス$userの各プロパティの値を出力する
      print_r($food);
      echo "<br>";
      
      // インスタンス$userの各プロパティの値を出力する
      print_r($animal);
      echo "<br>";

      $food->show_price();
      $animal->show_hight();

      ?>
      </p>
 </body>
 
 </html>