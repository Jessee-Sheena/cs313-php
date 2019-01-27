<?php
Class Products {

     public $productArray = array(
          "Glimmer" => array(
             "id" => "Glimmer",
             "name"=> "Glimmer of Hope",
             "price" => "4.00",
             "image" => "images/glimmerofhopes.jpg",
             "description" => "Glimmer of Hope digital scrap-booking kit is designed for breast cancer survivors and people who are currently fighting this
                            devistating illness. Preserve your memories of this time with these beautiful designs."
             ),
           "Shabby" => array(
              "id" => "Shabby",
             "name"=> "Shabby St. Nick",
             "price" => "3.50",
             "image" => "images/shabbystnick.jpg",
             "description"=> "This fun Christmas kit has all the bells and whistles. It is full of cute cartoons and fun elements that are sure
                            to make your holiday scrap-book pages merry and bright!"
             ),
           "Frightful" => array(
             "id" => "Frightful",
             "name"=> "Frightful",
             "price" => "3.00",
             "image" => "images/frightfuls.jpg",
             "description"=> "Full of spooky but cute designs, frightful is the perfect addition to your holiday digital scrap-booking kits
                            your kids costumes will be forever memorialized with these spooktacular pages!"
             ),
           "FallDoll" => array(
              "id" => "FallDoll",
             "name"=> "Fall Doll",
             "price" => "3.25",
             "image" => "images/Fall_Dolls.jpg",
             "description"=> "This fun fall digital scrap-booking kit is perfect for preserving your favorite fall memories!"
             ),
           "P" => array(
              "id" => "P",
             "name"=> "P's and Q's",
             "price" => "2.50",
             "image" => "images/psandqs.jpg",
             "description"=> "This is a great kit to scrap your back to schoold pics of the kids! or if you are a teacher this is full of fun
                            school designs that can be used for many of your school themed prints."
             )
);
    public function getProducts() {
    return $this->productArray;
    }
}
 ?>