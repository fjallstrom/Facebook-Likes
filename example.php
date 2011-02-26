<php
require('FbLikes.class.php');

# create new instance of like class
$FbLikes = new FbLikes();

# add all the urls you want to measure
$FbLikes->addUrl('http://earthpeople.se/labs/');
$FbLikes->addUrl('http://wplove.se/kom-pa-wpbar/');
$FbLikes->addUrl('http://debaser.se/');

# set the sort order, either 'likes' or 'untouched'
$FbLikes->order_by = 'likes';

# get all the fb like data
$likes = $FbLikes->getLikes();

# echo the results
if($likes){
	foreach($likes as $row){
		echo $row->normalized_url . ': ' . $row->like_count . " facebook likes\n";
	}
}