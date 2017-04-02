<?php
$food=$_POST['food'];

$food=strtolower($food);

$foods=array('potato','rice','blueband','beef','eggs','ham'
,'sweets','peas','bushera','watermellon');


$badfood=array('junk','alcohol','mandazi','chapati','kitoko','sugarcane','nturire','bell','kikomando');

if(in_array($food,$foods)){

echo "<p class=\"alert alert-success\">$food is good for you get some more.</p>";

}


elseif(in_array($food,$badfood)){

echo "<p class=\"alert alert-danger\">$food is not good for you at all it has alot of issues its better you quit it.</p>";

}


elseif ($food=='pork') {
	echo "<p class=\"alert alert-danger\">
A disadvantage of pork is that it increases your risk of bladder cancer if you eat well-done or burnt pork often, according to Jie Lin, Ph.D., in an article published by the University of Texas M.D. Anderson Cancer Center. Pork cooked at high temperatures creates heterocyclic amines, HCAs, which can cause cancer. A 12-year study involving 844 patients with bladder cancer and 878 patients without bladder cancer gathered nutritional information and found that patients who ate pork and other red meats well-done had a significantly higher risk of bladder cancer.</p>";
}

elseif ($food=='apple') {
	echo "<p class=\"alert alert-success\">The apple is high in fiber, vitamin C and numerous antioxidants. Apples are very fulfilling, and perfect as snacks if you find yourself hungry between meals</p>";
}

elseif ($food=='avocado') {
	echo "<p class=\"alert alert-success\">Avocados are different than most fruits, because they are loaded with healthy fats instead of carbs. They are creamy, tasty and high in fiber, potassium and vitamin C</p>";
}
elseif ($food=='bananas') {
	echo "<p class=\"alert alert-success\">Bananas are among the world’s best sources of potassium. They are also high in vitamin B6 and fiber. Bananas are ridiculously convenient and portable.</p>";
}

elseif ($food=='oranges') {
	echo "<p class=\"alert alert-success\">Oranges are well known for their vitamin C content. They are also high in fiber, antioxidants and taste incredible</p>";
}

elseif ($food=='carrots') {
	echo "<p class=\"alert alert-success\">The carrot is a popular root vegetable. It is extremely tasty and crunchy, and loaded with nutrients like fiber and vitamin K. Carrots are also very high in carotene antioxidants, which have numerous benefits.</p>";
}

elseif ($food=='tomatoes') {
	echo "<p class=\"alert alert-success\">Tomatoes are usually categorized as a vegetable, although they are technically a fruit. They are tasty and loaded with nutrients like potassium and vitamin C.</p>";
}

elseif ($food=='onions') {
	echo "<p class=\"alert alert-success\">Onions have a very strong flavor, and are very popular for use in recipes. They contain a number of bioactive compounds believed to have health benefits.</p>";
}

elseif ($food=='fish') {
	echo "<p class=\"alert alert-success\">Fish and other seafoods tend to be very healthy and nutritious.

They are especially rich in in omega-3 fatty acids and iodine, two nutrients that most people don’t get enough of.

Studies show that people who eat the most foods from the sea (especially fish) tend to live longer and have a lower risk of many diseases, including heart disease, dementia and depression.</p>";
}

elseif ($food=='rice') {
	echo "<p class=\"alert alert-success\">Rice is one of the oldest cereal grains, and is currently a staple food for more than half of people in the world. Brown (whole grain) rice is fairly nutritious, with a decent amount of fiber, vitamin B1 and magnesium..</p>";
}

elseif ($food=='bread') {
	echo "<p class=\"alert alert-success\">Most people eat a lot of bread.

For those who are trying to adopt a healthier diet for the first time, it can be extremely challenging to find something to eat instead of bread.
bread is good for u n ur family tell dad that the app said he should buy some more bread..</p>";
}


elseif ($food=='pizza') {
	echo "<p class=\"alert alert-success\">Pizza is one of the world’s most popular junk foods.

This is not surprising, given that it tastes awesome and is incredibly convenient to eat.

The problem is that most commercially prepared pizzas are made with seriously unhealthy ingredients.

The dough is made from highly refined wheat flour, and the meats on them are usually processed. Pizza is also extremely high in calories.Some pizza places use healthier ingredients. Homemade pizzas can also be very healthy, as long as you choose wholesome ingredients.</p>";
}

elseif ($food=='milk') {
	echo "<p class=\"alert alert-success\">Many people can’t tolerate dairy products.

However, for people who do tolerate them, they are a healthy source of various important nutrients Full-fat dairy products seem to be the best, and studies show that people who eat the most full-fat dairy have a lower risk of obesity and type 2 diabetes</p>";
}

elseif ($food=='chips') {
	echo "<p class=\"alert alert-success\">They’re addictive, we know, which is why you probably don't want a bag of them in your kitchen. Your average chips are calorie-dense and high in fat. What's more, they're not exactly conducive to portion control (finishing half the bag is more likely than stopping at just a handful of chips). When eating two servings of classic potato chips, for example, you’re looking at about 20 grams of fat.</p>";
}


elseif ($food=='icecream') {
	echo "<p class=\"alert alert-success\">Anything that tastes as good as ice cream does can’t be good for you, and as it turns out one of the reasons to avoid it is the high levels of cholesterol it contains. While one serving might not get you there, many of us don’t stop at one serving, and it’s very to overeat when it comes to ice cream, especially if we’re eating it due to emotional reasons.

Eat a pint of Ben and Jerry’s Dublin Mudslide because you’re feeling blue, and you’ll stack up 240mg of cholesterol, nearly a full day’s worth. If Haagen Daaz is your choice you and you decide to go healthy with their “5” line-up that uses just five ingredients, you’re still looking at nearly 235mg if the taste moves you to finish the pint.</p>";
}

elseif ($food=='cookies') {
	echo "<p class=\"alert alert-success\">Even when they’re portioned out in those cute (and tempting) little 100-calorie pouches, packaged cookies are something you simply don’t want to keep in your cupboards. The USDA recommends not exceeding 40 grams of added sugar per day, and some of these single-pack treats contain a quarter of that amount.</p>";
}

elseif ($food=='pancakes') {
	echo "<p class=\"alert alert-success\">Pancake mix seems like a nice thing to have on hand for impromptu weekend brunches, but it’s literally nothing more than a box of refined flour, which you then top with fat and sugar (via the butter and syrup). Instead, keep frozen protein waffles on hand—if you get a nostalgic breakfast craving, you can indulge without completely derailing your diet.</p>";
}

elseif ($food=='popcorn') {
	echo "<p class=\"alert alert-success\">Many a microwave popcorn contains alarming amounts of sodium, fat, and calories in the form of butter and other flavoring. Air popped is a much better option.
</p>";
}

elseif ($food=='soda') {
	echo "<p class=\"alert alert-success\">Soda has no business being in your house these days. While it's best to cut the sugary beverage out of your life for good, if you get a hankering for an ice-cold Coke at a sports game here and there, we’d understand. But purchasing a bottle for regular at-home consumption? That's another story.
</p>";
}











elseif ($food=='chicken') {
	echo "<p class=\"alert alert-success\">Chicken breast is low in fat and calories, but extremely high in protein. It is a great source of many nutrients. Again, feel free to eat fattier cuts of chicken if you’re not eating that many carbs.</p>";
}

elseif ($food=='cassava') {
	echo "<p class=\"alert alert-success\">Better known to Americans as tapioca, the pudding favorite is produced from the roots of this bush-like plant. But the crop can have deadly consequences. If prepared incorrectly, the cassava plant can produce cyanide, a deadly compound when consumed. A small number of people are also allergic to the plant — the American Cancer Society warns that those with a latex rubber allergy might be more susceptible and should consider opting for a different dessert..</p>";
}




elseif ($food=='posho') {
	echo "<p class=\"alert alert-success\">posho is highly rich in carbohydrates. Many people would prefer maize to other energy foods to supply them with energy. Being a starchy food, it releases energy slowly in the blood stream ensuring that you stay energized the whole day. Fortified maize meal is rich in minerals and vitamins. It is rich in iron, sodium and trace elements such as manganese.  Porridge made from maize is also sweet and delicious. It is fed to young children and can be a good substitute for milk. It is usually prepared using milk. It can be enriched by adding margarine and sugar.
</p>";
}

elseif ($food=='beans') {
	echo "<p class=\"alert alert-success\">Beans are the least expensive source of protein, especially when compared to fresh meat. Aside from protein, complex carbs and fiber, beans contain a powerhouse of nutrients including antioxidants, and vitamins and minerals, such as copper, folate, iron, magnesium, manganese, phosphorous, potassium and zinc
</p>";
}

































else{
	echo "<h5 class='text-info'>searching for your $food go on type</h5>";
}



?>
