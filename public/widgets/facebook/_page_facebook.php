<?php
/**
 * Created by PhpStorm.
 * User: Max
 * Date: 10/1/15
 * Time: 10:59 PM
 */

//Configure facebook data
$page_id = '1433601266925408';
$access_token = '1599822940260368|L6prZhxUoUQR4ldALq5HoLCoKbU';
$posts = '';

//Grab json object
$json_object = file_get_contents('https://graph.facebook.com/'.$page_id.'/posts?access_token='.$access_token);

//Decode json object, object format
$fb_data = json_decode($json_object);
$tags_array = array();

//Create array that includes a formatted permalink & its associated name
function create_tags_permalink($tags){
    $tags_permalink = array();

    foreach($tags as $key => $value){
        $tags_permalink[$key]['permalink'] = str_replace(' ', '-', $value['name']) .'-'.$value['id'];
        $tags_permalink[$key]['name'] = $value['name'];
    }

    return $tags_permalink;
}

for($i = 0; $i < 3; $i++){
    //Find the post date, then format
    $dateCreated = new DateTime($fb_data->data[$i]->created_time);
    $date = date_format($dateCreated, 'F d, Y');

    //Count amount of likes per post
    $likes = count($fb_data->data[$i]->likes->data);

    //Declare message variable
    $message = $fb_data->data[$i]->message;


    //If message tags are set, proceed
    if(isset($fb_data->data[$i]->message_tags)){

        //Loop through each tag and create an array of tags
        foreach($fb_data->data[$i]->message_tags as $tags){
            for($j = 0; $j < count($tags); $j++){
                $tags_array[] = array('name' => $tags[$j]->name, 'id' => $tags[$j]->id);
            }
        }

        //Send tags to be formatted for replacing
        $tag_strings = create_tags_permalink($tags_array);

        //Replace all occurrences of the tag with a link
        foreach($tag_strings as $tag){
            $message = str_replace($tag['name'], '<a target="_blank" href="https://facebook.com/'.$tag['permalink'].'">'.$tag['name'].'</a>', $message);
        }
    }

    //Build posts variable
    $posts .= '<div class="feed-content fb">';
    $posts .= '<div class="date">'.$date.'</div>';
    $posts .= '<div class="fb-msg">'.$message.'</div>';
    $posts .= '<div class="fb-likes"><span>Likes: </span>'.$likes.'</div>';
    $posts .= "</div><br><br>";
}

//Echo all posts
echo $posts;
?>