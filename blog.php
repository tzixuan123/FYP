<?php include 'inc/cart.php';?>





<!DOCTYPE HTML>
<html lang="en-US">
<head>
<title>Chinese Medicine</title>
<meta charset="UTF-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<!-- Boxicons -Import Icons-->
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


      <style>

    .article-container {
        display:grid;
        margin: 0 auto; /* Center the container horizontally */
        padding: 20px; /* Add padding to the container */
       
        background-color: #f0f0f0; /* Background color */
        border: 1px solid #ccc; /* Border style for the entire container */
        border-radius: 5px; /* Rounded corners */
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); /* Add a subtle shadow */
    }

    .article {
        border-bottom: 1px solid #ccc; /* Add a bottom border to separate articles */
        padding: 10px 0; /* Add vertical padding between articles */
    }

    .news-title {
        font-size: 24px; /* Adjust the font size */
        color: #0078d4; /* Text color */
        margin: 10px 0; /* Add margin to separate the title from other content */
        display: flex; /* Use flex layout to align the icon and text */
        align-items: center; /* Vertically center the icon and text */
    }

    .news-title i {
        font-size: 32px; /* Adjust the icon size */
        margin-right: 10px; /* Add space between the icon and text */
        color: #ff5733; /* Icon color */
    }

    h2 {
    font-size: 28px; /* Increase the font size */
    color: #333; /* Text color */
    margin: 20px 0; /* Add more margin to separate titles */
    padding: 10px 0; /* Add padding at the top for spacing */
    border-bottom: 2px solid #0078d4; /* Add a colored underline for a separator */
    text-transform: capitalize; /* Capitalize each word in the title */
}

    h3 {
        padding-top:50px;
        font-size: 24px; /* Adjust the font size for article titles */
        margin: 10px 0; /* Add margin to separate titles */
    }

    img {
        max-width: 100%; /* Ensure images don't exceed container width */
        height: auto; /* Maintain image aspect ratio */
        margin: 10px 0; /* Add margin below images */
    }

    p {
    font-size: 18px; /* Increase the font size for better readability */
    line-height: 1.6; /* Increase line height for improved readability and spacing */
    color: #555; /* Set a slightly darker text color for better contrast */
    margin: 10px 0; /* Add margin to separate descriptions */
    text-align: justify; /* Justify text for a cleaner look */
}


    a {
        color: #0078d4; /* Link color */
        text-decoration: none; /* Remove underline from links */
    }
    .sticky {
            position: fixed;
            top: 0;
             width: 78%;
                z-index: 10000;

        }


        .sticky + .content {
            padding-top: 102px;
  

        }
</style>

</head>
<body>



      
<div class="article-container">

<h3 class="news-title">
    <i class='bx bxs-news'></i> Chinese Medicine News
</h3>
    <?php
    // API endpoint URL
    $api_url = 'https://gnews.io/api/v4/search?q=TCM%20medicine&lang=en&country=china&max=10&apikey=f842a38e1b95cdbea8c2d81b3bd4162d';

    // Initialize cURL session
    $ch = curl_init($api_url);

    // Set cURL options
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Return the response as a string
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Disable SSL verification (for testing only)
    // Add other options like headers, POST data, etc. as needed

    // Execute the cURL session
    $response = curl_exec($ch);

    // Check for cURL errors
    if (curl_errno($ch)) {
        echo 'Curl error: ' . curl_error($ch);
    }

    // Close the cURL session
    curl_close($ch);

    // Check if the request was successful
    if ($response !== false) {
        // Process the API response
        $data = json_decode($response, true); // Assuming the response is in JSON format
        if ($data !== null && isset($data['articles'])) {
            // Loop through the news articles and display relevant information
            foreach ($data['articles'] as $article) {
                $title = $article['title'];
                $description = $article['description'];
                $url = $article['url'];
                $image = $article['image']; // Assuming the image URL is provided

                // Display the information including the image
                echo '<h2>' . $title . '</h2>';
                if (!empty($image)) {
                    echo '<img src="' . $image . '" alt="' . $title . '">';
                }
                echo '<p>' . $description . '</p>';
                echo '<a href="' . $url . '">Read More</a>';
            
            }
        } else {
            echo "<script>
            alert('Blog is unavailable at the moment. Please try again later.');
            window.location.href='index.php';
            </script>";
        }
    } else {
        echo 'Failed to retrieve data from the API.';
    }
    ?>
</div>

</body>
</html>

