<?php
php error_reporting (E_ALL ^ E_NOTICE);

// images => description
include_once('data.php');

function image_table($size,$image_array) {
  global $photos,$season;
  $image_count = count($image_array);
  //$sizex = $size;
  //$sizey = ($size / 800) * 600;  // assume 800 x 600
  $output .= "<table class='images'><tr>\n";
  foreach($image_array as $image){
    $imgsrc = "images/$season/thumbs$size/$image.jpg";
    list($sizex, $sizey, $img_type, $img_attr) = @getimagesize($imgsrc);
    $desc  = $photos[$image];
    $output .= "<td><a href='photo.php?$image'><img src='$imgsrc' width='$sizex' height='$sizey' alt='$desc' title='$desc' border='0'></a></td>\n";
  }
  $output .= "<tr><td colspan='$image_count' class='comment'>Click on Images to Enlarge</td></tr>\n";
  $output .= "</table>\n";
  return $output;
}


$title   = 'Bed and Breakfast at Forest Cottage, Tintern, Wye Valley';
$content = <<<HTML
<p>Welcome to our comfortable and convenient bed and breakfast accommodation. We offer you a completely private, detached stone built cottage situated on our small, organic farm in Tintern Forest. It is located eight miles from the Severn Bridge on the M4/ M48, and just 1.2 miles above Tintern Village in beautiful Monmouthshire with its many castles and ancient churches. </p>

{${$table=image_table(350,array('forest-cottage-b+b-exterior-1',
                                'forest-cottage-b+b-exterior-2',))}}
$table

<p>The spacious, light and airy twin-bedded room has an en-suite shower and toilet and a separate dining/ kitchen area equipped with electric cooker and washer/ dryer. Outside is a secluded, pretty patio for your own, exclusive use. It is surrounded by a flower garden and fruit orchard.</p>

{${$table=image_table(225,array('forest-cottage-b+b-interior-1',
                                'forest-cottage-b+b-interior-2',
                                'forest-cottage-b+b-interior-3',))}}
$table

<p>Tintern Village is located on the lower reaches of the river Wye in a designated area of outstanding natural beauty. It is famous for the ruins of Tintern Abbey, the atmospheric beauty of which have inspired English poets and painters, including Wordsworth, Turner and Samuel Palmer. Today Tintern is a popular tourist destination offering pubs, restaurants and a variety of shops all worth a visit.</p>

<p>The area offers a wide range of interesting leisure activities – from extensive walks in Tintern Forest, along the famous Offa’s Dyke Path, or on the tranquil banks of the River Wye. Cyclists and canoeists also have many, varied local options. For the driver, The Black Mountains and Abergavenny, the Forest of Dean and historic towns such as Monmouth, Chepstow and Ross-on-Wye are within easy reach. The cities of Hereford, Bristol, Bath and Cardiff are only an hour’s drive away through beautiful countryside. The area abounds in historic villages with excellent tourist facilities. Naturalist will appreciate the abundant wildlife – deer, river- and woodland birds and wild flowers – for which the area is renowned.</p>


{${$table=image_table(225,array('tintern-abbey',
                                'tintern-fields',
                                'tintern-garden',))}}
$table

<p>Breakfast is served in our cottage conservatory overlooking the flower garden and orchard.</p>

<div class='menu'>
<h3>Sample breakfast Menu: </h3>
<hr/>
    <p>Fruit Juice ~ Yoghurt ~ Cereals</p>
<ol>
  <li>The Full English Breakfast</li>
  <span>~ or ~</span>
  <li>Toast Bagle Topped with Scrambled Egg and Smoked Salmon</li>
  <span>~ or ~</span>
  <li>Continental Breakfast; Croissant, Boiled Egg and Toast with a Selection of Cold Meats.</li>
</ol>
    <p>Toast and Jam ~ Tea or Coffee</p>
<hr/>
  <p>Our ingredients are farm fresh, organic and home made as far as possible.</p>
</div>

<p class='contact'>For further information or booking, please ring us on <br/>01291-689-392 or 07818-680-239<br/>
<br/>
Forest Cottage, Trelleck Road, <br/>Tintern, Chepstow, Monmouthshire, NP166SN<br/>
<br/>See the <a href='http://maps.google.co.uk/maps?q=NP16+6SN+(Forest+Cottage,+Trelleck+Road,+Tintern,+Chepstow,+Monmouthshire)&spn=0.219480,0.481407&hl=en'>map to for directions</a>


{${$table=image_table(225,array('flowers',
                                'garden-tree',
                                'oak-tree',))}}
$table
HTML;

include_once('templates/bedandbreakfasttintern.php');
?>
