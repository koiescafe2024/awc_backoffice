<?php
 require_once "../vendor/autoload.php";
 include_once  '../vendor/sonata/google-authenticator/src/FixedBitNotation.php';
 include_once '../vendor/sonata/google-authenticator/src/GoogleAuthenticator.php';
 include_once  '../vendor/sonata/google-authenticator/src/GoogleQrUrl.php';

$api_url="";


function CallAPI($method, $url, $data)
{

    $ch = curl_init($url);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

    $response = curl_exec($ch);

    curl_close($ch);

    return $response;

}



//$app_url = $api_url;

$flag = $_GET['flag'];



///////////////////////////////////////////  Login /////////////////////

if ($flag == 'login') {

    $uname = $_POST['uname'];

    $password = $_POST['pass'];

    $code = $_POST['2fa'];

  //  die($uname.'--'.$password);

     

$g = new \Sonata\GoogleAuthenticator\GoogleAuthenticator();

$secret="DSMGOQ6SHAX3M3XKE";



//$secret = $g->generateSecret();
//echo "Get a new Secret: $secret \n";
//echo "The QR Code for this secret (to scan with the Google Authenticator App: \n";

//echo \Sonata\GoogleAuthenticator\GoogleQrUrl::generate('Bundaii', $secret, 'GoogleAuthenticatorExample');
//echo "\n";


//echo 'Current Code is: ';
$g->getCode($secret);


//echo "\n";

//echo "Check if $cd is valid: ";

if ($g->checkCode($secret, $code)) {
  echo "YES \n";
  die("matched");
} else {
  echo "NO \n";
  die("not matched");
}

  

  

    $url = $app_url . "/adminlogin.php?email=" . $email . "&password=" . $password;

    $data = CallAPI("POST", $url, $_POST);

    $size = json_decode($data);

    if (count($size) == 0) {

        echo $data;



    } else {

        echo $data;

    }

}

///////////////////////////////////////////  ADD Customer /////////////////////

if ($flag == 'add-customer') {

    $custo_name = $_POST['name'];

    $custo_email = $_POST['email'];

    $custo_num = $_POST['mobile'];

    $custo_dob = $_POST['dob'];

    $custo_pass = $_POST['password'];

    $address = $_POST['address'];

    $lat_lng = $_POST['lat_lng'];

    $createdon = $_POST['createdon'];





    if (isset($_FILES['images'])) {

        $profile = new CURLFile($_FILES['images']['tmp_name'], $_FILES['images']['type'], $_FILES['images']['name']);

        $post_cust_data = array('createdon' => $createdon, 'name' => $custo_name, 'email' => $custo_email, 'images' => $profile, 'mobile' => $custo_num, 'dob' => $custo_dob, 'password' => $custo_pass, 'address' => $address, 'lat_lng' => $lat_lng);

    } else {

        $post_cust_data = array('createdon' => $createdon, 'name' => $custo_name, 'email' => $custo_email, 'mobile' => $custo_num, 'dob' => $custo_dob, 'password' => $custo_pass, 'address' => $address, 'lat_lng' => $lat_lng);

    }

    $ch = curl_init();

    curl_setopt_array($ch, array(

        CURLOPT_URL => "" . $api_url . "/registercust.php",

        CURLOPT_RETURNTRANSFER => true,

        CURLOPT_ENCODING => '',

        CURLOPT_MAXREDIRS => 10,

        CURLOPT_TIMEOUT => 0,

        CURLOPT_FOLLOWLOCATION => true,

        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,

        CURLOPT_CUSTOMREQUEST => 'POST',

        CURLOPT_POSTFIELDS => $post_cust_data,

    )
    );

    $response = curl_exec($ch);

    curl_close($ch);

    //print_r ($post_cust_data);

    echo $response;

}

///////////////////////////////////////////  ADD Mechanic /////////////////////

if ($flag == 'add-mechanic') {

    $mech_ref = $_POST['ref_code'];

    $mech_name = $_POST['name'];

    $mech_email = $_POST['email'];

    $mech_pass = $_POST['password'];

    $mech_num = $_POST['mobile'];

    $mech_dob = $_POST['dob'];

    $mech_category = $_POST['category'];

    $mech_exper = $_POST['experience'];

    $address = $_POST['location'];

    $lat_lng = $_POST['lat_lng'];

    $createdon = $_POST['createdon'];





    if (isset($_FILES['images'])) {

        $profile = new CURLFile($_FILES['images']['tmp_name'], $_FILES['images']['type'], $_FILES['images']['name']);



        $post_mech_data = array('createdon' => $createdon, 'ref_code' => $mech_ref, 'name' => $mech_name, 'images' => $profile, 'email' => $mech_email, 'password' => $mech_pass, 'mobile' => $mech_num, 'dob' => $mech_dob, 'category' => $mech_category, 'experience' => $mech_exper, 'location' => $address, 'lat_lng' => $lat_lng);

    } else {

        $post_mech_data = array('createdon' => $createdon, 'ref_code' => $mech_ref, 'name' => $mech_name, 'email' => $mech_email, 'password' => $mech_pass, 'mobile' => $mech_num, 'dob' => $mech_dob, 'category' => $mech_category, 'experience' => $mech_exper, 'address' => $address, 'lat_lng' => $lat_lng);

    }

    $ch = curl_init();

    curl_setopt_array($ch, array(

        CURLOPT_URL => "" . $api_url . "/registermech.php",

        CURLOPT_RETURNTRANSFER => true,

        CURLOPT_ENCODING => '',

        CURLOPT_MAXREDIRS => 10,

        CURLOPT_TIMEOUT => 0,

        CURLOPT_FOLLOWLOCATION => true,

        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,

        CURLOPT_CUSTOMREQUEST => 'POST',

        CURLOPT_POSTFIELDS => $post_mech_data,

    )
    );

    $response = curl_exec($ch);

    curl_close($ch);

    //print_r ($post_mech_data);

    echo $response;

}

/////////////////////////////  Add Category ////////////////////////////////////



if ($flag == 'category-add') {

    $status = $_POST['status'];

    $cate_name = $_POST['category'];

    if (isset($_FILES['logo'])) {

        $logo = new CURLFile($_FILES['logo']['tmp_name'], $_FILES['logo']['type'], $_FILES['logo']['name']);

        $post_data = array('category' => $cate_name, 'logo' => $logo, 'status' => $status);

    } else {

        $post_data = array('category' => $cate_name, 'status' => $status);

    }

    $ch = curl_init();

    curl_setopt_array($ch, array(

        CURLOPT_URL => "" . $api_url . "/addcategory.php",

        CURLOPT_RETURNTRANSFER => true,

        CURLOPT_ENCODING => '',

        CURLOPT_MAXREDIRS => 10,

        CURLOPT_TIMEOUT => 0,

        CURLOPT_FOLLOWLOCATION => true,

        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,

        CURLOPT_CUSTOMREQUEST => 'POST',

        CURLOPT_POSTFIELDS => $post_data,

    )
    );

    $response = curl_exec($ch);

    curl_close($ch);

    // print_r ($post_data);

    echo $response;

}



/////////////////////////////////// Booking Page  Reject service   /////////////////////////////

if ($flag == 'reject-service') {



    $url = $app_url . "/rejectbooking.php";

    $ch = curl_init();

    curl_setopt_array($ch, array(

        CURLOPT_URL => $url,

        CURLOPT_RETURNTRANSFER => true,

        CURLOPT_ENCODING => '',

        CURLOPT_MAXREDIRS => 10,

        CURLOPT_TIMEOUT => 0,

        CURLOPT_FOLLOWLOCATION => true,

        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,

        CURLOPT_CUSTOMREQUEST => 'POST',

        CURLOPT_POSTFIELDS => $_POST,

    )
    );

    $response = curl_exec($ch);

    curl_close($ch);

    //print_r ($cat_data);

    echo $response;

}



////////////////////////////////Mechanic page Reject //////////////////////////

if ($flag == 'reject-mech') {

    $status = $_POST['status'];

    $id = $_POST['id'];

    $post_mech_serv = array('id' => $id, 'status' => $status);

    $url = $app_url . "/accept-reject-mech.php";

    $ch = curl_init();

    curl_setopt_array($ch, array(

        CURLOPT_URL => $url,

        CURLOPT_RETURNTRANSFER => true,

        CURLOPT_ENCODING => '',

        CURLOPT_MAXREDIRS => 10,

        CURLOPT_TIMEOUT => 0,

        CURLOPT_FOLLOWLOCATION => true,

        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,

        CURLOPT_CUSTOMREQUEST => 'POST',

        CURLOPT_POSTFIELDS => $post_mech_serv,

    )
    );

    $response = curl_exec($ch);

    curl_close($ch);



    echo $response;

}



//////////////////////////Mechanic  page Accept /////////////

if ($flag == 'accept-mech') {

    $status = $_POST['status'];

    $id = $_POST['id'];

    $post_mech_serv = array('id' => $id, 'status' => $status);

    $url = $app_url . "/accept-reject-mech.php";

    $ch = curl_init();

    curl_setopt_array($ch, array(

        CURLOPT_URL => $url,

        CURLOPT_RETURNTRANSFER => true,

        CURLOPT_ENCODING => '',

        CURLOPT_MAXREDIRS => 10,

        CURLOPT_TIMEOUT => 0,

        CURLOPT_FOLLOWLOCATION => true,

        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,

        CURLOPT_CUSTOMREQUEST => 'POST',

        CURLOPT_POSTFIELDS => $post_mech_serv,

    )
    );

    $response = curl_exec($ch);

    curl_close($ch);



    echo $response;

}



//////////////////////////Booking page Accept /////////////

if ($flag == 'accept-service') {



    $url = $app_url . "/create-task.php";

    $ch = curl_init();

    curl_setopt_array($ch, array(

        CURLOPT_URL => $url,

        CURLOPT_RETURNTRANSFER => true,

        CURLOPT_ENCODING => '',

        CURLOPT_MAXREDIRS => 10,

        CURLOPT_TIMEOUT => 0,

        CURLOPT_FOLLOWLOCATION => true,

        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,

        CURLOPT_CUSTOMREQUEST => 'POST',

        CURLOPT_POSTFIELDS => $_POST,

    )
    );

    $response = curl_exec($ch);

    curl_close($ch);



    echo $response;

}



/////////////////////////////////////////////Add Feedback//////////////////



if ($flag == 'add-feedback') {

    $mech_id = $_POST['mech_id'];

    $rating = $_POST['rating'];

    $review = $_POST['review'];

    $createdon = $_POST['createdon'];

    $url = $app_url . "/addfeedback.php";

    $post_feedback_data = array('cust_id' => null, 'mech_id' => $mech_id, 'rating' => $rating, 'review' => $review, 'createdon' => $createdon);

    $ch = curl_init();

    curl_setopt_array($ch, array(

        CURLOPT_URL => "" . $api_url . "/addfeedback.php",

        CURLOPT_RETURNTRANSFER => true,

        CURLOPT_ENCODING => '',

        CURLOPT_MAXREDIRS => 10,

        CURLOPT_TIMEOUT => 0,

        CURLOPT_FOLLOWLOCATION => true,

        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,

        CURLOPT_CUSTOMREQUEST => 'POST',

        CURLOPT_POSTFIELDS => $post_feedback_data,

    )
    );

    $response = curl_exec($ch);

    curl_close($ch);

    //print_r ($cat_data);

    echo $response;

}

//------------------------------------- Add Service---------------------------------------

if ($flag == 'add-service') {

    // echo $flag;

    $categ = $_POST['category'];

    $categId = $_POST['cat_id'];

    $service = $_POST['service'];

    $price = $_POST['price'];
    $service_description = $_POST['service_description'];

    $url = $app_url . "/create-service-type.php";

    if (isset($_FILES['images'])) {

        $profile = new CURLFile($_FILES['images']['tmp_name'], $_FILES['images']['type'], $_FILES['images']['name']);



        $post_data = array('images' => $profile, 'cat_id' => $categId, 'category' => $categ, 'service' => $service, 'price' => $price, 'service_description' => $service_description);

    }


    $ch = curl_init();

    curl_setopt_array($ch, array(

        CURLOPT_URL => $url,

        CURLOPT_RETURNTRANSFER => true,

        CURLOPT_ENCODING => '',

        CURLOPT_MAXREDIRS => 10,

        CURLOPT_TIMEOUT => 0,

        CURLOPT_FOLLOWLOCATION => true,

        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,

        CURLOPT_CUSTOMREQUEST => 'POST',

        CURLOPT_POSTFIELDS => $post_data,

    )
    );

    $response = curl_exec($ch);

    curl_close($ch);

    //print_r ($post_mech_data);

    echo $response;



}

//-------------------------------- Notification ----------------------------------------

if ($flag == 'get_notification_count') {





    $url = $app_url . "/notification-count.php";

    $data = CallAPI("POST", $url, $_POST);

    echo $data;



}



if ($flag == 'remove_notification') {





    $url = $app_url . "/notification-count.php";

    $data = CallAPI("POST", $url, $_POST);

    echo $data;



}


if ($flag == 'get-current-cust-mach-lat-lng') {




    $url = $app_url . "/get-current-cust-mach-lat-lng.php";

    $data = CallAPI("POST", $url, $_POST);

    echo $data;



}


?>